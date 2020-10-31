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
                            <h6>: &nbsp; Webinar Web Dev</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tanggal Penyelenggaraan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; 10/10/2020</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Penyelenggara</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; HIMASI</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tahun Akademik</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; 2020/2021 - Ganjil</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Kelompok Kegiatan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; lorem ipsum</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Jenis Kegiatan</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; lorem ipsum</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <label>Tingkat</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h6>: &nbsp; lorem ipsum</h6>
                        </div>
                    </div>

                </div>

                <div class="card-header">
                    <h5 class="card-title">Daftar Peserta</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Partisipasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andrico Cahyadi</td>
                                    <td>Panitia</td>
                                    <td class="aksi">
                                        <button class="btn btn-sm btn-warning text-dark" data-toggle="modal" data-target="#modal-edit-peserta">
                                            <i class="fas fa-pen mr-2"></i>
                                            EDIT
                                        </button>
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

{{-- Start Modal Edit Peserta --}}
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
{{-- End of Modal Edit Peserta --}}
@endsection 

@section('script')
<!-- Datatable js -->
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/js/admin/acara.js') }}"></script>
@endsection 