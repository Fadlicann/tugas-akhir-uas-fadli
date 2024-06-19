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
                                <h1 class="panel-title">Prodi</h1>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 48%; padding-left: 20px">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Tambah Data prodi
                                    </button>
                                </div>
                                <div style="width: 32%;">
                                    <form class="form-inline" method="GET" action="/prodi">
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
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data prodi</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/prodi/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="prodi" class="form-label">Prodi</label>
                                                        <input name="prodi" type="text" class="form-control"
                                                            id="prodi" aria-describedby="emailHelp" required>
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
                                            <th style="width: 70%">Prodi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_prodi as $prodi)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $prodi->prodi }}</td>
                                                <td>
                                                    <a href="/prodi/{{ $prodi->id }}/edit"
                                                        class="btn btn-warning ">Edit</a>
                                                    <a href="/prodi/{{ $prodi->id }}/delete" class="btn btn-danger"
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
@endsection
