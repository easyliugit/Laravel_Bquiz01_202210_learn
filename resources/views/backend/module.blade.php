@extends('layouts.layout')

@section('main')
    {{-- 選單 --}}
    @include('layouts.backed_sidebar')
    {{-- 主要內容 --}}
    <div class="main col-9 p-0 d-flex flex-wrap align-items-start">
        <div class="col-8 border py-2 text-center">後台管理</div>
        <button class="col-4 btn btn-light border py-2 text-center">管理登出</button>
        <div class="border w-100 p-1" style="height: 500px">
        {{ $header }}
        </div>
    </div>
@endsection

@section('script')
    
@endsection