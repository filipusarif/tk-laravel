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
         <table class="table table-striped">
              <thead>
                <tr>
                  <th> id </th>
                  <th> Nama Siswa </th>
                  <th> Status Verifikasi </th>
                  <th> Status Pembayaran </th>
                  <th> Jumlah </th>
                  <th> Tanggal Pembayaran </th>
                </tr>
              </thead>
              <tbody>
              @forelse ($payments as $payment)
                <tr>
                  <td class="py-1">
                    {{ $loop->iteration }}
                  </td>
                  <td> {{ $payment->siswa->nama ?? 'Tidak ada data' }} </td>
                  <td></td>
                  <td>{{ $payment->status }} </td>
                  <td>{{ $payment->jumlah }} </td>
                  <td>{{ $payment->tanggal_bayar }} </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data siswa.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>    
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