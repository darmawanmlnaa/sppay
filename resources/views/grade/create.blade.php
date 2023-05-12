@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Tambah Kelas</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('grade') }}">Kelas</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('grade.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="grade" class="form-label">Kelas</label>
                        <input type="text" name="grade" id="grade" class="form-control @error('grade') is-invalid @enderror">
                        @error('grade')
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