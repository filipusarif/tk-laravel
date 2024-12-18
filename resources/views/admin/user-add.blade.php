<x-base>
<div class="content-wrapper">  
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Akun</h4>
                    <p class="card-description"> Tambah Data Akun Pengguna  </p>
                    <form class="forms-sample" action="{{ route('user.post') }}" method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" id="role">
                          <option value="orang_tua">Orang Tua</option>
                          <option value="kepala_sekolah">Kepala Sekolah</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
</x-base>