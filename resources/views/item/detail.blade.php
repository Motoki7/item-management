@extends('adminlte::page')

@section('title', '商品詳細')

@section('content_header')
<h1>商品詳細画面</h1>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-warning alert-dismissible">
    {{-- エラーの表示 --}}
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- 詳細画面 --}}
<div class="detail-content">
    <div class="content-title">
        <ul>
            <li>ID: {{ $item->id }}</li>
            <li>名前: {{ $item->name }}</li>
            <li>詳細: {{ $item->detail }}</li>
            <li>作成時間: {{ $item->created_at }}</li>
        </ul>
@stop

@section('css')
@stop

@section('js')
@stop
