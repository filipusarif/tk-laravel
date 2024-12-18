<x-base>
<div class="content-wrapper">
            <!-- <p>{{ $siswa->nama }}</p>
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
            <p>{{ $siswa->status_verifikasi }}</p> -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Validasi Siswa
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Ringkasan <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
<div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Validasi Data Siswa</h4>
          <p class="card-description"> Informasi Data Diri Siswa </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $siswa->nama_lengkap ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Panggilan</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nama_panggilan" class="form-control" value="{{ old('nama_panggilan', $siswa->nama_panggilan ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                  <select name="jenis_kelamin" class="form-control" disabled>
                    <option value="L" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                    <option value="P" {{ old('jenis_kelamin', $siswa->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nik" class="form-control" value="{{ old('nik', $siswa->nik ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No KK</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="kk" class="form-control" value="{{ old('kk', $siswa->kk ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No Akta</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="akte" class="form-control" value="{{ old('akte', $siswa->akte ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $siswa->tempat_lahir ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="date" class="form-control" name="tanggal_lahir" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tinggi Badan</label>
                <div class="col-sm-9">
                  <input readonly type="number" name="tinggi" class="form-control" value="{{ old('tinggi', $siswa->tinggi ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Berat Badan</label>
                <div class="col-sm-9">
                  <input readonly type="number" name="berat" class="form-control" value="{{ old('berat', $siswa->berat ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="agama" class="form-control" value="{{ old('agama', $siswa->agama ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="kewarganegaraan" class="form-control" value="{{ old('kewarganegaraan', $siswa->kewarganegaraan ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jumlah Saudara</label>
                <div class="col-sm-9">
                  <input readonly type="number" name="jumlah_saudara" class="form-control" value="{{ old('jumlah_saudara', $siswa->jumlah_saudara ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                <div class="col-sm-9">
                  <select name="berkebutuhan_khusus" class="form-control" disabled>
                    <option value="Y" {{ old('berkebutuhan_khusus', $siswa->berkebutuhan_khusus ?? '') == 'Y' ? 'selected' : '' }}>Ya</option>
                    <option value="T" {{ old('berkebutuhan_khusus', $siswa->berkebutuhan_khusus ?? '') == 'T' ? 'selected' : '' }}>Tidak</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label "> Alamat</label>
                <div class="col-sm-12">
                  <input readonly type="text" name="alamat" class="form-control" value="{{ old('alamat', $siswa->alamat ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jarak ke Sekolah</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="jarak" class="form-control" value="{{ old('jarak', $siswa->jarak ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Waktu Perjalanan</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="waktu" class="form-control" value="{{ old('waktu', $siswa->waktu ?? '') }}"/>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nama_ayah" class="form-control" value="{{ old('nama_ayah', $siswa->nama_ayah ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIK Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nik_ayah" class="form-control" value="{{ old('nik_ayah', $siswa->nik_ayah ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pendidikan Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="pendidikan_ayah" class="form-control" value="{{ old('pendidikan_ayah', $siswa->pendidikan_ayah ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="pekerjaan_ayah" class="form-control" value="{{ old('pekerjaan_ayah', $siswa->pekerjaan_ayah ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="email" name="email_ayah" class="form-control" value="{{ old('email_ayah', $siswa->email_ayah ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="tempat_lahir_ayah" class="form-control" value="{{ old('tempat_lahir_ayah', $siswa->tempat_lahir_ayah ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="date" class="form-control" name="tanggal_lahir_ayah" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir_ayah', $siswa->tanggal_lahir_ayah ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No Telp Ayah</label>
                <div class="col-sm-9">
                  <input readonly type="number" name="no_telp_ayah" class="form-control" value="{{ old('no_telp_ayah', $siswa->no_telp_ayah ?? '') }}"/>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Penghasilan Ayah</label>
                <div class="col-sm-9">
                  <select disabled name="penghasilan_ayah" class="form-control">
                    <option value="1" {{ old('penghasilan_ayah', $siswa->penghasilan_ayah ?? '') == '1' ? 'selected' : '' }}> Kurang dari 1</option>
                    <option value="2" {{ old('penghasilan_ayah', $siswa->penghasilan_ayah ?? '') == '2' ? 'selected' : '' }}>Kurang dari 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-md-6"></div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama ibu</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nama_ibu" class="form-control" value="{{ old('nama_ibu', $siswa->nama_ibu ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIK ibu</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="nik_ibu" class="form-control" value="{{ old('nik_ibu', $siswa->nik_ibu ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pendidikan ibu</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="pendidikan_ibu" class="form-control" value="{{ old('pendidikan_ibu', $siswa->pendidikan_ibu ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pekerjaan ibu</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="pekerjaan_ibu" class="form-control" value="{{ old('pekerjaan_ibu', $siswa->pekerjaan_ibu ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email ibu</label>
                <div class="col-sm-9">
                  <input readonly type="email" name="email_ibu" class="form-control" value="{{ old('email_ibu', $siswa->email_ibu ?? '') }}" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="text" name="tempat_lahir_ibu" class="form-control" value="{{ old('tempat_lahir_ibu', $siswa->tempat_lahir_ibu ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                  <input readonly type="date" class="form-control" name="tanggal_lahir_ibu" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir_ibu', $siswa->tanggal_lahir_ibu ?? '') }}"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">No Telp ibu</label>
                <div class="col-sm-9">
                  <input readonly type="number" name="no_telp_ibu" class="form-control" value="{{ old('no_telp_ibu', $siswa->no_telp_ibu ?? '') }}"/>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Penghasilan ibu</label>
                <div class="col-sm-9">
                  <select disabled name="penghasilan_ibu" class="form-control">
                    <option value="1" {{ old('penghasilan_ibu', $siswa->penghasilan_ibu ?? '') == '1' ? 'selected' : '' }}> Kurang dari 1</option>
                    <option value="2" {{ old('penghasilan_ibu', $siswa->penghasilan_ibu ?? '') == '2' ? 'selected' : '' }}>Kurang dari 2</option>
                  </select>
                </div>
              </div>
            </div>

            <p>File Akta Kelahiran  
                <a href="{{ asset($siswa->file_akta_kelahiran) }}" target="_blank">Lihat Akte</a>
            </p>
            <p>File Kartu Keluarga  
                <a href="{{ asset($siswa->file_kk) }}" target="_blank">Lihat KK</a>
            </p>
            <p>File Foto 
                <a href="{{ asset($siswa->file_foto) }}" target="_blank">Lihat Foto</a>
            </p>
            <p>File Imunisasi 
                <a href="{{ asset($siswa->file_imunisasi) }}" target="_blank">Lihat Imunisasi</a>
            </p>

            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('validation') }}" class="btn btn-secondary">Kembali</a>
              <div class="d-flex justify-content-between gap-3 align-items-center">
                <form method="POST" action="{{ route('validation.verify', $siswa->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-success">Verifikasi</button>
                </form>
    
                <form method="POST" action="{{ route('validation.reject', $siswa->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Tolak Verifikasi</button>
                </form>
              </div>
            </div>

</div>
                  </div>
                </div>
              </div>

</x-base>