@extends ('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Pembuatan Surat PKL</h2>
            <p class="text-muted">Penambahan data siswa PKL SMK Pasundan Jatinangor</p>
            <div class="card shadow mb-4">

                <div class="card-header">
                    <p class="mb-2"><strong>Tambah Data Siswa</strong></p>
                </div>
                <div class="card-body">
                    <form action={{url("/formtambahsiswa")}} method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama</label>
                                    <input type="text" name="nama" id="simpleinput" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <p class="mb-2"><strong>User Name</strong></p>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <div class="input-group">
                                                <input type="text" name="username" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p class="mb-2"><strong>Password</strong></p>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <div class="input-group">
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="simple-select2">Kelas </label>
                                                <select name="kelas" class="form-control select2" id="simple-select2">
                                                    <optgroup label="kelas">
                                                        <option value="TKJ_A">TKJ_A</option>
                                                        <option value="TKJ_B">TKJ_B</option>
                                                        <option value="TKJ_C">TKJ_C</option>
                                                        <option value="TSM_A">TSM_A</option>
                                                        <option value="TSM_B">TSM_B</option>
                                                        <option value="TKR_A">TKR_A</option>
                                                        <option value="TKR_B">TKR_B</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">&emsp;
                                <button type="submite" class="btn mb-2 btn-outline-primary">
                                    <span class="fe fe-arrow-right fe-16 mr-2"></span>&ensp;Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
