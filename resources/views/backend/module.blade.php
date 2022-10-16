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
                @isset($cols)
                @foreach ($cols as $col)
                    <td>{{ $col }}</td>
                @endforeach
                @endisset
                </tr>
                @isset($rows)
                @foreach ($rows as $row)
                <tr>
                    @foreach ($row as $item)
                    <td>
                        @switch($item['tag'])
                            @case('img')
                                @include('layouts.img',$item)
                                @break
                            @case('button')
                                @include('layouts.button',$item)
                                @break
                            @default
                                {{ $item['text'] }}
                        @endswitch
                    </td>
                    @endforeach
                </tr>
                @endforeach
                @endisset
            </table>
        </div>
    </div>
@endsection

@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#addRow').on('click', function () {
        $.get("/modals/add{{ $module }}", function (modal) {
            $("#modal").html(modal)
            const myModal = new bootstrap.Modal('#baseleModal')
            myModal.show()
            // 隱藏時 清除資源 刪除內容
            $('#baseleModal').on('hidden.bs.modal',function(){
                myModal.dispose()
                $("#modal").html("")
            })
        })
    })

    $('.edit').on('click', function () {
        let id=$(this).data('id');
        $.get(`/modals/title/${id}`,
            function (modal) {
                $("#modal").html(modal)
                const myModal = new bootstrap.Modal('#baseleModal')
                myModal.show()
                // 隱藏時 清除資源 刪除內容
                $('#baseleModal').on('hidden.bs.modal',function(){
                    myModal.dispose()
                    $("#modal").html("")
                })
            },
        );
    });

    $('.delete').on('click', function () {
        let id=$(this).data('id');
        $.ajax({
            type: "delete",
            url: `/admin/title/${id}`,
            success: function () {
                location.reload()
            }
        });
    });

    $('.show').on('click', function () {
        let id=$(this).data('id');
        $.ajax({
            type: "patch",
            url: `/admin/title/sh/${id}`,
            success: function () {
                location.reload()
            }
        });
    });
</script>
@endsection