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
        <form action="/organisasi/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Jabatan</label>
                                <input name="nama_organisasi" class="form-control" placeholder="Nama Jabatan">
                                <div class="text-danger">
                                    @error('nama_organisasi')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tahun Jabat</label>
                                <input name="thn_jabatan" class="form-control" placeholder="Tahun Organisasi">
                                <div class="text-danger">
                                    @error('thn_jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Keterangan Organisasi</label>
                            <textarea name="ket_organisasi" rows="7" class="form-control" placeholder="Keterangan Organisasi"></textarea>
                            <div class="text-danger">
                                @error('ket_organisasi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                                        
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Simpan</button>
                <a href="/organisasi" class="float-right btn btn-warning">Cancel</a>
            </div>            
        </form>
    </div>
</div>



@endsection