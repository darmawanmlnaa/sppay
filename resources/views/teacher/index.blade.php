@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Petugas</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Petugas</div>
        </div>
    </div>

    <div class="section-body">
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
        <div class="card">
            <div class="card-header">
                <a href="{{ route('teacher.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="teacher-table">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Profil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $key => $get)
                                <tr>
                                    <td>
                                        <div class="row d-fex justify-content-center">
                                            <a href="teacher/edit/{{ $get->id }}" class="btn btn-icon btn-primary mx-2"><i class="far fa-edit"></i></a>
                                            {{-- stisla component --}}
                                            {{-- <button class="btn btn-icon btn-danger" data-confirm="Konfirmasi hapus petugas|Apakah anda yakin ingin menghapus user {{ $get->name }} ?" data-confirm-yes="acceptDelete({{ $get->id }})"><i class="fas fa-trash"></i></button> --}}
                                            {{-- Manual modal --}}
                                            <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteModal{{$get->id}}"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
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
                                </tr>

                                <!-- Modal -->
                                {{-- Manual modal --}}
                                <div class="modal fade" id="deleteModal{{$get->id}}" data-backdrop="false" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi hapus petugas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin menghapus user <b>{{ $get->name }}</b> ?
                                        </div>
                                        <div class="modal-footer">
                                        <form action="teacher/destroy/{{ $get->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#teacher-table').DataTable({
                processing: true,
                // serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });

        // stisla modal
        // function acceptDelete() {
        //     $('#delete').submit()
        // }
    </script>
@endpush

@endsection