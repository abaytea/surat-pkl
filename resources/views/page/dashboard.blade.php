@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h2 class="h5 page-title">Aplikasi Pembuatan Surat PKL SMK PASUNDAN {{ Auth()->user()->nama}}</h2>
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
                                    <h3 class="card-title mb-0">1168</h3>
                                    <p class="small text-muted mb-0"><span
                                            class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last
                                            week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="sparkline inlineline"></span>
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
                                    <h3 class="card-title mb-0">68</h3>
                                    <p class="small text-muted mb-0"><span
                                            class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last
                                            week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="sparkline inlinepie"></span>
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
                                    <p class="small text-muted mb-0"><span
                                            class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last
                                            week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="sparkline inlinebar"></span>
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
