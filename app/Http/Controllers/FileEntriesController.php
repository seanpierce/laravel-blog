<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

use App\FileEntry as FileEntry;

class FileEntriesController extends Controller
{
    public function index()
    {
        $files = FileEntry::all();
    
        return view('admin/view', compact('files'));
    }
    
    public function uploadFile(Request $request)
    {
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();

        if (Storage::disk('uploads')->put($filename, \File::get($file))) {
            return response(json_encode(true), 200);
        } else {
            return response(json_encode(false), 500);
        }
    }

    public function create()
    {
        return view('admin/upload');
    }
}
