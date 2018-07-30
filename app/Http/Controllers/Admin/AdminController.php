<?php


namespace App\Http\Controllers\Admin;

use App\Model\ContactUs;
use App\Model\AboutUs;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.home');
    }

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
                'email' => 'required|email|unique:admins,email,' . $id,
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

    /////////////contact/////////////
    public function allContact()
    {
        $contacts = ContactUs::all();
        return view(app('at') . '.other.contact')->with('contacts', $contacts);
    }

    public function deleteContact($id)
    {
//        return "welcome";
        ContactUs::destroy($id);
        return redirect('admin/allcontact')->with('message', 'the contact deleted');
    }

    /////aboutus//////
    public function updateAboutUs()
    {
        $about = AboutUs::find(1);
//
        return view(app('at') . '.other.update_aboutus')->with('about', $about);
    }

   public function editAbout(Request $request)
    {
            $rules = [
          'en_content' => 'required',
            'ar_content' => 'required',
            'image' => 'sometimes|nullable|' . v_image(),
        ];
   $Validator   = Validator::make($request->all(),$rules);
        $Validator->SetAttributeNames ([
            
            'en_content' => trans('admin.en_content'),
            'ar_content' => trans('admin.ar_content'),
            
            'image' => trans('admin.image'),
      

        ]);
        if($Validator->fails())
        {
            return back()->withInput()->withErrors($Validator);
        }else{
            $about = AboutUs::find(1);
            if ($request->hasFile('image')) {
                @unlink(public_path() . '/upload/products/' . $about->image);
                $file = $request->file('image');
                $path = public_path() . '/upload/products';
                $filename = time() . rand(11111, 00000) . '.' . $file->getClientOriginalExtension();
                if ($file->move($path, $filename)) {
                    $about->image = $filename;
                }
            }
           $about->en_content =  $request->input('en_content');
            $about->ar_content = $request->input('ar_content');
            $about->save();
        } 

     
        return redirect('admin/updateabout')->with('success', 'the update has been done');

    }

}
