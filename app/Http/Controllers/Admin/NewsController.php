<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\News;
use App\Model\DepartmentNews as Dep;
use Validator;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $allneews = News::orderBy('id','desc')->paginate(10);

     return view(app('at').'.news.news.index',['title'=>trans('admin.news'),'allneews'=>$allneews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alldep = Dep::pluck('en_name','id');

     return view(app('at').'.news.news.create',['title'=>trans('admin.add'),'alldep'=>$alldep]);
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

        ];

        $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'photo' => trans('admin.photo'),

        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
              $add = new News;
              $file     = $request->file('photo');
              $path     = public_path().'/upload/products';
              $filename = time().rand(11111,00000).'.'.$file->getClientOriginalExtension();
              if($file->move($path,$filename))
              {
                $add->photo = $filename;
              }
            $add->user_id             = admin()->user()->id;
            $add->dep_id              = $request->input('dep_id');
            $add->en_title             = $request->input('en_name');
            $add->ar_title             = $request->input('ar_name');
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
      $alldep = Dep::pluck('en_name','id');
      $posts   = News::find($id);
     return view(app('at').'.news.news.edit',['title'=>trans('admin.edit'),'alldep'=>$alldep,'posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     /**
     * Update the specified resource in storage.

     */
    public function update(Request $request, $id)
    {
        $rules = [
            'en_name' => 'required',
            'ar_name' => 'required',
            'en_content' => 'required',
            'ar_content' => 'required',

        ];

        $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_name' => trans('admin.en_name'),
            'ar_name' => trans('admin.ar_name'),
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            'photo' => trans('admin.photo'),
            'media' => trans('admin.media'),
        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
              $update =  News::find($id);
              if($request->hasFile('photo'))
              { 
                  @unlink(public_path().'/upload/products/'.$update->photo);  
                  $file     = $request->file('photo');
                  $path     = public_path().'/upload/products';
                  $filename = time().rand(11111,00000).'.'.$file->getClientOriginalExtension();
                  if($file->move($path,$filename))
                  {
                    $update->photo = $filename;
                  }
              }
            $update->dep_id               = $request->input('dep_id');
            $update->en_title              = $request->input('en_name');
            $update->ar_title              = $request->input('ar_name');
            $update->en_content           = $request->input('en_content');
            $update->ar_content           = $request->input('ar_content');
            $update->save();

       
         
            session()->flash('success',trans('admin.updated'));
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
        $delete =  News::find($id);
        if(!empty($delete->photo) and file_exists(public_path().'/upload/products/'.$delete->photo))
        {
         unlink(public_path().'/upload/news/'.$delete->photo);   
        }
        $delete->delete();
            session()->flash('success',trans('admin.deleted'));
            return back();
    }





}
