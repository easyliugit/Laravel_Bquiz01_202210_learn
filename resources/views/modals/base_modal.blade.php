<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#baseleModal">
Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="baseleModal" tabindex="-1" aria-labelledby="ModalCenter" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        {{-- 網站標題 --}}
        <h1 class="modal-title fs-5" id="ModalCenter">{{ $modal_header }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        ...
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">儲存</button>
    </div>
    </div>
</div>
</div>