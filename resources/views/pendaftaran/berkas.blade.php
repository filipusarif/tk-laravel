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
                    <form class="form-sample" method="POST" action="/daftar-berkas" enctype="multipart/form-data">
                      @csrf
                      <p class="card-description"> Informasi Siswa </p>
                      <div class="row">
                     <!-- File Akta Kelahiran -->
                        <label for="file_akta_kelahiran">File Akta Kelahiran</label>
                        <input type="file" name="file_akta_kelahiran" id="file_akta_kelahiran">
                        @if($berkas->file_akta_kelahiran)
                            <p>File saat ini: 
                                <a href="{{ asset($berkas->file_akta_kelahiran) }}" target="_blank">Lihat Akta Kelahiran</a>
                            </p>
                        @endif

                        <!-- File KK -->
                        <label for="file_kk">File KK</label>
                        <input type="file" name="file_kk" id="file_kk">
                        @if($berkas->file_kk)
                            <p>File saat ini: 
                                <a href="{{ asset($berkas->file_kk) }}" target="_blank">Lihat KK</a>
                            </p>
                        @endif

                        <!-- File Foto -->
                        <label for="file_foto">File Foto</label>
                        <input type="file" name="file_foto" id="file_foto">
                        @if($berkas->file_foto)
                            <img src="{{ asset($berkas->file_foto) }}" alt="Foto" style="max-width: 150px; max-height: 150px;">
                        @endif

                        <!-- File Imunisasi -->
                        <label for="file_imunisasi">File Imunisasi</label>
                        <input type="file" name="file_imunisasi" id="file_imunisasi" >
                        @if($berkas->file_imunisasi)
                            <p>File saat ini: 
                                <a href="{{ asset($berkas->file_imunisasi) }}" target="_blank">Lihat Imunisasi</a>
                            </p>
                        @endif

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