@extends('layouts.admin.main')
@section('title', 'Acara') 
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
            <h4 class="page-title">Acara</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Acara</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ url('/admin/buat-acara') }}" class="btn btn-primary-rgba">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Acara
                </a>
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
                    <h5 class="card-title">Daftar Acara</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Nama Acara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($acara as $acara)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $acara->TANGGAL_PENYELENGGARAAN }}</td>
                                    <td>{{ $acara->NAMA_ACARA }}</td>
                                    <td class="aksi">
                                        <a href="{{ url('/admin/detail-acara').'/'.$acara->ID_ACARA }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-info-circle mr-2"></i>
                                            DETAIL
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
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
<!-- Datatable js -->
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/js/admin/acara.js') }}"></script>
@endsection 