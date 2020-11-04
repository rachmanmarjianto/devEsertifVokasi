@extends('layouts.admin.main')
@section('title', 'Detail Acara') 
@section('style')
<!-- DataTables css -->
<link href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/admin/acara.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/pnotify/css/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
    .ui-pnotify-title,
    .ui-pnotify-text,
    .ui-pnotify-icon span{
      color: #FFF;
    }
</style>
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

                    <div class="row mb-3">
                        <button class="btn btn-lg btn-warning text-dark ml-3 mr-3" id="">
                            <i class="fas fa-pen mr-2"></i>
                            EDIT
                        </button>
                        <button class="btn btn-lg btn-info text-light mr-3" id="upload-sertif" data-toggle="modal" data-target="#modal-upload-sertif">
                            <i class="fas fa-upload mr-2"></i>
                            Upload Sertifikat
                        </button>
                        <button class="btn btn-lg btn-warning text-dark" id="">
                            <i class="fas fa-pen mr-2"></i>
                            EDIT
                        </button>
                    </div>

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
                        @if($status)
                        <button class="btn btn-sm btn-warning text-dark not-editing" id="edit-btn">
                            <i class="fas fa-pen mr-2"></i>
                            EDIT
                        </button>
                        @endif
                    </div>
                    
                </div>
                <div class="card-body">

                    <div class="table-responsive" id="read-table-container">
                        <table class="table table-striped table-bordered datatable-table" id="read-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Partisipasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($status)
                                    @foreach($partisipan as $d)
                                    <tr id="peserta-{{ $loop->index }}">
                                        <td id="nomor-{{ $loop->index }}">{{ $loop->iteration }}</td>
                                        <td id="nim-{{ $loop->index }}">{{ $d->NIM }}</td>
                                        <td id="nama-{{ $loop->index }}">{{ $d->user->NAMA_USER }}</td>
                                        <td id="partisipasi-{{ $loop->index }}">
                                            @if($d->ID_PARTISIPASI != NULL)
                                            {{ $d->partisipasi->PARTISIPASI }}
                                            @else
                                            -
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($status)
                                @foreach($partisipan as $d)
                                <tr id="peserta-{{ $loop->index }}">
                                    <td id="nomor-{{ $loop->index }}">{{ $loop->iteration }}</td>
                                    <td id="nim-{{ $loop->index }}">
                                        <input class="form-control" type="text" name="nim[]" required value="{{ $d->NIM }}" readonly>
                                    </td>
                                    <td id="nama-{{ $loop->index }}">
                                        <input class="form-control" type="text" name="nama[]" required value="{{ $d->user->NAMA_USER }}" readonly>
                                    </td>
                                    <td>
                                        
                                        <select class="form-control partisipasi" name="partisipasi[]" required id="partisipasi-{{ $loop->index }}">
                                            @if($d->ID_PARTISIPASI == NULL || $d->ID_PARTISIPASI == '')
                                            <option disabled selected>Pilih Partisipasi</option>
                                            @endif
                                            @foreach($partisipasi as $p)
                                                @if($d->ID_PARTISIPASI != NULL && $p->ID_PARTISIPASI == $d->ID_PARTISIPASI)
                                                <option value="{{$p->ID_PARTISIPASI}}" selected>{{$p->PARTISIPASI}}</option>
                                                @else
                                                <option value="{{$p->ID_PARTISIPASI}}">{{$p->PARTISIPASI}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning text-dark update-btn" id="update-{{ $loop->index }}">
                                            <i class="fas fa-save mr-2"></i>
                                            UPDATE
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
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

{{-- Start Modal Upload Sertifikat --}}
<div class="modal fade" id="modal-upload-sertif" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-form-lable">Upload Sertifikat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="card-title">Pilih Template Yang Digunakan</h5>
                <hr>
                @foreach($template as $t)
                <img src="{{asset('/template/preview_'.$t->NAMA_TEMPLATE.'.png')}}">
                @endforeach
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
<script src="{{ asset('assets/plugins/pnotify/js/pnotify.custom.min.js') }}"></script>
<script type="text/javascript">
    "use strict";
    var data_peserta;
    var id_acara = <?php echo $id_acara; ?>;
    var APP_URL = "<?php echo url('/'); ?>";
    var token = " {{ csrf_token() }}";
</script>
@if($status)
data_peserta = <?php echo json_encode($partisipan[0]); ?>;
@endif
<script src="{{ asset('/assets/js/admin/detail-acara.js') }}"></script>
@endsection 