<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function importFile(Request $request)
    {
        return view('user.import_file');
    }

    public function uploadFile(Request $request)
    {
        Excel::import(new UsersImport, $request->filename);

        // return redirect()->route('user.show_file')
        // ->with('success', 'File Uploaded');
        return back()->with('File is uploaded');
    }
}

