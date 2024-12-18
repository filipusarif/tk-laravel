<x-base>
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Informasi Pembayaran
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Ringkasan <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Content Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Informasi Siswa -->
                        <h4 class="card-title">Informasi Pembayaran</h4>
                        <p class="card-description">
                            Berikut adalah detail pembayaran siswa <strong>{{ $siswas->nama_lengkap }}</strong>.
                        </p>

                        <!-- Pembayaran Pending -->
                        <h5 class="mt-4">Pembayaran Pending</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pendingPayments as $payment)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $payment->kategori }}</td>
                                            <td>{{ $payment->jumlah }}</td>
                                            <td>{{ $payment->status }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum ada tagihan pembayaran.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Total Jumlah -->
                        <h6 class="mt-3">Total Jumlah: Rp.<strong>{{ $totalAmount }}</strong></h6>

                        <!-- Tombol Bayar -->
                        <button id="pay-button" class="btn btn-gradient-success btn-lg mt-3">
                            <i class="mdi mdi-credit-card"></i> Bayar Sekarang
                        </button>

                        <!-- Pembayaran Selesai -->
                        <h5 class="mt-5">Pembayaran Selesai</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($paidPayments as $payment)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $payment->kategori }}</td>
                                            <td>{{ $payment->jumlah }}</td>
                                            <td>{{ $payment->status }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Belum ada pembayaran selesai.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Midtrans Snap JS library -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    fetch("{{ route('payment.callback') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            status_code: result.status_code,
                            order_id: result.order_id,
                            siswa_id: "{{ $siswas->id }}",
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        window.location.href = "{{ route('pendaftaran') }}";
                    });
                    alert("Pembayaran berhasil!");
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran...");
                },
                onError: function (result) {
                    alert("Pembayaran gagal!");
                }
            });
        };
    </script>
</x-base>
