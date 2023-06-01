@extends('layouts.theme.backend.master')
@section('title')
    Data Tanah Terkini
@endsection

@section('content')
    <div class="row">
        <div class="col-lg">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">@yield('title')</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Blok</th>
                                    <th>Pemilik Terbaru</th>
                                    <th>Pemilik Sebelumnya</th>
                                    <th>Luas Tanah</th>
                                    <th>Luas Bangunan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nomor }}</td>
                                        <td>
                                            <strong>{{ $item->nama_terbaru }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $item->nama_sebelumnya ?? '-' }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $item->luas_tanah }} m<sup>2</sup> </strong>
                                        </td>
                                        <td>
                                            <strong>{{ $item->luas_tanah }} m<sup>2</sup> </strong>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.tanah.edit', $item->id) }}"
                                                class="btn btn-icon btn-outline-primary">
                                                <span class="tf-icons bx bx-edit"></span>
                                            </a>
                                            <button type="button" class="btn btn-icon btn-outline-danger">
                                                <span class="tf-icons bx bx-trash"></span>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Data Not Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary justify-content-center">
                                    {!! $data->links() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection
