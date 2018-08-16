<?php

namespace App\Http\Controllers\Admin;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SliderImage;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = SliderImage::orderBy('id','desc')->get();
         return view(app('at').'.slider.index',['title'=>trans('admin.slider'),'slider'=>$slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  return view(app('at').'.slider.create',['title'=>trans('admin.add')]);
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
            'image' => 'required|image|mimes:gif,jpeg,jpg,png',      
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'image' => trans('admin.image'),
        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new SliderImage;
         
            $file     = $request->file('image');
            $path     = public_path().'/upload/products';
            $filename = time().rand(11111,00000).'.'.$file->getClientOriginalExtension();
            if($file->move($path,$filename))
            {
                $add->image = $filename;
            }
            $add->en_title            = $request->input('en_name');
            $add->ar_title            = $request->input('ar_name');
            $add->en_content          = $request->input('en_content');
            $add->ar_content          = $request->input('ar_content');
            $add->save();
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $slider  = SliderImage::find($id);
               return view(app('at').'.slider.edit',['title'=>trans('admin.edit'),'slider'=>$slider]);

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
            'image' => 'image|mimes:gif,jpeg,jpg,png',
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'image' => trans('admin.image'),
          
        ]);
        if ($Validator->fails()) {
            return back()->withInput()->withErrors($Validator);
        } else {
            $update = SliderImage::find($id);
            if ($request->hasFile('image')) {
                @unlink(public_path() . '/upload/products/' . $update->image);
                $file = $request->file('image');
                $path = public_path() . '/upload/products';
                $filename = time() . rand(11111, 00000) . '.' . $file->getClientOriginalExtension();
                if ($file->move($path, $filename)) {
                    $update->image = $filename;
                }
            }
            $update->en_title            = $request->input('en_name');
            $update->ar_title            = $request->input('ar_name');
            $update->en_content          = $request->input('en_content');
            $update->ar_content          = $request->input('ar_content');
   
            $update->save();
             session()->flash('success', trans('admin.updated'));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
