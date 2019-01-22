<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use App\User;
use DB;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        // echo "<pre>"; print_r($reports); die;
        return  view('admin.complains.details')->with('reports' , $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "khalaf";
        // echo($request->selected_row);
        $report = Report::find($request->selected_id);
        $report->stauts = $request->selected_value;
        $report->save();
        return back();
    }

    // public function fetch_stauts (Request $request)
    // {
    //     // echo "<pre>"; print_r($request->selected_id); die;
    //     $order_stauts = Report::where('id',$request->selected_id)->first();
    //     // $order_stauts = DB::table('reports')
    //     //                 ->where('id' , '=' , $request->selected_id)
    //     //                 ->first();
    //     $return_stauts =  $order_stauts->stauts; 
    //     return   view('admin.complains.details')->with('return_stauts' , $return_stauts );
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
