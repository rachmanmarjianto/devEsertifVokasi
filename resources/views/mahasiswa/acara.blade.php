@section('title', 'Acara') 
@extends('layouts.mahasiswa.main')
@section('style')
<!-- DataTables css -->
<!-- <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> -->
<!-- <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> -->
<!-- Responsive Datatable css -->
<!-- <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script> -->
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Buat Acara</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Acara</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buat Acara</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <!-- <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div>                         -->
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- Start row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                        
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
<!-- <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script> -->
@endsection 