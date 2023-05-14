@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Ubah Data Murid</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('student') }}">Murid</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" id="nis" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $student->nis }}">
                        @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $student->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $student->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="grade_id" class="form-label">Kelas</label>
                        <select name="grade_id" id="grade_id" class="form-control">
                            @foreach ($grades as $get)
                                @if (old('id', $get->id) == $student->grade_id)
                                    <option value="{{$get->id}}" selected>{{ $get->grade }}</option>
                                @else
                                    <option value="{{ $get->id }}">{{ $get->grade }}</option>
                                @endif
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
                            @foreach ($majors as $get)
                                @if (old('id', $get->id) == $student->major_id)
                                    <option value="{{$get->id}}" selected>{{ $get->major }}</option>
                                @else
                                    <option value="{{ $get->id }}">{{ $get->major }}</option>
                                @endif
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
                            @foreach ($spp as $get)
                                @if (old('id', $get->id) == $student->spp_id)
                                    <option value="{{$get->id}}" selected>Tahun {{ $get->year }} nominal @currency($get->amount)</option>
                                @else
                                    <option value="{{ $get->id }}">Tahun {{ $get->year }} nominal @currency($get->amount)</option>
                                @endif
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
                        @if ($student->thumb)
                            <img src="{{ asset('storage/'.$student->thumb) }}" class="img-priview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-priview img-fluid mb-3 col-sm-5">
                        @endif
                        <input type="file" id="thumb" name="thumb" class="form-control" @error('thumb') is-invalid @enderror onchange="priviewImage()">
                        @error('thumb')
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