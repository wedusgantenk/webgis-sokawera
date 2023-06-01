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
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-4">
                            <div class="demo-inline-spacing">
                                <!-- Basic Pagination -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item first">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon bx bx-chevrons-left"></i></a>
                                        </li>
                                        <li class="page-item prev">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon bx bx-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                        </li>
                                        <li class="page-item next">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon bx bx-chevron-right"></i></a>
                                        </li>
                                        <li class="page-item last">
                                            <a class="page-link" href="javascript:void(0);"><i
                                                    class="tf-icon bx bx-chevrons-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--/ Basic Pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection
