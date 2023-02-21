@extends ('layout.app')

@section('content')
<!-- simple table -->
<div class="col-md-12 my-6">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Data Surat </h5>
            <p class="card-text">Daftar surat siswa yang sudah / belum mengikuti PKL</p>
            <div class="col- md-4">
                <form class="form-inline mr-auto searchform text-muted">
                    <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
                  </form>
            </br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tujuan_Surat</th>
                        <th>Tanggal_Mulai</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $data)
                    <tr>
                        <td>{{ $data->tujuan_surat }}</td>
                        <td>{{ $data->tanggal_mulai }}</td>
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
