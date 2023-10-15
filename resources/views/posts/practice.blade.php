<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            練習メニュー
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a class="text-sky-500 mr-3" href="{{ route('posts.create')}}">
                        練習メニュー登録
                    </a>
                    
    @foreach($practices as $I_practice)
        <div class="bg-white border shadow-sm rounded-xl p-4 mb-3">
            <h3 class="mt-1 font-medium text-gray-800">
                {{ $I_practice['practice_day']}}
            </h3>
            <div class="flex mt-3">
                <a class="text-sky-500 mr-3" href="{{ $I_practice['practice_detail_url'] }}">
                    詳細
                </a>
            </div>
        </div>
    @endforeach
        

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>