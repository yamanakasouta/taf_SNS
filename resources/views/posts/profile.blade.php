<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            プロフィール
        </h1>
    </x-slot>

    <a class="text-sky-500 mr-3">
    </a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p class="p-5 text-gray-900">
                    
                </p>
                <div class="mt-6 text-gray-900">
                    <div class="card-body font-large text-xl text-gray-800">{{ Auth::user()->name }}
                    </div>
                </div>
                
                <!doctype html>
            <html lang="ja">
                <body>
                    <form method="post" action="{{route('image_test_post')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">送信</button>
                    </form>
                    <img src="{{asset(session('img_path'))}}"alt="" width="150" height="100" >
                </body> 
            </html>

            <form method="get" action="{{route('posts.register')}}" class="px-8 pt-6 pb-8 mb-3">
                @csrf
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800">
                        自己紹介{{ $profiles['profile_bio'] }}
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile_bio" name="profile_bio" type="text" placeholder=""></textarea>
                    </label>
                </p>
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800">
                        個人記録{{ $profiles['profile_kiroku'] }}
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile_kiroku" name="profile_kiroku" type="text" placeholder=""></textarea>
                    </label>
                </p>
                @csrf
                    {{--登録ボタン--}}
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">登録</button>
                    <a class="text-sky-500 mr-3" href="{{ route('posts.register')}}">
                        練習メニュー登録
                    </a>            
                </form>
            </div>
        </div>
    </div>
</x-app-layout>