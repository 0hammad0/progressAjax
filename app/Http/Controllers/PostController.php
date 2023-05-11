<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function post(Request $request)
    {
        $file = 'files'.'/'.time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move('files', $file);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $file,
        ]);

        return response()->json(['success'=>'file uploaded successfully']);
    }

    public function viewfile()
    {
        return view('showFiles', [
            'files' => Post::all(),
        ]);
    }
}
