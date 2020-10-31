@extends('layouts.admin.main')
@section('title', 'Acara') 
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
                        <div class="col-md-6 col-sm-12 m-auto">
                            <form action="" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Nama Acara</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Penyelenggaraan</label>
                                    <input type="date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Kelompok Kegiatan</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kegiatan</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tingkat</label>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>File Sertifikat</label>
                                    <input type="file" class="form-control-file">
                                </div>

                                <div class="form-group">
                                    <label>File Daftar Peserta/Panitia</label>
                                    <input type="file" class="form-control-file">
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

@section('script')

@endsection 