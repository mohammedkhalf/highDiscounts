<?php

namespace App\Http\Controllers\Admin;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Faq;
use Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::orderBy('id','desc')->get();
         return view(app('at').'.faq.index',['title'=>trans('admin.faq'),'faq'=>$faq]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  return view(app('at').'.faq.create',['title'=>trans('admin.add')]);
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
            'en_question' => 'required',
            'ar_question' => 'required',
            'en_answer' => 'required',
            'ar_answer' => 'required',
                
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_question' => trans('admin.en_question'),
            'ar_question' => trans('admin.ar_question'),
            'en_answer' => trans('admin.en_answer'),
            'ar_answer' => trans('admin.ar_answer'),
            
        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $add = new Faq;
         
         
            $add->en_question            = $request->input('en_question');
            $add->ar_question            = $request->input('ar_question');
            $add->en_answer          = $request->input('en_answer');
            $add->ar_answer          = $request->input('ar_answer');
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
       $faq  = Faq::find($id);
               return view(app('at').'.faq.edit',['title'=>trans('admin.edit'),'faq'=>$faq]);

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
           'en_question' => 'required',
            'ar_question' => 'required',
            
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            'en_question' => trans('admin.en_question'),
            'ar_question' => trans('admin.ar_question'),
            'en_answer' => trans('admin.en_answer'),
            'ar_answer' => trans('admin.ar_answer'),
            
          
        ]);
        if ($Validator->fails()) {
            return back()->withInput()->withErrors($Validator);
        } else {
            $update = Faq::find($id);
         
            $update->en_question            = $request->input('en_question');
            $update->ar_question            = $request->input('ar_question');
            $update->en_answer          = $request->input('en_answer');
            $update->ar_answer          = $request->input('ar_answer');
   
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
