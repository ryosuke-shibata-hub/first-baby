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
            <h2 class="nav-title">かいいんとうろく</h2>
            <div class="button-nav">
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf

                    @if($errors->has('accountname'))
                        <span class="text-danger">{{ $errors->first('accountname') }}</span>
                    @endif
                        <label for="" class="input-form">アカウントネーム</label>
                        <input type="text" class="input-form form-control" name="accountname">
                    @if($errors->has('user_id'))
                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                    @endif
                        <label for="" class="input-form">ユーザーID</label>
                        <input type="text" class="input-form form-control" name="user_id">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                        <label for="" class="input-form">メールアドレス</label>
                        <input type="email" class="input-form form-control" name="email">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                        <label for="" class="input-form">パスワード</label>
                        <input type="password" class="input-form form-control" name="password">
                    @if($errors->has('password_confirmed'))
                        <span class="text-danger">{{ $errors->first('password_confirmed') }}</span>
                    @endif
                        <label for="" class="input-form">確認用パスワード</label>
                        <input type="password" class="input-form form-control" name="password_confirmed">

                    <input type="hidden" name="delete_flg" value="0">
                    <input type="hidden" name="role_flg" value="5">

                    <button type="submit" class="btn btn--orange btn--cubic btn--shadow" id="button-nav-login">
                        アカウント作成
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
