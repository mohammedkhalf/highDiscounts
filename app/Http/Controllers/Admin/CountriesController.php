<?php


namespace App\Http\Controllers\Admin;

use App\Model\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use up;


class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::all()->where('parent','=' , null);
        return view('admin.countries.index')
            ->with('countries', $countries);
    }


    public function create(Request $request)
    {
        $id = request('id');
        $countryId = Country::find($id);
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(),
            [
                'country_name_ar' => 'required',
                'country_name_en' => 'required',
                'mob' => 'required',
                'code' => 'required',
                'logo' => 'required|'.v_image(),
            ], [], [
                'country_name_ar' => trans('admin.country_name_ar'),
                'country_name_en' => trans('admin.country_name_en'),
                'mob' => trans('admin.mob'),
                'code' => trans('admin.code'),
                'logo' => trans('admin.logo')
            ]);
        if (request()->hasFile('logo')) {

            $data['logo'] = up::upload([
                // 'new_name'=>'',
                'file' => 'logo',
                'path' => 'countries',
                'upload_type' => 'single',
                /*                'delete_file' => sett()->logo,*/
            ]);
        }
        Country::create($data);
        session()->flash('success', trans('admin.add'));
        return redirect(aurl('countries'));

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $countryId = Country::find($id);
        return view('admin.countries.create', compact('countryId'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
            [
                'country_name_ar' => 'required',
                'country_name_en' => 'required',
                'mob' => 'required',
                'code' => 'required',
                'logo' => 'sometimes|nullable|'.v_image(),
            ], [], [
                'country_name_ar' => trans('admin.country_name_ar'),
                'country_name_en' => trans('admin.country_name_en'),
                'mob' => trans('admin.mob'),
                'code' => trans('admin.code'),
                'logo' => trans('admin.logo')
            ]);
        if (request()->hasFile('logo')) {

            $data['logo'] = up::upload([
                // 'new_name'=>'',
                'file' => 'logo',
                'path' => 'countries',
                'upload_type' => 'single',
                'delete_file' => Country::find($id)->logo,
            ]);
        }

      DB::table('countries')->where('id', $id)
            ->update($data);
      /*  Country::where('id', $id)->updated($data);*/
        session()->flash('success', trans('admin.update'));
        return redirect(aurl('countries'));
    }

    public function destroy($id)
    {
        //
    }


}
