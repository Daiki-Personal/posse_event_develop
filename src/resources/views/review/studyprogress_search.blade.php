@extends('layouts.review_admin')


@section('content')
<p class="mt-3 mb-5">ようこそ加藤さん</p>
<h2 class="mb-3 mt-5 font-bold">検索</h2>
<div class="bg-white p-3">
  <h3 class="text-lg font-bold">期生</h3>
  <ul class="flex justify-between">
    <li class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white"><img src="/img/check-white.svg" class="h-full navbar-brand w-5 mr-1">1.0期生</li>
    <li class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md"><img src="/img/check.svg" class="h-full navbar-brand w-5 svg-white">1.5期生</li>
    <li class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md"><img src="/img/check.svg" class="h-full navbar-brand w-5 svg-white">2.0期生</li>
    <li class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md"><img src="/img/check.svg" class="h-full navbar-brand w-5 svg-white">2.5期生</li>
  </ul>
</div>

<div class="curriculum_todos mb-5">
  <h2 class="mb-3 mt-5 font-bold">カリキュラムTODO</h2>
  <div class="start_day justify-between flex items-center">
    <div class="todo_text w-full">
      <input type="text" class="pl-3 block mb-3 py-3 text-md rounded-md shadow-md text-black w-11/12" value="選択肢を追加する">
    </div>
    <div class="todo_option justify-between flex">
      <p class="block text-center mb-3 py-2 px-4 mr-2 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">+</p>
      <p class="block text-center mb-3 py-2 px-4 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">-</p>
    </div>
  </div>
  <div class="start_day justify-between flex items-center">
    <div class="todo_text w-full">
      <input type="text" class="pl-3 block mb-3 py-3 text-md rounded-md shadow-md text-black w-11/12" value="選択肢を追加する">
    </div>
    <div class="todo_option justify-between flex">
      <p class="block text-center mb-3 py-2 px-4 mr-2 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">+</p>
      <p class="block text-center mb-3 py-2 px-4 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">-</p>
    </div>
  </div>
  <div class="start_day justify-between flex items-center">
    <div class="todo_text w-full">
      <input type="text" class="pl-3 block mb-3 py-3 text-md rounded-md shadow-md text-black w-11/12" value="選択肢を追加する">
    </div>
    <div class="todo_option justify-between flex">
      <p class="block text-center mb-3 py-2 px-4 mr-2 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">+</p>
      <p class="block text-center mb-3 py-2 px-4 text-md rounded-md shadow-md text-gray-400 bg-white text-4xl">-</p>
    </div>
  </div>
</div>

<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white">更新する</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md text-black">戻る</a>
<a href="/?status_id=not_submitted" class="text-right block text-gray-500 pb-5">全体スケジュールへ</a>

{{-- スペもく:ページ下部に空白をつけるきれいなやり方 --}}

@endsection