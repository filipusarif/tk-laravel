<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <x-navbar></x-navbar>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <x-sidebar></x-sidebar>  
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <p>{{ $siswa->nama }}</p>
          <p>{{ $siswa->tempat_lahir }}</p>
          <p>{{ $siswa->tanggal_lahir }}</p>
          <p>{{ $siswa->jenis_kelamin }}</p>
          <p>{{ $siswa->alamat }}</p>
          <p>{{ $siswa->no_kk }}</p>
          <p>{{ $siswa->nama_ayah }}</p>
          <p>{{ $siswa->pekerjaan_ayah }}</p>
          <p>{{ $siswa->no_telp_ayah }}</p>
          <p>{{ $siswa->nama_ibu }}</p>
          <p>{{ $siswa->pekerjaan_ibu }}</p>
          <p>{{ $siswa->no_telp_ibu }}</p>
          <p>{{ $siswa->file_akta_kelahiran }}</p>
          <p>{{ $siswa->file_kk }}</p>
          <p>{{ $siswa->file_foto }}</p>
          <p>{{ $siswa->status_verifikasi }}</p>

          <form method="POST" action="{{ route('validation.verify', $siswa->id) }}">
              @csrf
              <button type="submit" class="btn btn-success">Verifikasi</button>
          </form>

          <form method="POST" action="{{ route('validation.reject', $siswa->id) }}">
              @csrf
              <button type="submit" class="btn btn-danger">Tolak Verifikasi</button>
          </form>

          <a href="{{ route('validation') }}" class="btn btn-secondary">Kembali</a>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <x-footer></x-footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>