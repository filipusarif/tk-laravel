<x-base>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard Laporan
            </h3>
        </div>
        <div class="row">
            <div class="col-md-4 grid-margin">
                <div class="card bg-gradient-danger text-white">
                    <div class="card-body">
                        <h4>Jumlah Pendaftar</h4>
                        <h2>{{ $jumlahPendaftar }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin">
                <div class="card bg-gradient-info text-white">
                    <div class="card-body">
                        <h4>Total Uang Dibayar</h4>
                        <h2>Rp {{ number_format($totalUangDibayar, 0, ',', '.') }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin">
                <div class="card bg-gradient-success text-white">
                    <div class="card-body">
                        <h4>Jumlah Sudah Membayar</h4>
                        <h2>{{ $jumlahSudahMembayar }}</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 grid-margin">
                <div class="card bg-gradient-warning text-white">
                    <div class="card-body">
                        <h4>Jumlah Belum Membayar</h4>
                        <h2>{{ $jumlahBelumMembayar }}</h2>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>List Siswa Sudah Membayar</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaSudahMembayar as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->siswa->nama_lengkap }}</td>
                                        <td>{{ $pembayaran->kategori }}</td>
                                        <td>Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</td>
                                        <td>{{ $pembayaran->tanggal_bayar }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>List Siswa Belum Membayar</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaBelumMembayar as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->siswa->nama_lengkap }}</td>
                                        <td>{{ $pembayaran->kategori }}</td>
                                        <td>Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>List Siswa Sudah Membayar</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaSudahMembayar as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->siswa->nama_lengkap }}</td>
                                        <td>{{ $pembayaran->kategori }}</td>
                                        <td>Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</td>
                                        <td>{{ $pembayaran->tanggal_bayar }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>List Siswa Belum Membayar</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaBelumMembayar as $pembayaran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran->siswa->nama_lengkap }}</td>
                                        <td>{{ $pembayaran->kategori }}</td>
                                        <td>Rp {{ number_format($pembayaran->jumlah, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</x-base>
