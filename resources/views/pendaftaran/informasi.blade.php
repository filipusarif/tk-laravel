<x-base>
    <h1>Informasi Pembayaran</h1>

    <h2>Nama: {{ $siswas->nama_lengkap }}</h2>
    <h3>Pembayaran Pending:</h3>
    <table>
        @foreach ($pendingPayments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->jumlah }}</td>
                <td>{{ $payment->status }}</td>
            </tr>
        @endforeach
    </table>

    <h4>Total Jumlah: {{ $totalAmount }}</h4>

    <!-- Tombol untuk memulai pembayaran -->
    <button id="pay-button" class="btn btn-success">Bayar Sekarang</button>

    <h3>Pembayaran Selesai:</h3>
    <table>
        @foreach ($paidPayments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->jumlah }}</td>
                <td>{{ $payment->status }}</td>
            </tr>
        @endforeach
    </table>

    <!-- Include Midtrans Snap JS library -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    // Kirim data ke backend untuk memperbarui status pembayaran
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
                        window.location.href = "{{ route('pendaftaran') }}"; // Redirect setelah berhasil
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
