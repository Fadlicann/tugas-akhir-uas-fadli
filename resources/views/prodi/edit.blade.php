@extends('layouts.master')
@section('content')
    <h1>Edit data Siswa</h1>
    @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif
    @php
        $no = 0;
    @endphp

    <div class="row">
        <div class="col-lg-12">
            <form action="/siswa/{{ $siswa->id }}/update" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="nama_depan" aria-describedby="emailHelp"
                        required value="{{ $siswa->nama_depan }}">
                </div>
                <div class="mb-3">
                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="nama_belakang"
                        aria-describedby="emailHelp" required value="{{ $siswa->nama_belakang }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example" required>
                        <option selected></option>
                        <option value="L" @if ($siswa->jenis_kelamin === 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if ($siswa->jenis_kelamin === 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input name="agama" type="text" class="form-control" id="agama" required
                        value="{{ $siswa->agama }}">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">no_hp</label>
                    <textarea name="no_hp" class="form-control" name="no_hp" id="no_hp" rows="3" required>{{ $siswa->alamat }}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update data</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    @endsection
