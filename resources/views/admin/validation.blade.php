<x-base>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Validasi Data Siswa
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
          <a href="{{ route('pendaftaran.admin') }}" type="button" class="btn btn-gradient-success btn-lg btn-block">
                <i class="mdi mdi-plus"></i> Tambah Pendaftaran
            </a>
            <div class="table-responsive">

              <table class="table table-striped ">
                <thead>
                <tr>
                  <th> id </th>
                  <th> Nama </th>
                  <th> Jenis Kelamin </th>
                  <th> Tanggal Lahir </th>
                  <th> Status Verifikasi </th>
                  <th> Verifikasi </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                @forelse ($siswas as $siswa)
                <tr>
                  <td class="py-1">
                    {{ $loop->iteration }}
                  </td>
                  <td>{{ $siswa->nama_lengkap}}</td>
                  <td>{{ $siswa->jenis_kelamin }}</td>
                  <td>{{ $siswa->tanggal_lahir }}</td>
                  <td>{{ $siswa->status_verifikasi }}</td>
                  <td>
                    <a href="{{ route('validation.show', $siswa->id) }}" class="btn btn-gradient-info btn-icon-text"><i class="mdi mdi-table-edit"></i>Cek</a>
                  </td>
                  <td>
                    <a href="{{ route('validation.edit', $siswa->id) }}" class="btn btn-gradient-info btn-icon-text"><i class="mdi mdi-table-edit"></i> Edit</a>
                    <form method="POST" action="{{ route('validation.destroy', $siswa->id) }}" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-delete"></i> Hapus</button>
                    </form>
                  </td>
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
</div>

</x-base>