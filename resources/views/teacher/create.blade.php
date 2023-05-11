@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Registrasi Petugas</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input type="hidden" id="role" name="role" value="teacher">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">Profil</label>
                        <img class="img-priview img-fluid mb-3 col-sm-5">
                        <input type="file" id="thumb" name="thumb" class="form-control" @error('thumb') is-invalid @enderror onchange="priviewImage()">
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Kata sandi</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi kata sandi</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row mb-4">
                        <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="seepass" class="custom-control-input" id="seepass" onclick="seePassword()">
                                <label class="custom-control-label" for="seepass">Lihat kata sandi</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrasi</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection