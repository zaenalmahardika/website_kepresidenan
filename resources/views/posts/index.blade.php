<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Presiden RI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" id="presidenri" href="{{route('posts.index')}}">Presiden Republik Indonesia</a>
      </li>
    </ul>

    {{-- Right navbar links --}}
    {{-- <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <form class="d-flex" role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </form>    
      </li>
    </ul> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Indonesian_Presidential_Seal_gold.svg/881px-Indonesian_Presidential_Seal_gold.svg.png" alt="#" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Presiden RI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ route('posts.create') }}" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Create
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- banner -->
<div class="container-fluid banner" style="background-image: url('{{asset('storage/img/istana.jpg')}}')">
  <div class="row">
    <div class="banner-text col-md-6 col-sm-12">
      <h1 data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1000">
      BIRO PERS, MEDIA, DAN INFORMASI SEKRETARIAT PRESIDEN REPUBLIK INDONESIA
      </h1>
      <div class="banner-button">
        <button type="button" data-aos="fade-right"><span><a href="#biografi">BIOGRAFI</a></span></button>
        <button type="button" data-aos="fade-left"><span>MORE ABOUT US</span></button>
      </div>
    </div>
    <div class="banner-sosmed col-md-6 col-sm-12">
      <i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i>
      <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i>
      <i class="fa-brands fa-facebook-f fa-xl" style="color: #ffffff;"></i>
      <i class="fa-brands fa-whatsapp fa-xl" style="color: #ffffff;"></i>
      <i class="fa-brands fa-tiktok fa-xl" style="color: #ffffff;"></i>
      <i class="fa-brands fa-youtube fa-xl" style="color: #ffffff;"></i>
    </div>
  </div>
</div>
<!-- about -->
<div class="container-fluid about" >
  <div class="row row-title">
      <div class="about-title">
          <h1 data-aos="fade-down" data-aos-offset="250" data-aos-duration="1000">Sekilas Tentang</h1>
          <h1 data-aos="fade-down" data-aos-offset="250" data-aos-duration="1000">Presiden Republik Indonesia</h1>
      </div>
  </div>
  <div class="row row-content">
    <div class="about-text col-md-6 col-sm-12" style="background-image: url('{{asset('storage/img/bg-about-text.jpg')}}')">
      <p>
        Di Indonesia, Presiden merupakan kepala negara dan kepala pemerintahan. Sebagai kepala negara, Presiden bertugas 
        melakukan perjanjian internasional, mengeluarkan surat izin terbang, mengeluarkan paspor, dan melakukan tindakan
        lain yang berkaitan dengan hubungan luar negeri. Sebagai kepala pemerintahan, Presiden bertanggung jawab atas
        pemerintahan dan pembangunan negara.
      </p>
    </div>
    <div class="about-image col-md-6 col-sm-12">
      <img src="{{asset('storage/img/about.jpg')}}" alt="" data-aos="fade-left" data-aos-duration="500" style="width: 100%">
    </div>
  </div>
</div>
<!--cards-->
<div class="cards container-fluid">
  <div class="row row-title">
    <div class="cards-title col-md-8 col-sm-12">
      <h1>Presiden RI</h1>
      <p>
        Sampai dengan saat ini, Republik Indonesia memiliki tujuh orang Presiden dan sembilan orang Wakil Presiden.
         Ketujuh Presiden tersebut adalah Sukarno (1945-1967), Soeharto (1967-1998), Bacharuddin Jusuf Habibie (1998-1999), 
         Abdurrahman Wahid (1999-2001), Megawati Soekarnoputri (2001-2004), Susilo Bambang Yudhoyono (2004-2009; 2009-2014), 
         dan Joko Widodo (2014-2019).
      </p>
    </div>
  </div>
  <div class="cards-content">
    <div class="row">
      @foreach ($posts as $post)
      <div class="card card-soekarno col-md-6 col-sm-12">
        <div class="top-card">
          <div class="card-image">
            <img src="{{ asset('/storage/posts/'.$post->foto) }}" class="profile" alt="">
          </div>
          <div class="card-text">
            <table>
              <thead>
                <tr>
                  <td colspan="3">{{$post->namatokoh}}</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>nama</td>
                  <td>:</td>
                  <td>{{$post->namatokoh}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="bottom-card">
          <div class="card-text">
            <p>
              {{substr($post->orientasi, 0, 250)}}
            </p>
          </div>
          <div class="btn-card">
            <a href="{{ route('posts.show', $post->id) }}">
              <button type="button">Baca Selengkapnya</button>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- president-job -->
<div class="container-fluid jobs">
  <div class="row row-title">
    <div class="job-title col-6">
      <h1>TUGAS DAN WEWENANG PRESIDEN SEBAGAI KEPALA NEGARA</h1>
      <p>
        Presiden Indonesia sebagai kepala Pemerintahan memiliki tugas dan wewenang yang diatur dalam Undang-Undang Dasar (UUD) 1945.
      </p>
    </div>
  </div>
  <div class="jobs-kepala-negara">
    <div class="row">
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/army.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden memegang kekuasaan tertinggi atas Angkatan Darat, Angkatan Laut dan Angkatan Udara (Pasal 10).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/flag.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden dengan persetujuan DPR menyatakan perang, membuat perdamaian dan perjanjian dengan negara lain (Pasal 11 ayat 1).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/disasters.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden menyatakan keadaan bahaya. Syarat-syarat dan akibatnya keadaan bahaya ditetapkan dengan undang-undang (Pasal 12).
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('storage/img/handshake.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden mengangkat duta dan konsul (pasal 13 ayat 1).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/jail.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden memberikan grasi dan rehabilitasi dengan memperhatikan pertimbangan MA (Pasal 14 ayat 1).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/prisoner.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden memberikan amnesti dan abolisi dengan memperhatikan pertimbangan DPR (Pasal 14 ayat 2).
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/rank.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden memberikan gelar, tanda jasa, dan lain-lain tanda kehormatan yang diatur dengan Undang-Undang (Pasal 15).
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-title">
    <div class="job-title col-6">
      <h1>TUGAS DAN WEWENANG PRESIDEN SEBAGAI KEPALA PEMERINTAHAN</h1>
      <p>
        Presiden Indonesia sebagai kepala negara memiliki tugas dan wewenang yang diatur dalam Undang-Undang Dasar (UUD) 1945.
      </p>
    </div>
  </div>
  <div class="jobs-kepala-pemerintahan">
    <div class="row">
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/contract.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden berhak mengajukan rancangan undang-undang kepada Dewan Perwakilan Rakyat (Pasal 5 ayat 1).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('storage/img/court.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden menetapkan peraturan pemerintah untuk menjalankan undang-undang sebagaimana mestinya (pasal 5 ayat 2).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/law.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden membentuk suatu dewan pertimbangan yang bertugas memberikan nasihat dan pertimbangan kepada Presiden, yang selanjutnya diatur dalam Undang-Undang (Pasal 16).
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('storage/img/tie.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden mengangkat dan memberhentikan Menteri-menteri (pasal 17 ayat 2).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/uud.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Presiden mengesahkan rancangan undangundang yang telah disetujui bersama untuk menjadi undang-undang (pasal 20 ayat 4)
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 job">
        <div class="card">
          <div class="card-image">
            <img src="{{asset('/storage/img/rule.svg')}}" alt="">
          </div>
          <div class="card-text">
            <p>
              Dalam hal ihwal kegentingan yang memaksa, Presiden berhak menetapkan peraturan pemerintah sebagai pengganti undangundang (Pasal 22 ayat 1).
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- banner-quotes soekarno-->
<div class="container-fluid banner-quote-soekarno" data-aos="zoom-in">
  <div class="row row-banner">
    <div class="banner-image col-md-6 col-sm-12">
      <img src="{{asset('/storage/img/article/profile-article-Soekarno.jpg')}}" alt="">
    </div>
    <div class="banner-text col-md-6 col-sm-12">
      <div class="banner-quote">
        <p>Bangsa yang besar adalah bangsa yang mengenal sejarah. Jangan sekali-kali melupakan sejarah.</p>
      </div>
      <div class="banner-signature">
        <img src="{{asset('storage/img/article/signature/Sukarno_Signature.svg')}}" alt="">
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<div class="footer container-fluid mt-5 pt-3">
  <div class="row row-input mb-5">
    <div class="footer-input col-md-5">
      <div class="footer-image">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Indonesian_Presidential_Seal_gold.svg/881px-Indonesian_Presidential_Seal_gold.svg.png" alt="">
      </div>
      <hr>
      <p>Dikelola oleh:</p>
      <h3>Biro Pers, Media, dan Informasi Sekretariat Presiden</h3>
      <p> Jl. Veteran No. 16 Jakarta Pusat, Kode Pos 10110</p>
    </div>
    <div class="footer-link col-md-5">
      <div class="row">
        <div class="link col-md-6 col-sm-3">
          <h5>Pers</h5>
          <a href=""><p>Siaran Pers</p></a>
          <a href=""><p>Foto Presiden</p></a>
          <a href=""><p>Video Presiden</p></a>
          <a href=""><p>Transkrip</p></a>
        </div>
        <div class="link col-md-6 col-sm-3">
          <h5>Pemerintahan</h5>
          <a href=""><p>Kabinet Indonesia Maju</p></a>
          <a href=""><p>Pencapaian Kerja</p></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row row-address">
    <div class="footer-address">
      <p>
        © Biro Pers, Media dan Informasi Sekretariat Presiden Kementerian Sekretariat Negara 
      </p>
    </div>
  </div>
</div>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://kit.fontawesome.com/030b91e7ad.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(session()->has('success'))
  
    toastr.success('{{ session('success') }}', 'Berhasil!'); 
  @elseif(session()->has('error'))
    toastr.error('{{ session('error') }}', 'Gagal!'); 
    
  @endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/18b31bce85.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
</html>
