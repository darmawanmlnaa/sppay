@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Tambah Spp</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('spp') }}">Spp</a></div>
            <div class="breadcrumb-item">Tambah</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('spp.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="year" class="form-label">Tahun</label>
                        <input type="number" name="year" id="year" class="form-control @error('year') is-invalid @enderror">
                        @error('year')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount" class="form-label">Nominal</label>
                        <input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror">
                        @error('amount')
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