<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            練習メニュー詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="text-sky-500" href="{{$practices['practice_edit_url']}}">編集</a>
                    <div class="bg-white border shadow-sm rounded-xl p-4 mb-3">
                        <h3 class="text-lg font-bold text-gray-800">
                            {{ $practice['practice_day'] }}
                        </h3>
                        <p class="mt-1 text-xs font-medium text-gray-500">
                            {{ $practice['practice_temperature'] }}
                        </p>
                        <p class="mt-1 text-xs font-medium text-gray-500">
                            {{ $practice['practice_humidity'] }}
                        </p>
                        <p class="mt-2 text-gray-800">
                            {{ $practice['practice_memo'] }}
                        </p>
                    </div>
                </div>
                <form class="p-1 text-right" action="{{$practice['practice_delete_url'] }}" method="post">
                    @csrf
                    <button class="bg-red-700 hover:bg-red-600 text-white rounded px-4 py-2">削除</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>