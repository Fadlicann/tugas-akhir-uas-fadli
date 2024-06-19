@extends('layouts.master')
@section('content')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div>
            <!-- OVERVIEW -->
            <div class="panel panel-headline" style="width: 100%; height: 100%">
                <div class="panel-heading">
                    <h3 class="panel-title">Universitas Muhammadiyyah Sumatera Utara</h3>
                    <h4 class="">Fakultas Ilmu Komputer & Teknologi Informasi</h4>
                    <p class="panel-subtitle">Stambuk 2021</p>
                </div>
                <div class="panel-body" style="padding: 80px">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <a href="/dosen">
                                    <span class="icon"><i class="lnr lnr-user"></i></span>
                                    <span class="title">
                                        <p>Dosen</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <a href="/siswa">
                                    <span class="icon"><i class="lnr lnr-users"></i></span>
                                    <span class="title">
                                        <p>Siswa</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <a href="#">
                                    <span class="icon"><i class="lnr lnr-book"></i></span>
                                    <span class="title">
                                        <p>Prodi</p>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
        <!-- END MAIN CONTENT -->
    </div>
@endsection
