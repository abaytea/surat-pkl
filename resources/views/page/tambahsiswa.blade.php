@extends ('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Penambahan Siswa PKL</h2>
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
                                    <p class="mb-2"><strong>NISN</strong></p>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <div class="input-group">
                                                <input type="text" name="nisn" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <p class="mb-2"><strong>No Hp</strong></p>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <div class="input-group">
                                                <input type="text" name="no_hp" class="form-control">
                                            </div>
                                        </div>
                                    </div>
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

                            <!-- /.col --><div class="col-md-6">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <p class="mb-2"><strong>Data Siswa</strong></p>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="simple-select2">Jurusan </label>
                                                <select name="jurusan" class="form-control select2" id="simple-select2">
                                                    <optgroup label="Pilih Kelas">
                                                        @foreach ($jurusan as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="simple-select2">Kelas </label>
                                                <select name="kelas" class="form-control select2" id="simple-select2">
                                                    <optgroup label="Pilih Kelas">
                                                        @foreach ($kelas as $data)
                                                        <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
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
</div>
    @endsection
