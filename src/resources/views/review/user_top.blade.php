@extends('layouts.review_user')

@section('content')
<p class="mt-3">ようこそ石田さん</p>
<div class="d-flex bd-highlight text-center">
    <div class="border rounded-lg bg-white p-2 flex-grow-1 bd-highlight p-3">Week5(11/1~11/8)</div>
    <div class="border rounded-lg bg-white p-2 flex-grow-2 bd-highlight d-flex align-items-center"> 今週に戻る</div>
</div>
<div class="border rounded-lg bg-white mt-5 p-3">
    <h3 class="mb-4">今週のタスク</h3>
    <div class="form-group_a">

        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck1a">
            <label class="custom-control-label" for="customCheck1a">コンテナを立ち上げられましたか</label>
            <a data-toggle="collapse" href="#collapse1a" aria-expanded="false" aria-controls="collapse1a">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse1a">
            <div class="border p-3">
                コンテナコンテナコンテナ
            </div>
        </div>



        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck2a">
            <label class="custom-control-label" for="customCheck2a">dockerは落としましたか</label>
            <a data-toggle="collapse" href="#collapse2a" aria-expanded="false" aria-controls="collapse2a">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse2a">
            <div class="border p-3">
                docker compose down だよん
            </div>
        </div>


        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck3a">
            <label class="custom-control-label" for="customCheck3a">Check this custom checkbox</label>
            <a data-toggle="collapse" href="#collapse3a" aria-expanded="false" aria-controls="collapse3a">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse3a">
            <div class="border p-3">
                表示されました！
            </div>
        </div>
    </div>
</div>

<div class="border rounded-lg bg-white mt-3 p-3">
    <h3 class="mb-4">残りのタスク</h3>
    <div class="form-group_b">

        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck1b">
            <label class="custom-control-label" for="customCheck1b">HTML表示させましたか</label>
            <a data-toggle="collapse" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse1b">
            <div class="border p-3">
                コンテナコンテナコンテナ
            </div>
        </div>



        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck2b">
            <label class="custom-control-label" for="customCheck2b">dockerは落としましたか</label>
            <a data-toggle="collapse" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse2b">
            <div class="border p-3">
                docker compose down だよん
            </div>
        </div>


        <div class="custom-control form-control-lg custom-checkbox border-bottom d-flex justify-content-between">
            <input type="checkbox" class="custom-control-input" id="customCheck3b">
            <label class="custom-control-label" for="customCheck3b">Check this custom checkbox</label>
            <a data-toggle="collapse" href="#collapse3b" aria-expanded="false" aria-controls="collapse3b">
                ▼
            </a>
        </div>
        <div class="collapse" id="collapse3b">
            <div class="border p-3">
                表示されました！
            </div>
        </div>
    </div>
</div>


@endsection
