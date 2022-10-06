@extends('layouts.layout')

@section('main')
    {{-- 選單 --}}
    <div class="menu col-3">
        <div class="list-group">
            <div class="border-bottom my-2 p-1 text-center">後台管理</div>
            <div class="listgroup-item">標題圖片管理</div>
            <div class="listgroup-item">動態廣告管理</div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
            <div class="listgroup-item"></div>
        </div>
        <div class="border text-center">訪客人數：</div>
    </div>
    {{-- 主要內容 --}}
    <div class="main col-9 p-0 d-flex flex-wrap align-items-start">
        <div class="col-8 border py-2 text-center">後台管理</div>
        <button class="col-4 btn btn-light border py-2 text-center">管理登出</button>
        <div class="border w-100 p-1" style="height: 500px"></div>
    </div>
@endsection

@section('script')
    
@endsection