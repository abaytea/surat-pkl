@extends ('layout.app')

@section('content')
<!-- simple table -->
<div class="col-md-12 my-6">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Data Surat </h4>
            <p class="card-text">Daftar surat siswa yang sudah / belum mengikuti PKL</p>
            @role('siswa')
            <a href="{{url ('/formtambahsurat')}}" class="btn mb-2 btn-secondary btn-lg">Buat Surat PKL</a>
            @endrole
            <div class="col- md-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tujuan_Surat</th>
                            <th>Tanggal_Mulai</th>
                            @role('siswa')
                            <th>Nama Siswa</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            @endrole
                            @role('admin')
                            <th>Status</th>
                            @endrole
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surat as $data)
                        <tr>
                            <td>{{ $data->tujuan_surat }}</td>
                            <td>{{ $data->tanggal_mulai }}</td>
                            @role('siswa')
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->kelas }}</td>
                            @else
                            <td><span class="badge badge-pill badge-success">Sudah</span></td>
                            @endrole
                            <td>
                                <a href="{{ url('/cetak/'. $data->id) }}" class="btn mb-2 btn-secondary">
                                    <span class="fe fe-printer"><span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- simple table -->
    @endsection
