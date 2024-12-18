<x-base>
<div class="content-wrapper">
<div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Pembayaran Siswa
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Ringkasan <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
<form action="{{ url('/whatsapp') }}" method="POST">
          {{ csrf_field() }}
            <button type="submit" class="btn btn-gradient-success btn-lg btn-block">
              <i class="mdi mdi-plus"></i> Kirim Notifikasi
            </button>
          </form>
         <table class="table table-striped">
              <thead>
                <tr>
                  <th> id </th>
                  <th> Nama Siswa </th>
                  <th> Kategori </th>
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
                  <td> {{ $payment->siswa->nama_lengkap ?? 'Tidak ada data' }} </td>
                  <td>{{ $payment->kategori }} </td>
                  <td>{{ $payment->status }}</td>
                  <td>{{ $payment->jumlah }} </td>
                  <td>{{ $payment->tanggal_bayar ?? "belum terbayar" }} </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data siswa.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>  
</div>  
</div>
</div>

</div>
</div>

</x-base>