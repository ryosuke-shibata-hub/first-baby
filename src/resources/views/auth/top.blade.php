{{-- layouts.commonの継承 --}}
@extends('Auth.layouts.common')
{{-- ページタイトルの指定 --}}
@section('title', 'はじめてのあかちゃん')
{{-- headerの継承 --}}
@include('Auth.layouts.header')
{{-- トップページの中身 --}}
@section('content')
<div class="split">
    <div class="split-item-left">
        <div class="split-left-inner">
            <img class="split-left-image" src="/image/Auth/New file.jpeg">
        </div>
    </div>
    <div class="split-item-right">
        <div class="split-right-inner login-split">
            <h2 class="nav-title">はじめてのあかちゃん</h2>
            <div class="button-nav">
                <a href="{{ route('login.form') }}" class="btn btn--orange btn--cubic btn--shadow" id="button-nav-top">ログイン！</a>
                <a href="" class="btn btn--blue btn--cubic btn--shadow" id="button-nav-top">無料館員登録はこちら！</a>
                <a href="" class="btn btn--yellow btn--cubic btn--shadow" id="button-nav-top">ゲストログインはこちら！</a>
            </div>
        </div>
        <footer>
            <div class="extra-footer">
                <small>&copy; 2022 first-baby.</small>
            </div>
        </footer>
    </div>
</div>

@endsection
