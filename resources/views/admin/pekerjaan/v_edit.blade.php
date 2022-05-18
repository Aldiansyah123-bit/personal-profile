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
        <form action="/pekerjaan/update/{{ $pekerjaan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Pekerjaan</label>
                                <input name="nama_pekerjaan" value="{{ $pekerjaan->nama_pekerjaan }}" class="form-control" placeholder="Nama Pendidikan">
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
                                <input name="thn_pekerjaan" value="{{ $pekerjaan->thn_pekerjaan }}" class="form-control" placeholder="Tahun Pendidikan">
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
                                <input name="tempat_pekerjaan" value="{{ $pekerjaan->tempat_pekerjaan }}" class="form-control" placeholder="Tempat Pendidikan">
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
                            <textarea name="ket_pekerjaan" rows="7" class="form-control" placeholder="Keterangan Pendidikan">{{ $pekerjaan->ket_pekerjaan }}</textarea>
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
                <a href="/pekerjaan" class="float-right btn btn-warning">Cancel</a>
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