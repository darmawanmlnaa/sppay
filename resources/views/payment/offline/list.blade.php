@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Buat Pembayaran</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('payment') }}">Menu</a></div>
            <div class="breadcrumb-item">List</div>
        </div>
    </div>
    <div class="section-body">
        {{-- Alerts session --}}
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>{{session('success')}}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (session()->has('alert'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <b>{{session('alert')}}</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="student-table">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>ID</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Profil</th>
                        </tr>
                    </thead>
                        @foreach ($students as $key => $get)
                            <tr>
                                <td>
                                    <div class="row d-fex justify-content-center">
                                        <a href="/payment/offline/pay/{{ $get->id }}" class="btn btn-icon btn-primary mx-1"><i class="far fa-edit"></i></a>
                                        <a href="/payment/offline/details/{{ $get->id }}" class="btn btn-icon btn-danger mx-1"><i class="fas fa-list-ul"></i></a>
                                    </div>
                                </td>
                                <td>{{ $get->id }}</td>
                                <td>{{ $get->nis }}</td>
                                <td>{{ $get->name }}</td>
                                <td>{{ $get->grade->grade }}</td>
                                <td>{{ $get->major->major }}</td>
                                @if ($get->thumb == null)
                                    <td><img src="{{ asset('assets/vendor/stisla/dist/assets/img/avatar/avatar-1.png') }}" alt="default" height="50"></td>
                                @else
                                <td>
                                    <img src="{{ asset('storage/'.$get->thumb) }}" alt="profile" height="50">
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#student-table').DataTable({
                processing: true,
                // serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });
    </script>
@endpush