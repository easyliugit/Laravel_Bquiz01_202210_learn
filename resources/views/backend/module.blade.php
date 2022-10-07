@extends('layouts.layout')

@section('main')
    {{-- 選單 --}}
    @include('layouts.backed_sidebar')
    {{-- 主要內容 --}}
    <div class="main col-9 p-0 d-flex flex-wrap align-items-start">
        <div class="col-8 border py-2 text-center">後台管理</div>
        <button class="col-4 btn btn-light border py-2 text-center">管理登出</button>
        <div class="border w-100 p-1" style="height: 500px">
            <h5 class="text-center border-bottom py-3">
                <button id="addRow" class="btn btn-primary btn-sm float-start">新增</button>
                {{ $header }}
            </h5>
            <table class="table border-none text-center">
                <tr>
                    <td>網站標題</td>
                    <td>替代文字</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="10%">操作</td>
                </tr>
                <tr>
                    <td>圖片</td>
                    <td><input type="text" name="" id=""></td>
                    <td><button class="btn btn-success btn-sm">顯示</button></td>
                    <td><button class="btn btn-danger btn-sm">刪除</button></td>
                    <td><button class="btn btn-info btn-sm">編輯</button></td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#addRow').on('click', function () {
        $.get("/modals/addTitle", function (modal) {
            $("#modal").html(modal)
            const myModal = new bootstrap.Modal('#baseleModal')
            myModal.show()
        })
    })
</script>
@endsection