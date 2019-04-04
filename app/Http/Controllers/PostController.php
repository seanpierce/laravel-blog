<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

use App\Post as Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');?
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
        $filename = $this->upload_file();

        $post = new Post([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $filename
        ]);

        $post->save();

        return response(json_encode(true), 200);
    }

    private function upload_file()
    {
        $file = Input::file('file');
        $filename = $file->getClientOriginalName();

        if (Storage::disk('uploads')->put($filename, \File::get($file))) {
            return $filename;
        } else {
            abort('Unable to upload file.', 500);
        }
    }
}
