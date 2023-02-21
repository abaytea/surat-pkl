@extends ('layout.app')

@section('content')
<!-- simple table -->
<div class="col-md-12 my-6">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Data Siswa </h5>
            <p class="card-text">Daftar nama siswa yang sudah / belum mengikuti PKL</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>NISN</th>
                        <th>No Hp</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->kelas }}</td>
                        <td><span class="badge badge-pill badge-success">Sudah</span></td>
                        <td><button type="button" class="btn mb-2 btn-secondary"><span
                                    class="fe fe-download fe-16"><span></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- simple table -->
@endsection
