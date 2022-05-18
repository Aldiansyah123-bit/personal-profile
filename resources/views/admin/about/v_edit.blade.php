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
        <form action="/about/update/{{ $about->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Keahlian</label>
                                <input name="nama_keahlian" value="{{ $about->judul_keahlian}}" class="form-control" placeholder="Nama Keahlian">
                                <div class="text-danger">
                                    @error('nama_keahlian')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="5">{{ $about->keterangan}}</textarea>
                                <div class="text-danger">
                                    @error('keterangan')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama Skill</label>
                                <input name="nama_skill" value="{{ $about->nama_skill}}" class="form-control" placeholder="Keterangan">
                                <div class="text-danger">
                                    @error('nama_skill')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Persen Skill</label>
                                <input name="persen_skill" value="{{ $about->persen_skill}}" class="form-control" placeholder="Keterangan">
                                <div class="text-danger">
                                    @error('persen_skill')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Simpan</button>
                <a href="/about" class="float-right btn btn-warning">Cancel</a>
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
