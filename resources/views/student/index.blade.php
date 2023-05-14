@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Murid</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Murid</div>
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

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('student.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="student-table">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Spp</th>
                                    <th>Email</th>
                                    <th>Profil</th>
                                </tr>
                            </thead>
                                @foreach ($students as $key => $get)
                                    <tr>
                                        <td>
                                            <div class="row d-fex justify-content-center">
                                                <a href="student/edit/{{ $get->id }}" class="btn btn-icon btn-primary mx-1"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-icon btn-danger mx-1" data-toggle="modal" data-target="#deleteModal{{$get->id}}"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $get->id }}</td>
                                        <td>{{ $get->nis }}</td>
                                        <td>{{ $get->name }}</td>
                                        <td>{{ $get->grade_id }}</td>
                                        <td>{{ $get->major_id }}</td>
                                        <td>{{ $get->spp_id }}</td>
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
                                    <div class="modal fade" id="deleteModal{{$get->id}}" data-backdrop="false" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi hapus murid</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                Apa anda yakin ingin menghapus <b>{{ $get->name }}</b> ?
                                            </div>
                                            <div class="modal-footer">
                                            <form action="student/destroy/{{ $get->id }}" method="post">
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
                            <tbody>
                            </tbody>
                        </table>
                    </div>
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