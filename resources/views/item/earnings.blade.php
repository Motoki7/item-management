@extends('adminlte::page')

@section('title', '売上画面')

@section('content_header')
<h1>売上確認画面</h1>
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

{{-- 売上画面 --}}
<div class="earnings-content">
    <div class="content-title">
        <ul>

        </ul>
@stop

@section('css')
@stop

@section('js')
@stop
