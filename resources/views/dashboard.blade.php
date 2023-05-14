@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Beranda</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ $admins->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Petugas</h4>
                    </div>
                    <div class="card-body">
                        {{ $teachers->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Siswa</h4>
                    </div>
                    <div class="card-body">
                        {{ $students->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        {{ $teachers->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Data SPP</h4>
                    </div>
                    <div class="card-body">
                        {{ $spp->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Data Kelas</h4>
                    </div>
                    <div class="card-body">
                        {{ $grades->count() }}
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Data Jurusan</h4>
                    </div>
                    <div class="card-body">
                        {{ $majors->count() }}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection