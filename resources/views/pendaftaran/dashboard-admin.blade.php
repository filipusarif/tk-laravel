<x-base>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Pendaftaran Siswa
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pendaftaran Siswa</h4>
                    <form class="form-sample" method="POST" action="/daftar-admin">
                      @csrf
                      <p class="card-description"> Informasi Siswa </p>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> User </label>
                            <div class="col-sm-9">
                              <select name="user" class="form-control">
                              @foreach ( $users as $user )
                                <option value="{{ $user->id }}" > {{ $user->name }} </option>
                              @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $siswa->nama_lengkap ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Panggilan</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_panggilan" class="form-control" value="{{ old('nama_panggilan', $siswa->nama_panggilan ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                              <select name="jenis_kelamin" class="form-control">
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
                              <input type="text" name="nik" class="form-control" value="{{ old('nik', $siswa->nik ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No KK</label>
                            <div class="col-sm-9">
                              <input type="text" name="kk" class="form-control" value="{{ old('kk', $siswa->kk ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Akta</label>
                            <div class="col-sm-9">
                              <input type="text" name="akte" class="form-control" value="{{ old('akte', $siswa->akte ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                              <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $siswa->tempat_lahir ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="tanggal_lahir" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-9">
                              <input type="number" name="tinggi" class="form-control" value="{{ old('tinggi', $siswa->tinggi ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Berat Badan</label>
                            <div class="col-sm-9">
                              <input type="number" name="berat" class="form-control" value="{{ old('berat', $siswa->berat ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                              <input type="text" name="agama" class="form-control" value="{{ old('agama', $siswa->agama ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-9">
                              <input type="text" name="kewarganegaraan" class="form-control" value="{{ old('kewarganegaraan', $siswa->kewarganegaraan ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Saudara</label>
                            <div class="col-sm-9">
                              <input type="number" name="jumlah_saudara" class="form-control" value="{{ old('jumlah_saudara', $siswa->jumlah_saudara ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <div class="col-sm-9">
                              <select name="berkebutuhan_khusus" class="form-control">
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
                              <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $siswa->alamat ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jarak ke Sekolah</label>
                            <div class="col-sm-9">
                              <input type="text" name="jarak" class="form-control" value="{{ old('jarak', $siswa->jarak ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Waktu Perjalanan</label>
                            <div class="col-sm-9">
                              <input type="text" name="waktu" class="form-control" value="{{ old('waktu', $siswa->waktu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                      <div class="d-flex gap-3 justify-content-between">
                        <button type="submit" class="btn btn-gradient-info btn-fw col-md-3">Batal</button>
                        <button type="submit" class="btn btn-gradient-info btn-fw col-md-3">Kirim</button>
                      </div>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
</x-base>