@extends('layouts.review_admin')


@section('content')
<p class="mt-3">ようこそ加藤さん</p>
{{-- <p class="ml-5 mt-3">ようこそ{{ Auth::user()->name }}さん</p> --}}

<h2 class="mb-3">毎週のチェック</h2>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold mr-2 rounded-md shadow-md bg-blue-600 text-white">学習進捗【全体】</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold mr-2 rounded-md shadow-md bg-blue-600 text-white">振り返り</a>
<h2 class="mb-3 mt-5">各種編集</h2>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold mr-2 rounded-md shadow-md text-black bg-white">カリキュラムの編集</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold mr-2 rounded-md shadow-md text-black bg-white">Weekの編集</a>
<a href="/?status_id=not_submitted" class="text-center block mb-3 py-3 text-md font-bold mr-2 rounded-md shadow-md text-black bg-white">期生追加</a>

@endsection