{{-- 共通bladeの継承(common.blade) --}}
@extends('User.layouts.common')
{{-- タイトル設定 --}}
@section('title', 'はじめてのあかちゃん')
{{-- 共通headerの読み込み --}}
@include('User.layouts.header')
{{-- コンテンツ内容 --}}
@section('content')
    <h1>ようこそ</h1>
@endsection
{{-- 共通フッターの読み込み --}}
@include('User.layouts.footer')
