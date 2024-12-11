<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran</title>
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
    <div class="container-scroller" >

      <!-- partial:partials/_navbar.html -->
      <x-navbar></x-navbar>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper" >
        <!-- partial:partials/_sidebar.html -->
        <x-sidebar></x-sidebar>  
        <!-- partial -->
        <div class="main-panel">
        <h1>Informasi Pembayaran</h1>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Tanggal Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->pembayaran->jumlah ?? 'Belum ada' }}</td>
                        <td>{{ $siswa->pembayaran->status ?? 'Belum ada' }}</td>
                        <td>{{ $siswa->pembayaran->tanggal_bayar ?? 'Belum ada' }}</td>
                        <td>
                          @if($siswa->pembayaran->status == 'paid')
                              <!-- Tampilkan teks jika status pembayaran sudah 'paid' -->
                              <p>Pembayaran sudah dikonfirmasi pada: {{ $siswa->pembayaran->tanggal_bayar }}</p>
                          @else
                              <!-- Tampilkan tombol konfirmasi jika status belum 'paid' -->
                              <form method="POST" action="{{ route('pendaftaran.confirmation', $siswa->pembayaran->siswa_id) }}">
                                  @csrf
                                  <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                              </form>
                          @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data pembayaran.</td>
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