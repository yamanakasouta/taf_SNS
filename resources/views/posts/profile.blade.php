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
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport"
                        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>画像テスト</title>
                </head>
                <body>
                    <form method="post" action="{{route('image_test_post')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">送信</button>
                    </form>
                    <img src="{{asset(session('img_path'))}}"alt="">
                </body> 
            </html>
            
            
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800">
                        自己紹介
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="date" placeholder=""></textarea>
                    </label>
                </p>
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800">
                        個人記録
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="date" placeholder=""></textarea>
                    </label>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>