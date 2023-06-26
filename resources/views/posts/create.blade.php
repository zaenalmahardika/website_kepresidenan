<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Presiden RI</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Data</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="card border-0 shadow-sm rounded">
        <div class="container">
          <div class="row">
            <div class="card-body">
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
              
              @csrf
                <div class="form-group">
                  <label class="font-weight-bold">Nama Tokoh</label>
                  <input type="text" class="form-control @error('namatokoh') is-invalid @enderror" name="namatokoh"
                  value="{{ old('namatokoh')}}" placeholder="Masukkan Nama Tokoh">

              @error('namatokoh')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
              @enderror
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Foto</label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">

              @error('foto')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
              @enderror
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Orientasi</label>
                  <textarea class="form-control @error('orientasi') is-invalid @enderror" name="orientasi" rows="5"
                   placeholder="Masukkan Orientasi">{{ old('content') }}</textarea>

              @error('orientasi')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
              @enderror
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Peristiwa Penting</label>
                  <textarea class="form-control @error('peristiwapenting') is-invalid @enderror" name="peristiwapenting" rows="5"
                   placeholder="Masukkan Peristiwa Penting">{{ old('peristiwapenting') }}</textarea>

              @error('peristiwapenting')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
              @enderror
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Riorientasi</label>
                  <textarea class="form-control @error('riorientasi') is-invalid @enderror" name="riorientasi" rows="5"
                  placeholder="Masukkan Riorientasi">{{ old('riorientasi') }}</textarea>

              @error('riorientasi')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
              @enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm">Reset</button>
              </form>
            </div>
          </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/18b31bce85.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
