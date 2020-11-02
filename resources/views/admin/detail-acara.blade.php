@extends('layouts.admin.main')
@section('title', 'Detail Acara') 
@section('style')
<!-- DataTables css -->
<link href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/admin/acara.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Detail Acara</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin-acara') }}">Acara</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Acara</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                {{-- <a href="{{ url('/admin/buat-acara') }}" class="btn btn-primary-rgba">
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

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Nama Acara</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $nama_acara }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tanggal Penyelenggaraan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $tanggal_penyelenggaraan }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Penyelenggara</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $penyelenggara }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tahun Akademik</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $tahun_akademik }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Kelompok Kegiatan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $kelompok_kegiatan }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Jenis Kegiatan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $jenis_kegiatan }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tingkat</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $tingkat }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>File Sertifikat</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $file_sertif }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>File Daftar Partisipan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; {{ $file_nama }}</h6>
                        </div>
                    </div>

                </div>

                <div class="card-header">
                    <div class="row justify-content-between mx-3">
                        <h5 class="card-title">Daftar Peserta</h5>
                        <button class="btn btn-sm btn-warning text-dark not-editing" id="edit-btn">
                            <i class="fas fa-pen mr-2"></i>
                            EDIT
                        </button>
                    </div>
                    
                </div>
                <div class="card-body">

                    <div class="table-responsive" id="read-table-container">
                        <table class="table table-striped table-bordered datatable-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Partisipasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="peserta-151811513000">
                                    <td id="nomor-151811513000">1</td>
                                    <td id="nim-151811513000">151811513000</td>
                                    <td id="nama-151811513000">Andrico Cahyadi</td>
                                    <td id="partisipasi-151811513000">Panitia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive" id="edit-table-container">
                        <table class="table table-striped table-bordered datatable-table" id="edit-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Partisipasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="peserta-151811513000">
                                    <td id="nomor-151811513000">1</td>
                                    <td id="nim-151811513000">
                                        <input class="form-control" type="number" name="nim[]" required value="151811513000">
                                    </td>
                                    <td id="nama-151811513000">
                                        <input class="form-control" type="text" name="nama[]" required value="Andrico Cahyadi">
                                    </td>
                                    <td id="partisipasi-151811513000">
                                        <select class="form-control" name="partisipasi[]" required>
                                            <option value="1">Panitia</option>
                                            <option value="2">Peserta</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->

<!-- {{-- Start Modal Edit Peserta --}}
<div class="modal fade" id="modal-edit-peserta" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-form-lable">Edit Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button class="btn btn-sm btn-danger" data-dismiss="modal">
                    BATAL
                </button>
                <button class="btn btn-sm btn-primary">
                    SIMPAN
                </button>
            </div>
        </div>
    </div>
</div>
{{-- End of Modal Edit Peserta --}} -->
@endsection 

@section('script')
<!-- Datatable js -->
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/js/admin/detail-acara.js') }}"></script>
@endsection 