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
            @if($errors->any())
                <img class="split-left-image" src="/image/Auth/2384190.jpg">
            @else
                <img class="split-left-image" src="/image/Auth/2382864.jpg">
            @endif

        </div>
    </div>
    <div class="split-item-right">
        <div class="split-right-inner">
            <h1 class="nav-title">はじめまして</h1>
            <div class="button-nav">
                <span class="register_add_nav">会員登録が完了いたしました！
                    ログイン画面からログインして<br>
                    はじめてのあかちゃんをお楽しみください！
                </span>
            </div>
            <a href="{{ route('login.form') }}" class="btn btn--orange btn--cubic btn--shadow" id="button-nav-top">
                ログイン！
            </a>
        </div>
        <footer>
            <div class="extra-footer">
                <small>&copy; 2022 first-baby.</small>
            </div>
        </footer>
    </div>
</div>

@endsection
