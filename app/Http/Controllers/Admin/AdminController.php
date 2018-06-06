<?php


namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index')
            ->with('admins', $admins);
    }


    public function create(Request $request)
    {
        $id = request('id');
        $adminId = Admin::find($id);
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:6'
            ]);
        $data['password'] = bcrypt(request('password'));
        Admin::create($data);
        session()->flash('success', 'Admin has been added');
        return redirect(aurl('admins'));

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $adminId = Admin::find($id);
        return view('admin.admins.create', compact('adminId'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:admins,email,'.$id,
                'password' => 'sometimes|nullable|min:6'
            ]);
        $data['password'] = bcrypt(request('password'));

        DB::table('admins')->where('id', $id)
            ->update($data);
/*        Admin::where('id', $id)->updated($data);*/
        session()->flash('success', 'Admin has been Updated');
        return redirect(aurl('admins'));
    }

    public function destroy($id)
    {
        //
    }


}
