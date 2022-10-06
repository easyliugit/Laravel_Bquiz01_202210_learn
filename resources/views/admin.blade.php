@extends('layouts.layout')

@section('main')
    {{-- 選單 --}}
    <div class="menu col-3">
        <div class="list-group text-center">
            <div class="border-bottom my-2 p-1">後台管理</div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/title" class="d-block">標題圖片管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/ad" class="d-block">動態文字廣告管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/image" class="d-block">校園映像圖片管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/mvim" class="d-block">動畫圖片管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/total" class="d-block">進站人數管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/bottom" class="d-block">頁尾版權管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/news" class="d-block">最新消息管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/admin" class="d-block">管理者管理</a></div>
            <div class="list-group-item list-group-item-action px-0"><a href="/admin/menu" class="d-block">選單管理</a></div>
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