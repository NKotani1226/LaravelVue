<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    public function __construct()
    {}

    public function index()
    {
        return view("fileupload");
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->store('uploads'); 

        return back()
            ->with('success','File has been uploaded.')
            ->with('file', $filename);
    }
}
