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
                                <h1 class="panel-title">Mahasiswa</h1>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 48%; padding-left: 20px">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Tambah Data Mahasiswa
                                    </button>
                                </div>
                                <div style="width: 32%;">
                                    <form class="form-inline" method="GET" action="/siswa">
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
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/siswa/create" method="POST">
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
                                                        <label for="nim" class="form-label">Nim</label>
                                                        <input name="nim" type="text" class="form-control"
                                                            id="nim" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
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
                                            <th>Nim</th>
                                            <th>Agama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_siswa as $siswa)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $siswa->nama_depan . ' ' . $siswa->nama_belakang }}</td>
                                                <td>{{ $siswa->nim }}</td>
                                                <td>{{ $siswa->agama }}</td>
                                                <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>
                                                    <a href="/siswa/{{ $siswa->id }}/edit"
                                                        class="btn btn-warning ">Edit</a>
                                                    <a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger"
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
