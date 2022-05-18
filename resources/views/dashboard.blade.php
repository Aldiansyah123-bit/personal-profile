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
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $about }}</h3>

            <p>About</p>
        </div>
        <div class="icon">
            <i class="fas fa-cloud"></i>
        </div>
      <a href="/about" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3>{{ $pendidikan }}</h3>

            <p>Pendidikan</p>
        </div>
        <div class="icon">
            <i class="fa fa-graduation-cap"></i>
        </div>
      <a href="/pendidikan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{ $pekerjaan }}</h3>

            <p>Pekerjaan</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
      <a href="/pekerjaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $organisasi }}</h3>

            <p>Organisasi</p>
        </div>
        <div class="icon">
            <i class="fas fa-hourglass-half"></i>
        </div>
      <a href="/organisasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{ $sertifikat }}</h3>

            <p>Sertifikat</p>
        </div>
        <div class="icon">
            <i class="fas fa-tags"></i>
        </div>
      <a href="/sertifikat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->

<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-purple">
        <div class="inner">
            <h3>{{ $pertanyaan }}</h3>

            <p>Pertanyaan</p>
        </div>
        <div class="icon">
            <i class="fas fa-info"></i>
        </div>
      <a href="/pertanyaan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
  <!-- ./col -->
@endsection
