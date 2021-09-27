<div class="modal fade" id="modal-edit-nama-user" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-form-lable">Edit Nama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <form action="{{ url('/mahasiswa/update-nama') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $nama_mahasiswa }}">
                            <small class="form-text text-muted">
                                Nama ini akan digunakan pada setiap sertifikat yang anda cetak.
                            </small>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-sm btn-secondary">
                                BATAL
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="fas fa-save mr-2"></i>
                                SIMPAN
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>