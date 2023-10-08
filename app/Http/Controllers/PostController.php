<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Practice;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    public function profile(Post $post)
    {
        return view('posts.profile')->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    public function practice(Post $post)
    {
        $db_practices = Practice::get();
        
        $practice = [];
        foreach($db_practices as $db_practice){
            $practices[] = [
                'practice_day' => $db_practice->practice_day, // 練習日
                'practice_temperature' => $db_practice->practice_temperature,  // 気温
                'practice_humidity' => $db_practice->practice_humidity,  // 湿度
                'practice_menu' => $db_practice->practice_menu,  // 練習メニュー
                'practice_memo' => $db_practice->practice_memo,  // メモ
                'practice_detail_url' => route('posts.detail', ['id' => $db_practice->id]),  // 練習メニュー詳細URL
                'practice_edit_url' => route('posts.edit', ['id' => $db_practice->id]),  // 練習メニュー編集URL
                ];
            }
        return view('posts.practice',[
            'practices' => $practices,
            ])->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    public function detail(Practice $id){
        $practices = [
            'practice_day' => $id->practice_day,  // 練習日
            'practice_temperature' => $id->practice_temperature,  // 気温
            'practice_humidity' => $id->practice_humidity,  // 湿度
            'practice_menu' => $id->practice_menu,  // 練習メニュー
            'practice_memo' => $id->practice_memo,  // メモ
            'practice_detail_url' => route('posts.detail',['id' =>$id->id]),//練習メニュー詳細
            'practice_edit_url' => route('posts.edit',['id' =>$id->id]),//練習メニュー編集URL
            'practice_delete_url' => route('posts.delete', ['id' => $id->id]), //削除
            
            
        ];
        
        return view('posts.detail',[
            'practices' => $practices,
        ]);
    }
    
    public function create(Post $post)
    {
        return view('posts.create');
    }
    //登録処理//
    public function store(Request $req,Post $id = null){
        
        if(is_null($id)){
            $practice = new Post();
        }else{
            $practice = $id;
        }
        $practice = new Practice();
        
        $practice->practice_day = $req->input('practice_day');
        $practice->practice_temperature = $req->input('practice_temperature');
        $practice->practice_humidity = $req->input('practice_humidity');
        $practice->practice_menu = $req->input('practice_menu');
        $practice->practice_memo = $req->input('practice_memo');
        
        $practice->save();
        
        return redirect(route('posts.practice'));
    }
    public function edit(Practice $id){
        return view('posts.edit',[
            'practices' => $id,
        ]);
    }
}
?>