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
            <img class="split-left-image" src="/image/Auth/2382857.jpg">
        </div>
    </div>
<div class="split-item-right">
        <div class="split-right-inner">
            <h2 class="nav-title">ログイン</h2>
            @if(session('login_error'))
            <h4 class="text-danger">
                {{ session('login_error') }}
            </h4>
            @endif
            <div class="button-nav">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    @if($errors->has('user_id'))
                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                    @endif
                        <label for="" class="input-form">ユーザーID</label>
                        <input type="text" class="input-form form-control" name="user_id">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                        <label for="" class="input-form">パスワード</label>
                        <input type="password" class="input-form form-control" name="password">

                    <button type="submit" class="btn btn--orange btn--cubic btn--shadow" id="button-nav-login">
                        ログイン！
                    </button>
                </form>
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
