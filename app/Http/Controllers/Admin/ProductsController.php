<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Products ;
use App\Model\ProductsGallary ;
use App\Model\ProductsColor ;
use App\Model\ProductsSize ;
use App\Model\DepartmentProducts as Dep;
use Validator;
use Auth;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allproducts = Products::orderBy('id','desc')->get();


        return view(app('at').'.product.products.index',['title'=>trans('admin.products'),'allproducts'=>$allproducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Dep::where('parent','=',0)->pluck('en_name','id');
        return view(app('at').'.product.products.create',['title'=>trans('admin.add'),'department'=>$department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
            'en_name' => 'required',
            'ar_name' => 'required',
            'en_content' => 'required',
            'ar_content' => 'required',
            'parent' => 'required',
            'photo' => 'required|image|mimes:gif,jpeg,jpg,png',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
           

        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'parent' => trans('admin.department'),
            'photo' => trans('admin.photo'),
            'color' => trans('admin.color'),
            'size' => trans('admin.size'),
            'price' => trans('admin.price'),
            'stock' => trans('admin.stock'),
            'weight' => trans('admin.weight'),

        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new Products;
         
            $file     = $request->file('photo');
            $path     = public_path().'/upload/products';
            $filename = time().rand(11111,00000).'.'.$file->getClientOriginalExtension();
            if($file->move($path,$filename))
            {
                $add->photo = $filename;
            }
          
          
            $add->user_id             = admin()->user()->id;
            $add->user_type           = 'admin';
            if($request->has('parent') && $request->input('parent') !== null)
            {
            $add->dep_id              = $request->input('parent');
            $main_dep  = Dep::where('id','=',$request->input('parent'))->pluck('parent');
           foreach ($main_dep as $files)
           {
            $add->main_dep_id = $files;
           }
          }
            $add->en_title            = $request->input('en_name');
            $add->ar_title            = $request->input('ar_name');
            $add->en_content          = $request->input('en_content');
            $add->ar_content          = $request->input('ar_content');
            $add->price               = $request->input('price');
            $add->color               = $request->input('color');
            $add->size                = $request->input('size');
            $add->stock                = $request->input('stock');
            $add->weight                = $request->input('weight');
            $add->save();

             $lastid = $add->id;

         //multiupload photos to table product_gallary
             if ($request->hasFile('media.*')) {
         $multifile     = $request->file('media');
          foreach ($multifile as $files)
           {
                $multiadd = new ProductsGallary;
                $fileName = str_random(5)."-".time()."-".str_random(3).".".$files->getClientOriginalExtension();
                if($files->move($path,$fileName))
                {
                    $multiadd->product_id = $lastid;
                    $multiadd->media = $fileName;
                    $multiadd->save();
                 }

           }
         }
     //multiadd color to table product_color
           if($request->input('colorx') > 0 && $request->input('colorx') !== null)
            {
            $multicolor    = $request->input('colorx');
             foreach ($multicolor as $colors) 
              {
                $multiaddcolors = new ProductsColor;
                $multiaddcolors->product_id = $lastid;
                $multiaddcolors->color = $colors;
                $multiaddcolors->save();
              }
            }
      //multiadd size to table product_size
              if($request->input('sizex') > 0 && $request->input('sizex') !== null)
            {
            $multisize    = $request->input('sizex');
             foreach ($multisize as $sizes)
              {
                $multiaddsize = new ProductsSize;
                $multiaddsize->product_id = $lastid;
                $multiaddsize->size = $sizes;
                $multiaddsize->save();
              }
            }
            session()->flash('success',trans('admin.added'));
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check_parent(Request $request)
    {
        if($request->ajax())
        {
            if($request->has('parent') && $request->input('parent') > 0)
            {
                $dep = Dep::where('parent','=',$request->input('parent'))->get();
                $data = view(app('at').'.product.department.sub',['department'=>$dep,'parent'=>$request->input('parent')])->render();
                if(!empty($data))
                {
                    return response()->json($data);
                }else{
                    return response()->json('false');
                }
            }
        }
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products  = Products::find($id);
        $department = Dep::where('parent','=',0)->pluck('en_name','id');

        return view(app('at').'.product.products.edit',['title'=>trans('admin.edit'),'department'=>$department,'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
      $rules = [
           'en_name' => 'required',
            'ar_name' => 'required',
            'en_content' => 'required',
            'ar_content' => 'required',
            'parent' => 'required',
            'photo' => 'image|mimes:gif,jpeg,jpg,png',
            'media.*' => 'image|mimes:gif,jpeg,jpg,png',
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'weight' => 'required|numeric',
         

        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'parent' => trans('admin.department'),
            'photo' => trans('admin.photo'),
            'color' => trans('admin.color'),
            'size' => trans('admin.size'),
            'price' => trans('admin.price'),
            'stock' => trans('admin.stock'),
            'media.*' => trans('admin.media'),
            'weight' => trans('admin.weight'),
        ]);
        if ($Validator->fails()) {
            return back()->withInput()->withErrors($Validator);
        } else {
            $update = Products::find($id);
            if ($request->hasFile('photo')) {
                @unlink(public_path() . '/upload/products/' . $update->photo);
                $file = $request->file('photo');
                $path = public_path() . '/upload/products';
                $filename = time() . rand(11111, 00000) . '.' . $file->getClientOriginalExtension();
                if ($file->move($path, $filename)) {
                    $update->photo = $filename;
                }
            }
            if($request->has('parent') && $request->input('parent') !== null)
            {
                   $update->dep_id              = $request->input('parent');
            $main_dep  = Dep::where('id','=',$request->input('parent'))->pluck('parent');
           foreach ($main_dep as $files)
           {
            $update->main_dep_id = $files;
           }
           
            
            }

            $update->en_title            = $request->input('en_name');
            $update->ar_title            = $request->input('ar_name');
            $update->user_id             = admin()->user()->id;
            $update->user_type            = 'admin';
            $update->en_content          = $request->input('en_content');
            $update->ar_content          = $request->input('ar_content');
            $update->price               = $request->input('price');
            $update->color               = $request->input('color');
            $update->size                = $request->input('size');
            $update->stock                = $request->input('stock');
            $update->weight                = $request->input('weight');
            $update->save();
 $lastid = $update->id;
            /** update multiphotos in ProductsGallary table**/
            $path     = public_path().'/upload/products';
            $multifile     = $request->file('media');
            if($request->hasFile('media.*')) {
                foreach ($multifile as $files)
                {
                    $extension = $files->getClientOriginalExtension();
                    $fileName = str_random(5)."-".time()."-".str_random(3).".".$extension;
                    if($files->move($path,$fileName))
                    {
                        $multiupdate = new ProductsGallary;
                        $multiupdate->product_id = $id;
                        $multiupdate->media = $fileName;
                        $multiupdate->save();
                    }
                }

            }

      //update color in table product_color

             if( $request->input('colorx') > 0 && $request->input('colorx') !== null) {
            $multicolor    = $request->input('colorx');
             foreach ($multicolor as $colors) 
              {
                $multiupdatecolors = new ProductsColor;
                $multiupdatecolors->product_id  = $lastid;
                $multiupdatecolors->color = $colors;
                $multiupdatecolors->save();
              } }
      //update size in table product_size
        if($request->input('sizex') > 0 && $request->input('sizex') !== null) {
            $multisize    = $request->input('sizex');
             foreach ($multisize as $sizes)
              {
                $multiupdatesize = new ProductsSize;
                $multiupdatesize->product_id = $lastid;
                $multiupdatesize->size = $sizes;
                $multiupdatesize->save();
              }
           }

            session()->flash('success', trans('admin.updated'));
        }
        return back();
    }

    /**
     * Remove the specified sub-image from posts_gallary.
     *

     */
    public function destroyimage($id) {
        $delete = ProductsGallary::find($id);
        if(!empty($delete->media) and file_exists(public_path().'/upload/products/'.$delete->media))
        {
            unlink(public_path().'/upload/products/'.$delete->media);
        }
        $delete->delete();
        session()->flash('success',trans('admin.deleted'));
        return back();
    }

    /**
     * Remove the specified sub-color from product_color.
     *
     */
    public function destroycolor($id) {
        $delete = ProductsColor::find($id);
     
        $delete->delete();
        session()->flash('success',trans('admin.deleted'));
        return back();
    }

    /**
     * Remove the specified sub-size from product_size.
     *

     */
    public function destroysize($id) {
        $delete = ProductsSize::find($id);
     
        $delete->delete();
        session()->flash('success',trans('admin.deleted'));
        return back();
    }


    public function destroy($id)
    {
        $delete =  Products::find($id);
        if(!empty($delete->photo) and file_exists(public_path().'/upload/products/'.$delete->photo))
        {
            unlink(public_path().'/upload/products/'.$delete->photo);
        }
        $delete->delete();
               $affected = ProductsGallary::where('product_id', '=', $id)->get()->all();
                foreach ($affected as $affectedRows){
                    if (!empty($affectedRows->media) and file_exists(public_path() . '/upload/products/' . $affectedRows->media)) {
                        @unlink(public_path() . '/upload/products/' . $affectedRows->media);
                          $affectedRows->delete();
                    }
            }
                    $affectedcolorss = ProductsColor::where('product_id', '=', $id)->get()->all();
                foreach ($affectedcolorss as $affectedRowsss){
                 
                          $affectedRowsss->delete();
                  
            }
                       $affectedsizess = ProductsSize::where('product_id', '=', $id)->get()->all();
                foreach ($affectedsizess as $affectedRowssss){
                 
                          $affectedRowssss->delete();
                  
            }
        session()->flash('success',trans('admin.deleted'));
        return back();
    }



    public function import_products(Request $request)
    {
     $rules = [
           'excel_file' => 'required|mimes:csv,txt,xlsx',
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'excel_file' => trans('admin.excel_file'),
        ]);
        if ($Validator->fails()) 
        {
            return back()->withInput()->withErrors($Validator);
        } else 
        {
            if (($handle = fopen($_FILES['excel_file']['tmp_name'],"r")) !== FALSE ) 
                {
              fgetcsv($handle); //remove first row in excel sheet
             while (($data = fgetcsv($handle,1000,",")) !== FALSE)
                  {

              
                 $add = new Products;
                 $add->en_title = $data[0];
                 $add->ar_title = $data[1];
                 $add->user_id = admin()->user()->id;
                 $add->user_type = "admin";
                 $add->dep_id = $data[2];
                 $add->main_dep_id = $data[3];
                 $add->price = $data[4];
                 $add->ar_content = $data[5];
                 $add->en_content = $data[6];
                 $add->stock = $data[7];
                 $add->photo = $data[8];
                 $add->color = $data[9];
                 $add->size = $data[10];
                 $add->created_at = time();
                 $add->updated_at = time();
                 $add->save();

                 $lastid= $add->id;

                $addsize = new ProductsSize;
                $addsize->product_id = $lastid;
                $addsize->size = $data[11];
                $addsize->save();

                $addcolor = new ProductsColor;
                $addcolor->product_id = $lastid;
                $addcolor->color = $data[12];
                $addcolor->save();
        

                $addmedia = new ProductsGallary;
                $addmedia->product_id = $lastid;
                $addmedia->media = $data[13];
                $addmedia->save();



           /** update multiphotos in ProductsGallary table**/
            $path     = public_path().'/upload/products';
            $multifile     = $request->file('media');
            if($request->hasFile('media.*')) {
                foreach ($multifile as $files)
                {
                    $extension = $files->getClientOriginalExtension();
                    $fileName = str_random(5)."-".time()."-".str_random(3).".".$extension;
                    if($files->move($path,$fileName))
                    {
                        $multiupdate = new ProductsGallary;
                        $multiupdate->product_id = $id;
                        $multiupdate->media = $fileName;
                        $multiupdate->save();
                    }
                }

            }










                   }
                }
       }
             return back();
    }




}
