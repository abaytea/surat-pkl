@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h1 class="h2 page-title">Aplikasi Pembuatan Surat PKL SMK PASUNDAN JATINANGOR</h1>
                        <h2 >Selamat Datang {{ Auth()->user()->nama}}</h2>
                </div>
            </div>
            <!-- widgets -->
            <div class="row my-4">
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Surat Masuk</small>
                                    <h3 class="card-title mb-0">{{count($surat)}}</h3>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Jumlah Seluruh Siswa</small>
                                    <h3 class="card-title mb-0">{{count($siswa)}}</h3>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Jumlah Siswa Yang sudah Daftar PKL</small>
                                    <h3 class="card-title mb-0">108</h3>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
            </div> <!-- end section -->
        </div>
    </div>
</div>

@endsection
