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

    public function makePost(Request $request){
        //
    }

    public function editPost(Request $request){
        //
    }

    public function uploadPhoto(Request $request){
        //
    }
}
