<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImageTestController extends Controller
{
    /**
     * 画面表示
     */
    public function index(){
        return view('posts.profile');
    }

    /**
     * 画面表保存
     */
    public function imagePost(Request $req){
        $file = $req->file('img');
        $file_path = $file->store('public');
        Session::put('img_path', str_replace('public', 'storage', $file_path));
        return redirect()->route('image_test');
    }
}