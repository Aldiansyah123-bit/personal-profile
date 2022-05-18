@extends('layouts.backend')

@section('judul1')
    {{$title ?? ''}}
@endsection

@section('judul2')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
        <div class="col-sm-6">
            <h1 class="m-0"> {{$title ?? ''}}</h1>
        </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data {{ $title }}</h3>
        </div>
        <form action="/sertifikat/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Sertifikat</label>
                                <input name="nama_sertifikat" class="form-control" placeholder="Nama Sertifikat">
                                <div class="text-danger">
                                    @error('nama_sertifikat')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tahun Sertifikfat</label>
                                <input name="thn_sertifikat" class="form-control" placeholder="Tahun Sertifikfat">
                                <div class="text-danger">
                                    @error('thn_sertifikat')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>
                                        
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Simpan</button>
                <a href="/sertifikat" class="float-right btn btn-warning">Cancel</a>
            </div>            
        </form>
    </div>
</div>



@endsection