@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Menu Pembayaran</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Menu</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <a href="{{ route('payment.offline') }}">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center">
                            <div class="h4">Buat Pembayaran</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <a href="{{ route('payment.latest') }}">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center">
                            <div class="h4">Pembayaran Terbaru</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection