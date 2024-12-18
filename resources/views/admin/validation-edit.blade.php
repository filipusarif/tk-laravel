<x-base>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Edit Pendaftaran
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
                    <h4 class="card-title">Pendaftaran</h4>
                    <form class="form-sample" method="POST" action="{{ route('validation.update', $siswa->id) }}">
                      @csrf
                      @method('PUT')
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama" class="form-control" value="{{ old('nama', $siswa->nama ?? '') }}" />
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
                      </div>
                      <div class="row">
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
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="tanggal_lahir" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}"/>
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
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Nama Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_ayah" class="form-control" value="{{ old('nama_ayah', $siswa->nama_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ old('pekerjaan_ayah', $siswa->pekerjaan_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telpon Ayah</label>
                            <div class="col-sm-9">
                              <input type="text" numeric name="no_telp_ayah" class="form-control" value="{{ old('no_telp_ayah', $siswa->no_telp_ayah ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Nama Ibu</label>
                            <div class="col-sm-9">
                              <input type="text" name="nama_ibu" class="form-control" value="{{ old('nama_ibu', $siswa->nama_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Pekerjaan Ibu</label>
                            <div class="col-sm-9">
                              <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ old('pekerjaan_ibu', $siswa->pekerjaan_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telpon Ibu</label>
                            <div class="col-sm-9">
                              <input type="text" numeric name="no_telp_ibu" class="form-control" value="{{ old('no_telp_ibu', $siswa->no_telp_ibu ?? '') }}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-info btn-fw">Kirim</button>
                      <!-- <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Address </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
</x-base>