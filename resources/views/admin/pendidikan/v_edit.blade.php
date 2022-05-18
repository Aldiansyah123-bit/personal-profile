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
        <form action="/pendidikan/update/{{ $pendidikan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Pendidikan</label>
                                <input name="nama_pendidikan" value="{{ $pendidikan->nama_pendidikan }}" class="form-control" placeholder="Nama Pendidikan">
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
                                <input name="thn_pendidikan" value="{{ $pendidikan->thn_pendidikan }}" class="form-control" placeholder="Tahun Pendidikan">
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
                                <input name="tempat_pendidikan" value="{{ $pendidikan->tempat_pendidikan }}" class="form-control" placeholder="Tempat Pendidikan">
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
                            <textarea name="ket_pendidikan" rows="7" class="form-control" placeholder="Keterangan Pendidikan">{{ $pendidikan->ket_pendidikan }}</textarea>
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


<!-- bootstrap color picker -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script>
   //color picker with addon
   $('.my-colorpicker2').colorpicker()
   $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
</script>
@endsection