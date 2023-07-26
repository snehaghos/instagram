<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index() {
        $data['posts']=Post::with('user')->get();
       // dd($data);
        return view('insta_home',$data);

    }

    function store(Request $request)  {
        // echo '<h1>'.$request->input('post-description') .'</h1>';
       //  dd($request->all());

       // dd();
        $post= new Post;

        $post->post_title=$request->input('post_title');
        $post->post_description=$request->input('post_description');

        $post->user_id=auth()->user()->id;
        if ($request->file('post_image')) {
            $file = $request->file('post_image');
            // @unlink(public_path('upload/student_images/'.$data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/post_image'), $filename);
            $post['post_image'] = $filename;
        }

        $post->save();
        return redirect()->route('home');
        // $data=[
        //     'post-title'=>$request->input('post-title'),
        //     'post-description'=>$request->input('post-description')
        // ];
      //  dd($data);
    }
}
