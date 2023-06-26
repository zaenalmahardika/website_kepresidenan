<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Presiden RI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" id="presidenri" href="{{route('posts.index')}}" >Presiden Republik Indonesia</a>
      </li>
    </ul>
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
    <div class="container-fluid bio" id="jokowi_bio">
      <div class="row row-title">
        <div class="bio-title col-12">
          <h1>{{$post->namatokoh}}</h1>
        </div>
      </div>
      <div class="row row-content">
        <div class="row card">
          <div class="card-image col-md-3 col-sm-12">
            <img src="{{asset('storage/posts/'.$post->foto)}}" class="profile" alt="">
          </div>
          <div class="card-text col-md-9 col-sm-12">
            <table>
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>{{$post->namatokoh}}</td>
                </tr>
                <tr>
                  <td>Orientasi</td>
                  <td>:</td>
                  <td>
                    <p>
                     {{$post->orientasi}} 
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>Peristiwa penting</td>
                  <td>:</td>
                  <td>
                    <p>
                      {{$post->peristiwapenting}}
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>Reorientasi</td>
                  <td> :</td>
                  <td>
                    <p>
                      {{$post->riorientasi}}
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
              @csrf
              <a href="{{ route('posts.index')}}" class="btn btn-sm btn-primary mr-5 mb-4">Kembali</a>
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary mr-4 mb-4">Ubah</a>
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger mb-4">Hapus</button>
            </form>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

    <script src="https://kit.fontawesome.com/030b91e7ad.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/18b31bce85.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
    </body>
</html>
