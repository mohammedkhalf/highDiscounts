<?php

namespace App\Http\Controllers\Admin;

use App\Model\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Up;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.setting');
    }

    public function setting_save()
    {
        $data = $this->validate(request(),
            [
                /* 	 	logo 	icon 	 	 	 	 	 	*/
                'sitename_ar' => 'required|string',
                'sitename_en' => 'required|string',
                'email' => 'required|email',
                'main_lang' => 'required',
                'description' => 'required',
                'keywords' => 'required',
                'status' => 'required',
                'message_mentenance' => 'required',
                'logo' => v_image(),
                'icon' => v_image()
            ]
            , [],
            [
                'logo' => trans('admin.sitelogo'),
                'icon' => trans('admin.siteicon')
            ]
        );
        /*        $data = request()->expect(['_token', '_method']);*/
        if (request()->hasFile('logo')) {
            $data['logo'] = Up::upload([
                'file' => 'logo',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => sett()->logo,
            ]);
        }
        if (request()->hasFile('icon')) {

            $data['icon'] = Up::upload([
                'file' => 'icon',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => sett()->icon,
            ]);
        }
        Setting::orderBy('id', 'desc')->update($data);
        session()->flash('success', 'settings has been edit');
        return redirect(aurl('setting'));
    }

    //khalf
    public function indexSocial()
    {
        return view('admin.social.index');
    }
    //khalf
    public function saveSocial (Request $request)
    {
        // echo "<pre>"; print_r($request->all()); echo "</pre>"; die;
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $this->validate(request(),
        [
            'facebook' => 'nullable|regex:' . $regex,
            'twitter' => 'nullable|regex:' . $regex,
            'youtube' => 'nullable|regex:' . $regex,
        ]);

        $set_social = Setting::find(1);
        //  echo "<pre>"; print_r($set_social); echo "</pre>"; die;
        $set_social->facebook = $request->facebook;
        $set_social->twitter = $request->twitter;
        $set_social->youtube = $request->youtube;
        $set_social->save();
        session()->flash('success' , trans('admin.social_success'));
        return back();
    }
}
