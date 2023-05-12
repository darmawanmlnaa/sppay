@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Tambah Jurusan</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('major') }}">Kelas</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('major.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="major" class="form-label">Jurusan</label>
                        <input type="text" name="major" id="major" class="form-control @error('major') is-invalid @enderror">
                        @error('major')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection