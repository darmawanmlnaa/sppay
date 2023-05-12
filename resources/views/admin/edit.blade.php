@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Ubah Data Admin</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin') }}">Admin</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $admin->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input type="hidden" id="role" name="role" value="teacher">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $admin->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Status</label>
                            <select name="role" id="role" class="form-control" required>
                                @if ($admin->role == 'teacher')
                                    <option value="teacher">Petugas</option>
                                    <option value="admin">Admin</option>
                                @else
                                    <option value="admin">Admin</option>
                                    <option value="teacher">Petugas</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Profil</label>
                        @if ($admin->thumb)
                            <img src="{{ asset('storage/'.$admin->thumb) }}" class="img-priview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-priview img-fluid mb-3 col-sm-5">
                        @endif
                        <input type="file" id="thumb" name="thumb" class="form-control @error('thumb') is-invalid @enderror" onchange="priviewImage()" value="{{ $admin->thumb }}">
                        <small>Dapat dibiarkan kosong</small>
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Ubah data</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection