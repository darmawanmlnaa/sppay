@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Bayar Tagihan</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('payment.offline') }}">List</a></div>
            <div class="breadcrumb-item">Bayar</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Murid</h4>
            </div>
            <div class="card-body">
                <fieldset disabled="disabled">
                    <div class="form-group">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" name="nis" id="nis" value="{{ $student->nis }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="grade_id" class="form-label">Kelas</label>
                        <input type="text" name="grade_id" id="grade_id" value="{{ $student->grade->grade }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="major_id" class="form-label">Jurusan</label>
                        <input type="text" name="major_id" id="major_id" value="{{ $student->major->major }}" class="form-control">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Tagihan</h4>
            </div>
            <div class="card-body">
                <fieldset disabled="disabled">
                    <div class="form-group">
                        <label for="spp" class="form-label">SPP</label>
                        <input type="text" class="form-control" value="@currency($student->spp->amount)">
                    </div>
                </fieldset>
                <form action="{{ route('payment.offline.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="student_id" id="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="payment_type" id="payment_type" value="offline">
                    <input type="hidden" name="amount" id="amount" value="{{ $student->spp->amount }}">
                    <input type="hidden" name="payment_status" id="payment_status" value="2">
                    <button type="submit" class="btn btn-primary w-100">Bayar</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection