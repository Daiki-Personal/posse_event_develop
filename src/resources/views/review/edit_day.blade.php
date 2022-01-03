@extends('layouts.review_admin')


@section('content')
<p class="mt-3 mb-5">ようこそ加藤さん</p>
<div class="start_day justify-between flex items-center mb-5">
  <p class="mb-3 block font-bold">フェーズのスタート</p>
  <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
</div>

<div class="weeks mb-5">
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week1</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
  <div class="start_day justify-between flex items-center">
    <p class="mb-3 block font-bold">Week{$N}</p>
    <input type="date" class="block text-center mb-3 py-3 text-md font-bold rounded-md shadow-md text-black w-3/5" value="2022-01-01">
  </div>
</div>

<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white">更新する</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold rounded-md shadow-md text-black">戻る</a>
<a href="/?status_id=not_submitted" class="text-right block text-gray-500 pb-5">全体スケジュールへ</a>

{{-- スペもく:ページ下部に空白をつけるきれいなやり方 --}}

@endsection