<div class="modal fade" id="cropModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Image</h5>
                <button type="button" class="close btn btn-light bg-transparent border-0 shadow-none" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <img id="image" class="img-container" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="cropButton" style="display: block;">Crop & Upload</button>
                <button type="button" class="btn btn-primary" id="loading" style="display: none;"><i class="fas fa-spinner fa-spin"></i> Uploading...</button>
            </div>
        </div>
    </div>
</div>