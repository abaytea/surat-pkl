@extends ('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Pembuatan Surat PKL</h2>
            <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a
                wide variety of forms.</p>
            <div class="card shadow mb-4">

                <div class="card-header">
                    <strong class="card-title">Tambah Surat PKL</strong>
                </div>
                <div class="card-body">
                    <form action={{url("/formtambahsurat")}} method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tujuan Surat</label>
                                    <input type="text" name="tujuan_surat" id="simpleinput" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <p class="mb-2"><strong>Tanggal Mulai</strong></p>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <div class="input-group">
                                                <input type="date" name="tanggal_mulai" class="form-control"
                                                    id="date-input1" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" id="button-addon-date"><span
                                                            class="fe fe-calendar fe-16"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <p class="mb-2"><strong>Data Siswa</strong></p>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="simple-select2">Jurusan </label>
                                                <select name="kelas" class="form-control select2" id="simple-select2">
                                                    <optgroup label="Pilih Kelas">
                                                        <option value="TKJ_A">TKJ</option>
                                                        <option value="TKJ_B">TSM</option>
                                                        <option value="TKJ_C">TKR</option>
                                                        <option value="TSM_A">AP</option>
                                                        <option value="TSM_A">AK</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="simple-select2">Kelas </label>
                                                <select name="kelas" class="form-control select2" id="simple-select2">
                                                    <optgroup label="Pilih Kelas">
                                                        <option value="TKJ_A">A</option>
                                                        <option value="TKJ_B">B</option>
                                                        <option value="TKJ_C">C</option>
                                                        <option value="TSM_A">D</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                             <!-- form-group -->
                                            <div class="form-group col-md-6">
                                                <label for="multi-select2">Nama Siswa</label>
                                                <select name="nama_siswa[]" class="form-control select2-multi"
                                                    id="multi-select2" required>
                                                    <optgroup label="Daftar Siswa">
                                                        <option disabled selected value=""></option>
                                                        @foreach ( $siswa as $data)
                                                        <option value="{{$data->id}}">{{$data->nama}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="text-center">
                                <button type="submite" class="btn mb-2 btn-outline-primary"><span
                                        class="fe fe-arrow-right fe-16 mr-2"></span>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
