@extends('layouts.master')

@section('content')
    @php
        $no = 0;
    @endphp
    <div class="main">

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                @if (session('sukses'))
                                    <div class="alert alert-success">
                                        {{ session('sukses') }}
                                    </div>
                                @endif
                                <h1 class="panel-title">Dosen</h1>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 48%; padding-left: 20px">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Tambah Data Dosen
                                    </button>
                                </div>
                                <div style="width: 32%;">
                                    <form class="form-inline" method="GET" action="/dosen">
                                        <input name="cari" class="form-control mr-sm-2" type="search"
                                            placeholder="cari nama depan" aria-label="Search">
                                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="panel-body">


                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/dosen/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama_depan" class="form-label">Nama Depan</label>
                                                        <input name="nama_depan" type="text" class="form-control"
                                                            id="nama_depan" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                                        <input name="nama_belakang" type="text" class="form-control"
                                                            id="nama_belakang" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01">Jenis
                                                            Kelamin
                                                        </label>
                                                        <div class="mb-3">
                                                            <select class="custom-select form-control"
                                                                id="inputGroupSelect01" name="jenis_kelamin"
                                                                aria-label="Default select example" required>
                                                                <option selected></option>
                                                                <option value="L">Laki-laki</option>
                                                                <option value="P">Perempuan</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="agama" class="form-label">Agama</label>
                                                        <input name="agama" type="text" class="form-control"
                                                            id="agama" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nip" class="form-label">nip</label>
                                                        <input name="nip" type="text" class="form-control"
                                                            id="nip" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_hp" class="form-label">no_hp</label>
                                                        <input name="no_hp" type="text" class="form-control"
                                                            id="no_hp" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gelar" class="form-label">gelar</label>
                                                        <textarea name="gelar" class="form-control" id="gelar" rows="3" required></textarea>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Gelar</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>No Handphone</th>
                                            <th>Nip</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_dosen as $dosen)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $dosen->nama_depan }}</td>
                                                <td>{{ $dosen->gelar }}</td>
                                                <td>{{ $dosen->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                <td>{{ $dosen->agama }}</td>
                                                <td>{{ $dosen->no_hp }}</td>
                                                <td>{{ $dosen->nip }}</td>
                                                <td>
                                                    <a href="/dosen/{{ $dosen->id }}/edit"
                                                        class="btn btn-warning ">Edit</a>
                                                    <a href="/dosen/{{ $dosen->id }}/delete" class="btn btn-danger"
                                                        onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
