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
                    <h4 class="card-title">Data Orang Tua</h4>
                    <form class="form-sample" method="POST" action="/daftar-ortu">
                      @csrf
                      <p class="card-description"> Informasi Orang Tua </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_ayah" class="form-control" value="{{ old('nama_ayah', $siswa->nama_ayah ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="nik_ayah" class="form-control" value="{{ old('nik_ayah', $siswa->nik_ayah ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pendidikan Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="pendidikan_ayah" class="form-control" value="{{ old('pendidikan_ayah', $siswa->pendidikan_ayah ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ old('pekerjaan_ayah', $siswa->pekerjaan_ayah ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Ayah</label>
                            <div class="col-sm-9">
                              <input type="email" name="email_ayah" class="form-control" value="{{ old('email_ayah', $siswa->email_ayah ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                              <input type="text" name="tempat_lahir_ayah" class="form-control" value="{{ old('tempat_lahir_ayah', $siswa->tempat_lahir_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="tanggal_lahir_ayah" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir_ayah', $siswa->tanggal_lahir_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp Ayah</label>
                            <div class="col-sm-9">
                              <input type="number" name="no_telp_ayah" class="form-control" value="{{ old('no_telp_ayah', $siswa->no_telp_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penghasilan Ayah</label>
                            <div class="col-sm-9">
                              <select name="penghasilan_ayah" class="form-control">
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
                              <input type="text" name="nama_ibu" class="form-control" value="{{ old('nama_ibu', $siswa->nama_ibu ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK ibu</label>
                            <div class="col-sm-9">
                              <input type="text" name="nik_ibu" class="form-control" value="{{ old('nik_ibu', $siswa->nik_ibu ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pendidikan ibu</label>
                            <div class="col-sm-9">
                              <input type="text" name="pendidikan_ibu" class="form-control" value="{{ old('pendidikan_ibu', $siswa->pendidikan_ibu ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan ibu</label>
                            <div class="col-sm-9">
                              <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ old('pekerjaan_ibu', $siswa->pekerjaan_ibu ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email ibu</label>
                            <div class="col-sm-9">
                              <input type="email" name="email_ibu" class="form-control" value="{{ old('email_ibu', $siswa->email_ibu ?? '') }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                              <input type="text" name="tempat_lahir_ibu" class="form-control" value="{{ old('tempat_lahir_ibu', $siswa->tempat_lahir_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="tanggal_lahir_ibu" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir_ibu', $siswa->tanggal_lahir_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp ibu</label>
                            <div class="col-sm-9">
                              <input type="number" name="no_telp_ibu" class="form-control" value="{{ old('no_telp_ibu', $siswa->no_telp_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penghasilan ibu</label>
                            <div class="col-sm-9">
                              <select name="penghasilan_ibu" class="form-control">
                                <option value="1" {{ old('penghasilan_ibu', $siswa->penghasilan_ibu ?? '') == '1' ? 'selected' : '' }}> Kurang dari 1</option>
                                <option value="2" {{ old('penghasilan_ibu', $siswa->penghasilan_ibu ?? '') == '2' ? 'selected' : '' }}>Kurang dari 2</option>
                              </select>
                            </div>
                          </div>
                        </div>
                       
                      <div class="d-flex gap-3 justify-content-between">
                        <button class="btn btn-gradient-info btn-fw col-md-3">Kembali</button>
                        <button type="submit" class="btn btn-gradient-info btn-fw col-md-3">Lanjut</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
</x-base>