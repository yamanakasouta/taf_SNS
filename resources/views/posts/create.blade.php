<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            練習メニュー登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full">
                        <form method="post" action="{{route('posts.store')}}" class="px-8 pt-6 pb-8 mb-3">
                            @csrf
                            {{--練習メニュー登録画面--}}
                            <div class="mb-4 flex items-center">
                                <div class="mr-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-1" for="practice_day">
                                        日付
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="practice_day" name="practice_day" type="date" placeholder="" required>
                               </div>
                            </div>
                            
                            <div class="mb-4 flex items-center">
                                <div class="mr-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-1" for="practice_temperature">
                                        気温
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="practice_temperature" name="practice_temperature" type="text" placeholder="気温" required>
                               </div>
                            </div>

                            <div class="mb-4 flex items-center">
                                <div class="mr-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-1" for="practice_humidity">
                                        湿度
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="practice_humidity" name="practice_humidity" type="text" placeholder="湿度" required>
                               </div>
                            </div>

                            <div class="mb-4">
                                <div class="mr-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-1"for="practice_menu">
                                        練習メニュー
                                    </label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="practice_menu" name="practice_menu" type="text" placeholder="" required></textarea>
                                </div>
                            </div>
                            
                            {{--練習メニューメモ--}}
                            <div class="mb-4">
                                <div class="mr-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-1"for="practice_memo">
                                        メモ
                                    </label>
                                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="practice_memo" name="practice_memo" type="text" placeholder=""></textarea>
                                </div>
                            </div>
                            
                            {{--登録ボタン--}}
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>