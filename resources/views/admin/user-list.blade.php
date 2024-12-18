<x-base>
  
  <div class="content-wrapper">
  <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Data Pengguna
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
        <a href="{{ route('user.add') }}" type="button" class="btn btn-gradient-success btn-lg btn-block">
                <i class="mdi mdi-plus"></i> Tambah Pengguna
            </a>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> id </th>
                  <th> Nama </th>
                  <th> Email </th>
                  <th> Role </th>
                  <th> Dibuat Tanggal </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
              @forelse ($users as $user)
                <tr>
                  <td class="py-1">
                    {{ $loop->iteration }}
                  </td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-gradient-info btn-icon-text"><i class="mdi mdi-table-edit"></i> Edit</a>
                    <form method="POST" action="{{ route('user.destroy', $user->id) }}" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-delete"></i> Hapus</button>
                    </form>
                  </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data user.</td>
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