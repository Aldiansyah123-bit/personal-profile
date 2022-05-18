
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Personal') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('Personal') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Personal') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('Personal') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('Personal') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('Personal') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('Personal') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('Personal') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Personal') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.0.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      @foreach ($user as $data)
        <h1><a href="/">{{ $data->name }}</a></h1>
        <h2>{{ $data->keterangan }}</h2>
      @endforeach


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="/">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          {{-- <li><a class="nav-link" href="#portofolio">Portofolio</a></li> --}}
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <!-- ======= About Me ======= -->
    <div class="container about-me">
      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          @foreach ($user as $data)
            <img src="/storage/profile-photos/{{basename($data->profile_photo_path)}}" class="img-fluid" alt="">
          @endforeach
        </div>
        <div class="pt-4 col-lg-8 pt-lg-0 content" data-aos="fade-left">
            @foreach ($about as $data)
              <h3>{{ $data->judul_keahlian}}</h3>
              <p class="font-italic">
                {{ $data->keterangan}}
              </p>
            @endforeach
          <div class="row">
            @foreach ($user as $data)
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ Date::parse($data->lahir)->format('j F Y') }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $data->umur}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $data->kota}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $data->website}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+{{ $data->contact}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>E-Mail:</strong> <span>{{ $data->email}}</span></li>
                </ul>
              </div>
            @endforeach
          </div>
           <!-- ======= Skills  ======= -->
          <div class="container skills">
            <div class="section-title">
              <h2>Skills</h2>
            </div>
            @foreach ($about as $data)
            <div class="row skills-content">
              <div class="col-lg-12">
                <div class="progress">
                    <span class="skill">{{ $data->nama_skill }} <i class="val">{{ $data->persen_skill }} %</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{ $data->persen_skill }}" aria-valuemin="0" aria-valuemax="{{ $data->persen_skill }}"></div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- End Skills -->
        </div>
      </div>

    </div><!-- End About Me -->
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>
      <div class="row">
        <div class="col-lg-6">

          <h3 class="resume-title">Education</h3>
          @foreach ($pendidikan as $data)
            <div class="resume-item">
              <h4>{{ $data->nama_pendidikan }}</h4>
              <h5>{{ $data->thn_pendidikan }}</h5>
              <p><em>{{ $data->tempat_pendidikan }}</em></p>
              <p>{{ $data->ket_pendidikan }}</p>
            </div>
          @endforeach

          <h3 class="resume-title">Certificate</h3>
          @foreach ($sertifikat as $data)
          <div class="resume-item">
            <h4>{{ $data->nama_sertifikat }}</h4>
            <h5>{{ $data->thn_sertifikat }}</h5>
          </div>
          @endforeach

        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Work Experience</h3>
          @foreach ($pekerjaan as $data)
          <div class="resume-item">
            <h4>{{ $data->nama_pekerjaan }}</h4>
            <h5>{{ $data->thn_pekerjaan }}</h5>
            <p><em>{{ $data->tempat_pekerjaan }}</em></p>
            <p>{{ $data->ket_pekerjaan }}</p>
          </div>
          @endforeach

          <h3 class="resume-title">Organizational Experience</h3>
          @foreach ($organisasi as $data)
          <div class="resume-item">
            <h4>{{ $data->nama_organisasi }}</h4>
            <h5>{{ $data->thn_jabatan }}</h5>
            <p><em>{{ $data->ket_organisasi }}</em></p>
          </div>
          @endforeach

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      @foreach ($user as $data)
        <div class="mt-2 row">

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>My Address</h3>
              <p>{{ $data->alamat }}</p>
            </div>
          </div>

          <div class="mt-4 col-md-6 mt-md-0 d-flex align-items-stretch">
            <div class="info-box">
              <i class="bx bx-share-alt"></i>
              <h3>Social Profiles</h3>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="mt-4 col-md-6 d-flex align-items-stretch">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Me</h3>
              <p>{{ $data->email }}</p>
            </div>
          </div>
          <div class="mt-4 col-md-6 d-flex align-items-stretch">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Me</h3>
              <p>+{{ $data->contact }}</p>
            </div>
          </div>
        </div>
      @endforeach

      <form action="pertanyaan/insert" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mt-3 col-md-6 form-group mt-md-0">
            <input type="email" class="form-control" name="email"  placeholder="Your Email" required>
          </div>
        </div>
        <div class="mt-3 form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>
        <div class="mt-3 form-group">
          <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          @if (session('status'))
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> {{session('status')}}</h5>
          </div>
          @endif
        </div>
        <div class="text-center"><button type="submit" class="btn btn-sm btn-flat btn-success">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('Personal') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('Personal') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Personal') }}/assets/js/main.js"></script>

</body>

</html>
