@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Riwayat Pembayaran Terbaru</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('payment') }}">Menu</a></div>
            <div class="breadcrumb-item">Riwayat</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                @foreach ($payments as $get)
                <li class="media">
                    @if ($get->student->thumb == null)
                        <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/vendor/stisla/dist/assets/img/avatar/avatar-1.png') }}" alt="avatar">
                    @else
                        <img class="mr-3 rounded-circle" width="50" src="{{ asset('storage/'.$get->student->thumb) }}" alt="avatar">
                    @endif
                    <div class="media-body">
                        <div class="badge badge-pill badge-success mb-1 float-right">Lunas</div>
                        <h6 class="media-title"><a href="#">{{ $get->student->name }}</a></h6>
                        <div class="text-small text-muted">@currency($get->amount) <div class="bullet"></div> <span class="text-primary">Oleh {{ $get->user->name }}</span></div>
                    </div>
                </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection