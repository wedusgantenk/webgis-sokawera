@extends('layouts.theme.backend.master')
@section('title')
    Sejarah Desa
@endsection

@section('content')
    <div class="row">
        <div class="col-lg">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">@yield('title')</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.sejarah.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="title" value="sejarah" hidden>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Tulis Singkat Tentang Sejarah
                                        Desa</label>
                                    <textarea id="basic-default-message" rows="6" name="body"
                                        class="form-control @error('body') is-invalid @enderror" placeholder="Hi, Do you have a moment to talk Joe?">{!! $data->body ?? null !!}</textarea>
                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
