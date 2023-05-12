@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Ubah Jurusan</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('major') }}">Kelas</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="major" class="form-label">Jurusan</label>
                        <input type="text" name="major" id="major" class="form-control @error('major') is-invalid @enderror" value="{{ $major->major }}">
                        @error('major')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection