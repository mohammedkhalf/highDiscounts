<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Products ;
use App\Model\ProductsGallary ;
use App\Model\ProductsColor ;
use App\Model\ProductsSize ;
use App\Model\DepartmentProducts as Dep;
use Validator;

class HomeController extends Controller
{

    public function index()
    {

        $allproducts = Products::orderBy('id','desc')->get();
        $department = Dep::where('parent','=',0)->get();

        return view(app('f').'.home',['allproducts'=>$allproducts , 'department'=>$department]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
       $product  = Products::find($id);
        $department = Dep::where('id','=',$product->dep_id)->pluck('en_name');;

        return view(app('f').'.single_product',['title'=>trans('admin.single_product'),'department'=>$department,'product'=>$product]);
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
        $department = Dep::where('parent','=',$products->dep_id)->pluck('en_name','id');

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
