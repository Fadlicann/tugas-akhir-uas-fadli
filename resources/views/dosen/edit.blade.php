@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif
    @php
        $no = 0;
    @endphp
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Dosen</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/dosen/{{ $dosen->id }}/update" method="POST">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="nama_depan" class="form-label">Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control" id="nama_depan"
                                        aria-describedby="emailHelp" required value="{{ $dosen->nama_depan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control" id="nama_belakang"
                                        aria-describedby="emailHelp" required value="{{ $dosen->nama_belakang }}">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" aria-label="Default select example"
                                        required>
                                        <option selected></option>
                                        <option value="L" @if ($dosen->jenis_kelamin === 'L') selected @endif>Laki-laki
                                        </option>
                                        <option value="P" @if ($dosen->jenis_kelamin === 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="agama" required
                                        value="{{ $dosen->agama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">no_hp</label>
                                    <input name="no_hp" class="form-control" name="no_hp" id="no_hp" rows="3"
                                        required value=" {{ $dosen->no_hp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nip" class="form-label">nip</label>
                                    <input name="nip" class="form-control" name="nip" id="nip" rows="3"
                                        required value=" {{ $dosen->nip }}">
                                </div>
                                <div class="mb-3">
                                    <label for="gelar" class="form-label">gelar</label>
                                    <input name="gelar" class="form-control" name="gelar" id="gelar" rows="3"
                                        required value=" {{ $dosen->gelar }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning">Update data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
