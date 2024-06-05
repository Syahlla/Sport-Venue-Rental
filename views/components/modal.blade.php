<div class="modal fade" id="modal-create-field-category" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold">Tambah Kategori Lapangan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('master.category.store') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="col-12">
                    <label for="field_category" class="form-label fw-bold">Kategori</label>
                    <input type="text" class="form-control" id="field_category" name="name" placeholder="futsal" required>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>