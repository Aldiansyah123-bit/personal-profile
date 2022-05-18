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
        <form action="/pekerjaan/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Pekerjaan</label>
                                <input name="nama_pekerjaan" class="form-control" placeholder="Nama Pekerjaan">
                                <div class="text-danger">
                                    @error('nama_pekerjaan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tahun Pekerjaan</label>
                                <input name="thn_pekerjaan" class="form-control" placeholder="Tahun Pekerjaan">
                                <div class="text-danger">
                                    @error('thn_pekerjaan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tempat Pekerjaan</label>
                                <input name="tempat_pekerjaan" class="form-control" placeholder="Tempat Pekerjaan">
                                <div class="text-danger">
                                    @error('tempat_pekerjaan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Keterangan Pekerjaan</label>
                            <textarea name="ket_pekerjaan" rows="7" class="form-control" placeholder="Keterangan Pekerjaan"></textarea>
                            <div class="text-danger">
                                @error('ket_pekerjaan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                                        
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Simpan</button>
                <a href="/pendidikan" class="float-right btn btn-warning">Cancel</a>
            </div>            
        </form>
    </div>
</div>



@endsection