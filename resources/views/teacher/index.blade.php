@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Petugas</h1>
    </div>

    <div class="section-body">
        @if ($message = Session::has('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teacher.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="teacher-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Profil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $get)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $get->id }}</td>
                                <td>{{ $get->name }}</td>
                                <td>{{ $get->email }}</td>
                                @if ($get->thumb == null)
                                <td><img src="{{ asset('assets/vendor/stisla/dist/assets/img/avatar/avatar-1.png') }}" alt="default" height="50"></td>
                                @else
                                <td>
                                    <img src="{{ asset('storage/'.$get->thumb) }}" alt="profile" height="50">
                                </td>
                                @endif
                                <td>
                                    <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#teacher-table').DataTable( {
                processing: true,
                // serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            } );
        } );
    </script>
@endpush

@endsection