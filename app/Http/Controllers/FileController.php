<?php

namespace App\Http\Controllers;

use App\Imports\MultipleSheetImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FileController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function import(Request $request) {
        $uploadedFile = $request->file('uploadfile');
        Excel::import(new MultipleSheetImport(), $uploadedFile);
        return back();
    }
}
