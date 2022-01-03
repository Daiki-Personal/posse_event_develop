@extends('layouts.review_admin')


@section('content')
<p class="mt-3 mb-5">ようこそ加藤さん</p>
<div class="start_day justify-between flex items-center mb-2">
  <p class="mb-3 block font-bold">期生</p>
  {{-- <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01"> --}}
  <select name="example" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5">
    <option value="1.0期生">1.0期生</option>
    <option value="1.0期生">1.5期生</option>
    <option value="1.0期生">2.0期生</option>
  </select>
</div>
<div class="start_day justify-between flex items-center mb-2">
  <p class="mb-3 block font-bold">フェーズ</p>
  <select name="example" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5">
    <option value="1.0期生">フェーズ1</option>
    <option value="1.0期生">フェーズ2</option>
    <option value="1.0期生">フェーズ3</option>
  </select>
</div>
<div class="start_day justify-between flex items-center mb-5">
  <p class="mb-3 block font-bold">Week</p>
  <select name="example" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5">
    <option value="Week1">Week1</option>
    <option value="Week1">Week2</option>
    <option value="Week1">Week3</option>
  </select>
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