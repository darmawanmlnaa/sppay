@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Detail Pembayaran</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('payment.offline') }}">Pembayaran</a></div>
            <div class="breadcrumb-item">Detail</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Transaksi Terbaru</h4>
                    </div>

                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                        @if ($payments->isEmpty())
                            Belum ada transaksi
                        @else
                        @foreach ($payments as $get)
                            <li class="media">
                                <div class="media-body">
                                    <div class="badge badge-pill badge-danger mb-1 float-right"><i class="fas fa-download"></i></div>
                                    <h6 class="media-title"><a href="#">@currency($get->amount)</a></h6>
                                    <div class="text-small text-muted">{{ $get->user->name }} <div class="bullet"></div> <span class="text-primary">{{ $get->created_at }}</span></div>
                                </div>
                            </li>
                        @endforeach
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
    
                    <div class="card-body">
                        <fieldset disabled="disabled">
                            <div class="form-group">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" value="{{ $student->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" value="{{ $student->email }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="grade_id" class="form-label">Kelas</label>
                                <input type="text" value="{{ $student->grade->grade }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="major_id" class="form-label">Jurusan</label>
                                <input type="text" value="{{ $student->major->major }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="spp_id" class="form-label">Spp</label>
                                <input type="text" value="@currency($student->spp->amount)" class="form-control">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection