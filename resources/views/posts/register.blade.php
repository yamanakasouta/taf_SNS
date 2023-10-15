<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            プロフィール編集
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{route('posts.update',['id' => $profiles->id])}}" class="px-8 pt-6 pb-8 mb-3">
                @csrf
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800"for="profile_bio">
                        自己紹介
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="date" placeholder=""></textarea>
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="profile_bio" name="profile_bio" type="text" placeholder="" required
                        value="{{$profiles->profile_bio}}"
                    >
                </p>
                <p class="mt-3 bg-white border shadow-sm rounded-xl p-4">
                    <label class="mt-3 text-orange-800"for="profile_kiroku">
                        個人記録
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="date" placeholder=""></textarea>
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        id="profile_kiroku" name="profile_kiroku" type="text" placeholder="" required
                        value="{{$profiles->profile_kiroku}}"
                    >
                </p>
                    {{--登録ボタン--}}
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">登録</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>