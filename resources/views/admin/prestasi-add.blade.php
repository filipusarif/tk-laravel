<x-base>
<div class="content-wrapper">  
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Prestasi</h4>
                    <p class="card-description"> Tambah Data Prestasi  </p>
                    <form class="forms-sample" enctype="multipart/form-data" action="{{ route('prestasi.post') }}" method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="judul">Judul Prestasi</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi">
                      </div>
                      <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="gambar" class="file-upload-default" style="display: none;">
                          <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-gradient-primary" type="button" onclick="document.querySelector('.file-upload-default').click()">Upload</button>
                              </span>
                          </div>
                      </div>

                      

                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <script>
                          document.querySelector('.file-upload-default').addEventListener('change', function() {
                              let fileName = this.files[0]?.name || '';
                              document.querySelector('.file-upload-info').value = fileName;
                          });
                      </script>
</x-base>