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
        <form action="/pendidikan/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Pendidikan</label>
                                <input name="nama_pendidikan" class="form-control" placeholder="Nama Pendidikan">
                                <div class="text-danger">
                                    @error('nama_pendidikan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tahun Lama Pendidikan</label>
                                <input name="thn_pendidikan" class="form-control" placeholder="Tahun Pendidikan">
                                <div class="text-danger">
                                    @error('thn_pendidikan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tempat Pendidikan</label>
                                <input name="tempat_pendidikan" class="form-control" placeholder="Tempat Pendidikan">
                                <div class="text-danger">
                                    @error('tempat_pendidikan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Keterangan Pendidikan</label>
                            <textarea name="ket_pendidikan" rows="7" class="form-control" placeholder="Keterangan Pendidikan"></textarea>
                            <div class="text-danger">
                                @error('ket_pendidikan')
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