<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#baseleModal">
Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="baseleModal" tabindex="-1" aria-labelledby="ModalCenter" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
    <form action="{{$action}}" method="post" enctype="multipart/form-data" class="w-100">
    @csrf
        <div class="modal-content">
        <div class="modal-header">
            {{-- 網站標題 --}}
            <h1 class="modal-title fs-5" id="ModalCenter">{{ $modal_header }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="m-auto">
                @isset($modal_body)
                @foreach ($modal_body as $row)
                    <tr>
                        <td class="text-right">{{$row["label"]}}</td>
                        <td>
                            @switch($row["tag"])
                                @case('input')
                                    @include('layouts.input',$row)
                                    @break
                                @case('textarea')
                                    
                                    @break
                                @case('img')                                    
                                    @include('layouts.img',$row)
                                    @break
                                @default
                                    
                            @endswitch
                        </td>
                    </tr>
                @endforeach
                @endisset
            </table>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">重置</button>
            <button type="submit" class="btn btn-primary">儲存</button>
        </div>
        </div>
    </form>

</div>
</div>