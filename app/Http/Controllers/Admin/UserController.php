<?php


namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')
            ->with('users', $users);
    }


    public function create(Request $request)
    {
        $id = request('id');
        $userId = User::find($id);
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:Users',
                'password' => 'required|min:6'
            ]);
        $data = new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt(request('password'));
        $data->level = 'vendor';
        $data->status= 1;

        $data->save();
        session()->flash('success', 'User has been added');
        return redirect(aurl('users'));

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $userId = User::find($id);
        return view('admin.users.create', compact('userId'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:Users,email,' . $id,
                'password' => 'sometimes|nullable|min:6'
            ]);
        $data['password'] = bcrypt(request('password'));

        DB::table('Users')->where('id', $id)
            ->update($data);
        /*        User::where('id', $id)->updated($data);*/
        session()->flash('success', 'User has been Updated');
        return redirect(aurl('users'));
    }

    public function destroy($id)
    {
        //
    }


}
