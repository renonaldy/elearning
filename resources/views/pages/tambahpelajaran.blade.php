@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])


@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Pelajaran'])


    <div class="container-fluid py-4">
        <div class="row">
            {{-- <div class="col-12"> --}}
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h5 class="pb-4">Form Tambah Pelajaran</h5>
                </div>
                <div class="card-body px-0 pt-0 pb-4">
                    <div class="table-responsive p-4">
                        <form action="tambahpelajaran" method="post" enctype="multipart/form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="modal-body text-left">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Nama Pelajaran: </label>
                                        <div class="form-group">
                                            <input type="text" name="nama_pelajaran" class="form-control"
                                                id="exampleFormControlInput1" required
                                                placeholder="Masukkan nama lengkap">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Guru yang mengajar</label>
                                        <div class="form-group">
                                            <select class="form-select" name="nama_guru">
                                                <option selected>Pilih</option>
                                                <option value="Guru 1">Guru 1</option>
                                                <option value="Guru 2">Guru 2</option>
                                                <option value="Guru 3">Guru 3</option>
                                                <option value="Guru 4">Guru 4</option>
                                                <option value="Guru 5">Guru 5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <label>&nbsp;</label>
                                        <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;<button type="submit"
                                                class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
