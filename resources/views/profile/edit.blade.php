@extends('layouts.app')
@section('content')

    <section class="section">
        <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
        </div>

        <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">                     
                <img alt="image" src="{{ asset('assets/vendor/stisla/dist/assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Tagihan</div>
                    <div class="profile-widget-item-value">Rp. 2.000.000</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                @include('profile.partials.update-profile-information-form')
                @include('profile.partials.update-password-form')
            </div>
        </div>
        </div>
    </section>

@endsection