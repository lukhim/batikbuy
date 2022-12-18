<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $judul ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
<!-- awal dari top nav -->
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="<?php echo base_url().'admin'; ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4">BatikBuy</span>
  </a>

  <ul class="nav nav-pills">
    <li class="nav-item"><a href="<?php echo base_url().'user'; ?>" class="nav-link">Profile saya</a></li>
    <li class="nav-item"><a href="<?php echo base_url().'autentifikasi/logout'; ?>" class="nav-link">Sign Out</a></li>
  </ul>
</header>

<!-- awal dari sidebar  -->
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url().'admin'; ?>">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'produk'; ?>">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'user'; ?>">
              <span data-feather="users" class="align-text-bottom"></span>
              User
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li> -->
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <!-- Begin Page Content -->
<div class="container-fluid">

<!-- row ux-->
<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2 bg-primary">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
            <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
          </div>
          <div class="col-auto">
            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2 bg-warning">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Buku Terdaftar</div>
            <div class="h1 mb-0 font-weight-bold text-white">
              <?php
              $where = ['stok != 0'];
              $totalstok = $this->ModelBuku->total('stok', $where);
              echo $totalstok;
              ?>
            </div>
          </div>
          <div class="col-auto">
            <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2 bg-danger">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dipinjam</div>
            <div class="h1 mb-0 font-weight-bold text-white">
              <?php
              $where = ['dipinjam != 0'];
              $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
              echo $totaldipinjam;
              ?>
            </div>
          </div>
          <div class="col-auto">
            <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-success"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2 bg-success">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dibooking</div>
            <div class="h1 mb-0 font-weight-bold text-white">
              <?php
              $where = ['dibooking !=0'];
              $totaldibooking = $this->ModelBuku->total('dibooking', $where);
              echo $totaldibooking;
              ?>
            </div>
          </div>
          <div class="col-auto">
            <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row ux-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- row table-->
<div class="row">
  <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
    <div class="page-header">
      <span class="fas fa-users text-primary mt-2 "> Data User</span>
      <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
    </div>
    <table class="table mt-3">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Anggota</th>
          <th>Email</th>
          <th>Role ID</th>
          <th>Aktif</th>
          <th>Member Sejak</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($anggota as $a) { ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $a['nama']; ?></td>
            <td><?= $a['email']; ?></td>
            <td><?= $a['role_id']; ?></td>
            <td><?= $a['is_active']; ?></td>
            <td><?= date('Y', $a['tanggal_input']); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


  <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
    <div class="page-header">
      <span class="fas fa-book text-warning mt-2"> Data Buku</span>
      <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
    </div>
    <div class="table-responsive">
      <table class="table mt-3" id="table-datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Stok</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($buku as $b) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $b['judul_buku']; ?></td>
              <td><?= $b['pengarang']; ?></td>
              <td><?= $b['penerbit']; ?></td>
              <td><?= $b['tahun_terbit']; ?></td>
              <td><?= $b['isbn']; ?></td>
              <td><?= $b['stok']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
<!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
