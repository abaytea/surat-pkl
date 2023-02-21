@extends ('layout.app')

@section('content')
<!-- simple table -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <form action={{url("/formeditprofile")}} method="post">
                @csrf
                <h2 class="h3 mb-4 page-title">Settings</h2>
                <div class="my-4">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Profile</a>
                        </li>
                    </ul>
                    <hr class="my-4">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Nama</label>
                            <input type="text" id="firstname" class="form-control"
                                value="{{ Auth()->user()->nama }}" readonly>
                        </div>
                    </div>
                    @role('admin')
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">NIP</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $user->nip}}"
                            readonly>
                    </div>
                    @else
                    <div class="form-group col-md-6">
                        <label for="inputAddress5">NISN</label>
                        <input type="text" class="form-control" id="inputAddress5" placeholder=""
                            value="{{ $user->nisn }}" readonly>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany5">No HP</label>
                            <input type="text" value="{{ $user->no_hp }}" class="form-control" id="inputCompany5"
                                placeholder="">
                        </div>
                    </div>
                    @endrole
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Username</label>
                            <input type="text" id="firstname" name="username" class="form-control" placeholder=""
                                value="{{ Auth()->user()->username }}">
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Old Password</label>
                                <input type="password" class="form-control" id="inputPassword5" name="oldPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">New Password</label>
                                <input type="password" class="form-control" id="inputPassword5" name="newPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">Confirm Password</label>
                                <input type="password" class="form-control" id="inputPassword6" name="confPassword">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Password requirements</p>
                            <p class="small text-muted mb-2"> To create a new password, you have to meet all of the
                                following requirements: </p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li> Minimum 8 character </li>
                                <li>At least one special character</li>
                                <li>At least one number</li>
                                <li>Can’t be the same as a previous password </li>
                            </ul>
                        </div>
                    </div>
                </div><button type="submit" class="btn btn-primary">Save Change</button>
            </form>
        </div>
    </div>
    @endsection
