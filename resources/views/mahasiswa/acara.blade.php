@section('title', 'Acara') 
@extends('layouts.mahasiswa.main')
@section('style')
<link href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> --}}
<link rel="stylesheet" href="{{ asset('/assets/css/mahasiswa/acara.css') }}">
@endsection 
@section('rightbar-content')
    {{-- Alert update nama --}}
    @if (session('status_update_nama'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Nama anda berhasil diupdate!'
        });
    </script>
    @endif
    {{-- Alert update nama --}}
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered datatable-table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal Penyelenggaraan</th>
                                                <th>Nama Acara</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($acara as $acara)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $acara->acara->TANGGAL_PENYELENGGARAAN }}</td>
                                                <td>{{ $acara->acara->NAMA_ACARA }}</td>
                                                <td class="aksi">
                                                    <a href="{{ url('/mahasiswa/cetak-sertifikat').'/'.$acara->acara->ID_ACARA }}" class="btn btn-sm btn-info">
                                                        <i class="fas fa-print mr-2"></i>
                                                        CETAK SERTIFIKAT
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
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/js/mahasiswa/acara.js') }}"></script>
@endsection 