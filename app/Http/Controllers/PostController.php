<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Practice;
use App\Models\Profile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    public function practice(Post $post)
    {
        $db_practices = Practice::orderBy('practice_day','asc')->get();

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
                'practice_delete_url' => route('posts.delete', ['id' => $db_practice->id]),  // 削除

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
    public function store(Request $req,Practice $id = null){

        if(is_null($id)){
            $practices = new Practice();
        }else{
            $practices = $id;
        }

        $practices->practice_day = $req->input('practice_day');
        $practices->practice_temperature = $req->input('practice_temperature');
        $practices->practice_humidity = $req->input('practice_humidity');
        $practices->practice_menu = $req->input('practice_menu');
        $practices->practice_memo = $req->input('practice_memo');
        
        $practices->save();
        
        return redirect(route('posts.practice'));
    }
    public function edit(Practice $id){
        return view('posts.edit',[
            'practices' => $id,
        ]);
    }
    /**
 　　* 削除処理
　　 */
    public function delete(Request $req, Practice $id){
         // 保存
        $id->delete();

        return redirect(route('posts.practice'));
    }

    public function profile(Post $post)
    {
        $db_profiles = Post::get();
        
        $profile = [];
        foreach($db_profiles as $db_profile){
            $profiles[] = [
                'profile_bio' => $db_profiles->profile_bio, // 
                'profile_kiroku' => $db_profiles->profile_kiroku,  // 
                'profile_update_url' => route('posts.update', ['id' => $db_profiles->id]),  // 
                ];
        }
        return view('posts.profile',[
            'profiles' => $profiles,
            ])->with(['posts' => $post->getPaginateByLimit(10)]);
    }
    
    public function register(Prodile $id)
    {
        return view('posts.register',[
            'pofiles' => $id,
        ]);
    }
    public function update(Request $req,Profile $id = null){
        
        if(is_null($id)){
            $profiles = new Profile();
        }else{
            $profiles = $id;
        }

        $profiles->profile_bio = $req->input('profile_bio');
        $profiles->profile_kiroku = $req->input('profile_kiroku');

        $profiles->save();
        
        return redirect(route('posts.profile'));
    }
}
?>