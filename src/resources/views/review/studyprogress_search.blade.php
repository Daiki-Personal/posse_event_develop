@extends('layouts.review_admin')


@section('content')
<p class="mt-3 mb-5">ようこそ加藤さん</p>
<h2 class="mb-3 mt-5 font-bold">検索</h2>
<div class="bg-white p-3 rounded-md">
  <h3 class="text-lg font-bold">期生</h3>
  <ul class="flex flex-wrap gap">
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white"><img src="/img/check-white.svg" class="h-full navbar-brand w-5">1.0期生</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">1.5期生</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">2.0期生</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">2.5期生</li>
  </ul>
  <h3 class="text-lg font-bold">期生</h3>
  <ul class="flex flex-wrap gap">
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white"><img src="/img/check-white.svg" class="h-full navbar-brand w-5">A</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">B</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">C</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">D</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">E</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">F</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">G</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">H</li>
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md text-gray-400"><img src="/img/check-gray.svg" class="h-full navbar-brand w-5">I</li>
  </ul>
  <h3 class="text-lg font-bold">進捗ステータス</h3>
  <ul class="flex flex-wrap gap">
    <li class="text-center block mb-3 py-2 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white"><img src="/img/check-white.svg" class="h-full navbar-brand w-5">遅れていない人</li>
  </ul>
  <button class="mx-auto text-center block mb-3 py-2 px-5 text-md font-bold rounded-md shadow-md bg-blue-600 text-white">検索</button>
</div>

<div class="curriculum_todos mb-5">
  <h2 class="mb-3 mt-5 font-bold inline-block">検索結果</h2>
  <a href="#">グラフ表示</a>
  <div class="w-full px-3 block mb-2 py-3 text-md rounded-md shadow-md text-black w-11/12 bg-white flex justify-between">
    <div class="name">NAME</div>
    <div class="study_time_total">学習時間</div>
    <div class="inputstudy_time_total">インプット課題</div>
    <div class="outputstudy_time_total">POSSE課題</div>
  </div>
  <div class="w-full px-3 block mb-2 py-3 text-md rounded-md shadow-md text-black w-11/12 bg-white flex justify-between">
    <div class="name">穴田竜大</div>
    <div class="study_time_total text-red-600">-10</div>
    <div class="inputstudy_time_total text-blue-600">+10</div>
    <div class="outputstudy_time_total text-blue-600">+10</div>
  </div>
  <div class="w-full px-3 block mb-2 py-3 text-md rounded-md shadow-md text-black w-11/12 bg-red-600 flex justify-between">
    <div class="name text-white">穴田竜大</div>
    <div class="study_time_total text-white">-18</div>
    <div class="inputstudy_time_total text-white">+10</div>
    <div class="outputstudy_time_total text-white">+10</div>
  </div>
  <div class="w-full px-3 block mb-2 py-3 text-md rounded-md shadow-md text-black w-11/12 bg-white flex justify-between">
    <div class="name">穴田竜大</div>
    <div class="study_time_total text-red-600">-10</div>
    <div class="inputstudy_time_total text-blue-600">+10</div>
    <div class="outputstudy_time_total text-blue-600">+10</div>
  </div>
  <div class="w-full px-3 block mb-2 py-3 text-md rounded-md shadow-md text-black w-11/12 bg-white flex justify-between">
    <div class="name">穴田竜大</div>
    <div class="study_time_total text-red-600">-10</div>
    <div class="inputstudy_time_total text-blue-600">+10</div>
    <div class="outputstudy_time_total text-blue-600">+10</div>
  </div>
</div>

<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md bg-blue-600 text-white">更新する</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 px-3 text-md font-bold rounded-md shadow-md text-black">戻る</a>

{{-- スペもく:ページ下部に空白をつけるきれいなやり方 --}}

@endsection