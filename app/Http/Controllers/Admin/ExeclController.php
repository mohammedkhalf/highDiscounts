<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExeclController extends Controller
{
    public function importExportExcelORCSV()
    {
        return view('admin.file_import_export');
    }

    public function importFileIntoDB(Request $request)
    {
        if ($request->hasFile('sample_file')) {
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if ($data->count()) {
                foreach ($data as $key => $value) {
                    $arr[] = ['name' => $value->name, 'details' => $value->details];
                }
               /* if (!empty($arr)) {
                    \DB::table('products')->insert($arr);
                    dd('Insert Record successfully.');
                }*/
            }
        }
        dd('Request data does not have any files to import.');
    }

}
