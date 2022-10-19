@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
<h1>商品編集画面</h1>
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

{{-- 編集画面 --}}
<div class="editing">
    <!--form action内のものをPOSTで送信する-->
    <form action="/item/{{ $item->id }}" method="POST">
        <h6 class="text-top">名 前</h6>
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $item->name }}">
        <h6 class="text-second">種 別</h6>
        <input type="name" name="type" value="{{ $item->type }}">
        <h6 class="text-serd">詳 細</h6>
        <textarea name="detail" cols="50" rows="10" value="{{ $item->detail }}">{{ $item->detail }}</textarea>
        <h6 class="text-serd">販売価格（円）</h6>
        <input type="number" name="price" value="{{ $item->price }}">
        <h6 class="text-serd">仕入価格（円）</h6>
        <input type="number" name="cost_price" value="{{ $item->cost_price }}">
        <!-- <h6 class="text-serd">利益</h6>
        <input type="text" name="gains" value="{{ $item->gains }}"> -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-list">
                <button type="submit" class="send">送信</button>
            </div>
        </div>
    </form>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
