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
        <form action="/pertanyaan/update/{{ $pertanyaan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama</label>
                                <input name="nama" value="{{ $pertanyaan->name}}" class="form-control" placeholder="Nama">
                                <div class="text-danger">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>E-Mail</label>
                                <input name="email" value="{{ $pertanyaan->email}}" class="form-control" placeholder="E-Mail">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Subject</label>
                                <input name="subject" value="{{ $pertanyaan->subject}}" class="form-control" placeholder="Subject">
                                <div class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Pertanyaan</label>
                            <textarea name="pesan" rows="7" class="form-control" placeholder="Pertanyaan">{{ $pertanyaan->pesan}}</textarea>
                            <div class="text-danger">
                                @error('pesan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <a href="/pertanyaan" class="float-right btn btn-warning">Back</a>
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