<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class IndexController extends Controller
{
    public function index(Request $request){
        $search = $request['search'] ?? '';
        $by = $request['by'] ?? '';
        $sort_by = $request['sort_by'] ?? 'desc';
        $date_start = $request['date_start'] ?? 0;
        $date_end = $request['date_end'] ?? now();

        $posts = Post::all();
    }

    public function showPost(Request $request){
        $posts = Post::findOrDie($request["id"]);
    }

    public function makePost(Request $request){
        $request->validate([
            'title'=> ["required", "string", "min:1"],
            'preview'=> ["required", "string", "min:1"],
            'body'=> ["required", "string", "min:1"]
        ]);

        $request->user()->posts->create([
            'title'=> $request["title"],
            'preview'=> $request["preview"],
            'body'=>$request["body"]
        ]);

        return back();
    }

    public function editPost(Request $request){
        $request->validate([
            "id"=> ["required"],
            'title'=> ["optional", "string", "min:1"],
            'preview'=> ["optional", "string", "min:1"],
            'body'=> ["optional", "string", "min:1"]
        ]);

        $post = Post::findOrDie($request["id"]);

        if($post["user_id"] != $request->user()["id"]) return back()->withErrors([ "post"=>"You are not allowed to edit this post." ]);

        if($request["title"]) $post["title"] = $request["title"];
        if($request["preview"]) $post["preview"] = $request["preview"];
        if($request["body"]) $post["body"] = $request["body"];
        $post->save();

        return back();
    }

    public function uploadPhoto(Request $request){
        $request->validate([
            "image"=>["required", "image"]
        ]);

        $img = $request->file('image')->store('images');

        $request->user()->images->create([
            "image"=>$img
        ]);

        return back();
    }
}
