<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
        //
    }

    public function banUser(Request $request){
        $request->validate([
            "file"=>[""]
        ]);
    }

    public function deletePost(Request $request){
        //
    }
}
