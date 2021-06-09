@extends('layouts.common')

@section('title', 'Home')

@section('content')
<div class="jumbotron text-light" style="background-image: url(https://d1f5hsy4d47upe.cloudfront.net/88/8860a11226053808eae092b2b94b7b30_t.jpeg); background-size: auto;">
    <div class="container">
        <h1 class="display-3">予約を簡単に！！</h1>
        <p class="lead">夏の思い出にいい旅を</p>
        <a href="{{ route('hotel.index') }}" class="btn btn-success btn-lg my-2">ホテルを申し込む</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">便利</h5>
                    <p class="card-text">このサイトでホテルの予約が取れます</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">価格がリーズナブル</h5>
                    <p class="card-text">ホテル代金が割引されています</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">使いやすい</h5>
                    <p class="card-text">ボタンをクリックするだけ</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection