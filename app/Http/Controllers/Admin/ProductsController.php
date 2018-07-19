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

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allproducts = Products::orderBy('id','desc')->paginate(10);


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
            'photo' => 'required|image|mimes:gif,jpeg,jpg,png',
            'color' => 'required',
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

        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new Products ;

            $file     = $request->file('photo');
            $path     = public_path().'/upload/products';
            $filename = time().rand(11111,00000).'.'.$file->getClientOriginalExtension();
            if($file->move($path,$filename))
            {
                $add->photo = $filename;
            }
            if(Auth::admin())
              { $add->user_id         = admin()->user()->id;
              }
           else{
            $add->user_id         = Auth::user()->id;
           }
            $add->dep_id              = $request->input('parent');
            $add->en_title            = $request->input('en_name');
            $add->ar_title            = $request->input('ar_name');
            $add->en_content          = $request->input('en_content');
            $add->ar_content          = $request->input('ar_content');
            $add->price          = $request->input('price');
            $add->color               = $request->input('color');
            $add->size                = $request->input('size');
            $add->save();

             $lastid = $add->id;

         //multiupload photos to table product_gallary
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
     //multiadd color to table product_color
            $multicolor    = $request->input('colorx');
             foreach ($multicolor as $colors) 
              {
                $multiaddcolors = new ProductsColor;
                $multiaddcolors->product_id = $lastid;
                $multiaddcolors->color = $colors;
                $multiaddcolors->save();
              }
      //multiadd size to table product_size
            $multisize    = $request->input('sizex');
             foreach ($multisize as $sizes)
              {
                $multiaddsize = new ProductsSize;
                $multiaddsize->product_id = $lastid;
                $multiaddsize->size = $sizes;
                $multiaddsize->save();
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
                $data = view(app('at').'.product.products.sub',['department'=>$dep,'parent'=>$request->input('parent')])->render();
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

        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'parent' => trans('admin.department'),
            'photo' => trans('admin.photo'),

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
            if($request->has('parent'))
            {
                $update->dep_id = $request->input('parent');
            }

            $update->en_title            = $request->input('en_name');
            $update->ar_title            = $request->input('ar_name');
            $update->user_id             = admin()->user()->id;
            $update->en_content          = $request->input('en_content');
            $update->ar_content          = $request->input('ar_content');
            $update->price               = $request->input('price');
            $update->color               = $request->input('color');
            $update->size                = $request->input('size');
            $update->save();

            /** update multiphotos in ProductsGallary table**/
            $path     = public_path().'/upload/products';
            $multifile     = $request->file('media');
            if($request->hasFile('media')) {

                $affected = ProductsGallary::where('product_id', '=', $id)->get()->all();
                foreach ($affected as $affectedRows){
                    if (!empty($affectedRows->media) and file_exists(public_path() . '/upload/products/' . $affectedRows->media)) {
                        @unlink(public_path() . '/upload/products/' . $affectedRows->media);
                          $affectedRows->delete();
                    }
            }
              
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

             if($request->has('colorx')) {

                $affectedcolors = ProductsColor::where('product_id', '=', $id)->get()->all();
                foreach ($affectedcolors as $affectedRowss)
                {
                  $affectedRowss->delete();  
                }
            $multicolor    = $request->input('colorx');
             foreach ($multicolor as $colors) 
              {
                $multiupdatecolors = new ProductsColor;
                $multiupdatecolors->product_id  = $id;
                $multiupdatecolors->color = $colors;
                $multiupdatecolors->save();
              } }
      //update size in table product_size
                if($request->has('sizex')) {

                $affectedsizess = ProductsSize::where('product_id', '=', $id)->get()->all();
                foreach ($affectedsizess as $affectedRowss)
                {
                  $affectedRowss->delete();  
                }
            $multisize    = $request->input('sizex');
             foreach ($multisize as $sizes)
              {
                $multiupdatesize = new ProductsSize;
                $multiupdatesize->product_id = $id;
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
}
