@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Registrasi Murid</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('student') }}">Murid</a></div>
            <div class="breadcrumb-item">Registrasi</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" id="nis" name="nis" class="form-control @error('nis') is-invalid @enderror">
                        @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="grade_id" class="form-label">Kelas</label>
                        <select name="grade_id" id="grade_id" class="form-control">
                            <option value="">Pilih kelas</option>
                            @foreach ($grades as $get)
                                <option value="{{ $get->id }}">{{ $get->grade }}</option>
                            @endforeach
                        </select>
                        @error('grade_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="major_id" class="form-label">Jurusan</label>
                        <select name="major_id" id="major_id" class="form-control">
                            <option value="">Pilih jurusan</option>
                            @foreach ($majors as $get)
                                <option value="{{ $get->id }}">{{ $get->major }}</option>
                            @endforeach
                        </select>
                        @error('major_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="spp_id" class="form-label">Spp</label>
                        <select name="spp_id" id="spp_id" class="form-control">
                            <option value="">Pilih spp</option>
                            @foreach ($spp as $get)
                                <option value="{{ $get->id }}">Tahun {{ $get->year }} nominal @currency($get->amount)</option>
                            @endforeach
                        </select>
                        @error('spp_id')
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