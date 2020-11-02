@extends('layouts.admin.main')
@section('title', 'Buat Acara') 
@section('style')

@endsection

@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Buat Acara</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-acara') }}">Acara</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buat Acara</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                {{-- <a href="#" class="btn btn-primary-rgba">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Acara
                </a> --}}
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->

<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Buat Acara Baru</h5>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-10 col-sm-12 m-auto">
                            <form action="{{ url('/admin/buat-acara') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Nama Acara</label>
                                    <input type="text" name="input_nama_acara" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Penyelenggaraan</label>
                                    <input type="date" name="input_tanggal_penyelenggaraan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                    <input type="text" name="input_penyelenggara" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control" name="input_tahun_akademik">
                                        @foreach ($tahun_akademik as $tahun_akademik)
                                            <option value="{{ $tahun_akademik->ID_TAHUN_AKADEMIK }}">{{ $tahun_akademik->TAHUN_AKADEMIK }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Kelompok Kegiatan</label>
                                    <select class="form-control" name="input_kelompok_kegiatan" id="input_kelompok_kegiatan">
                                        <option value="-">----------</option>
                                        @foreach ($kelompok_kegiatan as $kelompok_kegiatan)
                                            <option value="{{ $kelompok_kegiatan->ID_KELOMPOK_KEGIATAN }}">{{ $kelompok_kegiatan->KELOMPOK_KEGIATAN }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kegiatan</label>
                                    <select class="form-control" name="input_jenis_kegiatan" id="input_jenis_kegiatan">
                                        <option value="-">----------</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select class="form-control" name="input_tingkat" id="input_tingkat">
                                        <option value="-">----------</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Template Sertifikat</label>
                                    <select class="form-control" name="input_template">
                                        <option value="1">Template 1</option>
                                        <option value="2">Template 2</option>
                                        <option value="3">Template 2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>File Sertifikat</label>
                                    <input type="file" class="form-control-file" name="file_sertif" required accept=".jpg,.jpeg">
                                    <small class="form-text text-muted">Tipe dokumen: jpg, jpeg</small>
                                </div>

                                <div class="form-group">
                                    <label>File Daftar Partisipan</label>
                                    <input type="file" class="form-control-file" name="file_daftar_partisipan">
                                    <small class="form-text text-muted">Tipe dokumen: xls, xlsx</small>
                                </div>

                                <div class="m-t-50 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save mr-2"></i>
                                        SIMPAN
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->

@endsection
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 
    <script src="{{ asset('/assets/js/admin/buat-acara.js') }}"></script>
@section('script')

@endsection 