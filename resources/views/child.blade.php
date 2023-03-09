@extends('layouts.app')
 {{-- 繼承layouts.app父類別 --}}
 {{-- 一個變數 --}}
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
    {{-- 父類別的 再加上自己新增的 --}}
 
    <p>This is appended to the master sidebar.</p>
@endsection
 {{-- content很多個變數 --}}
@section('content')
    <p>This is my body content.</p>
@endsection