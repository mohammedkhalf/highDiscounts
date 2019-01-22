<?php


namespace App\Http\Controllers\Admin;

use App\Model\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Up;


class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::all()->where('parent', '=', null);
        return view('admin.countries.index')
            ->with('countries', $countries);
    }


    public function create(Request $request)
    {
        $id = request('id');
        $countryId = Country::find($id);
        $countryAll = Country::all()->where('parent', '=', null);
        return view('admin.countries.create')->with('countryAll', $countryAll);
    }

    public function store(Request $request)
    {
        $data = $this->validate(request(),
            [
                'country_name_ar' => 'required',
                'country_name_en' => 'required',
                'mob' => 'required',
                'shipping' => 'required',
                'code' => 'sometimes|nullable',
                'logo' => 'sometimes|nullable|' . v_image(),
                'parent' => 'sometimes|nullable|integer',
            ], [], [
                'country_name_ar' => trans('admin.country_name_ar'),
                'country_name_en' => trans('admin.country_name_en'),
                'mob' => trans('admin.mob'),
                'shipping' => trans('admin.shipping'),
                'code' => trans('admin.code'),
                'logo' => trans('admin.logo')
            ]);
        if (request()->hasFile('logo')) {

            $data['logo'] = Up::upload([
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
        $cities = Country::all()->where('parent', '=', $id);
        return view('.admin.countries.cities')->with('cities', $cities);
    }


    public function edit($id)
    {
        $countryId = Country::find($id);
        $countryAll = Country::all()->where('parent', '=', null);
        return view('admin.countries.create', compact('countryId'))->with('countryAll', $countryAll);
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(),
            [
                'country_name_ar' => 'required',
                'country_name_en' => 'required',
                'mob' => 'required',
                'code' => 'required',
                'shipping' => 'required',
                'logo' => 'sometimes|nullable|' . v_image(),
            ], [], [
                'country_name_ar' => trans('admin.country_name_ar'),
                'country_name_en' => trans('admin.country_name_en'),
                'mob' => trans('admin.mob'),
                'code' => trans('admin.code'),
                'logo' => trans('admin.logo'),
                'shipping' => trans('admin.shipping'),
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
