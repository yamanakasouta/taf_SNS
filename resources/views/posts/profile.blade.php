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
                    <div class="card-body font-large text-base text-gray-800">{{ Auth::user()->name }}
                        <img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image) }}" alt="プロフィール画像" class="img-thumbnail">
                    </div>
                </div>
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