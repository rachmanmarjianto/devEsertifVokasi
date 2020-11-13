@section('title', 'Cari Mahasiswa') 
@extends('layouts.admin.main')
@section('style')
<link href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('/assets/css/admin/cari-mahasiswa.css') }}">
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Cari Mahasiswa</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Cari Mahasiswa</li>
                </ol>
            </div>
        </div>
        <!-- <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                
            </div>
        </div> -->
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
                    <div class="row justify-content-between mx-3">
                        <h3>Cari Mahasiswa</h3>
                        <div class="input-group col-sm-3">
                            <input type="text" class="form-control" placeholder="NIM" id="inputmask-cari" aria-label="NIM" aria-describedby="button-addon-group">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-warning text-dark not-editing tombol-cari-nim" type="button" id="button-addon-group">CARI</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="msg mb-3"></div>
                        <table id="table-acara" class="table table-striped table-bordered d-none">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nama Acara</th>
                                    <th>Tanggal Penyelenggaraan</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
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

@endsection 
@section('script')
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/admin/cari-mahasiswa.js') }}"></script>
@endsection 