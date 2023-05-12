@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kelas</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Kelas</div>
            </div>
        </div>

        <div class="section-body">
            {{-- Alerts session --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session()->has('alert'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('alert')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('grade.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="grade-table">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                                @foreach ($grades as $key => $get)
                                    <tr>
                                        <td>
                                            <div class="row d-fex justify-content-center">
                                                <a href="grade/edit/{{ $get->id }}" class="btn btn-icon btn-primary mx-2"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteModal{{$get->id}}"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $get->grade }}</td>
                                    </tr>
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
            $('#grade-table').DataTable({
                processing: true,
                // serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });
    </script>
@endpush