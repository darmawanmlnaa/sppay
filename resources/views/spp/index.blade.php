@extends('layouts.app')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Spp</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Spp</div>
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
                <a href="{{ route('spp.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="spp-table">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>No</th>
                                <th>ID</th>
                                <th>Tahun</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                            @foreach ($spp as $key => $get)
                                <tr>
                                    <td>
                                        <div class="row d-fex justify-content-center">
                                            <a href="spp/edit/{{ $get->id }}" class="btn btn-icon btn-primary mx-2"><i class="far fa-edit"></i></a>
                                            <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteModal{{$get->id}}"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $get->id }}</td>
                                    <td>{{ $get->year }}</td>
                                    <td>@currency($get->amount)</td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{$get->id}}" data-backdrop="false" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi hapus spp</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            Apa anda yakin ingin menghapus spp tahun <b>{{ $get->year }}</b> nominal <b>@currency($get->amount)</b> ?
                                        </div>
                                        <div class="modal-footer">
                                        <form action="spp/destroy/{{ $get->id }}" method="post">
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
            $('#spp-table').DataTable({
                processing: true,
                // serverSide: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });
    </script>
@endpush