<x-base>
<div class="content-wrapper">  
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Akun</h4>
                    <p class="card-description"> Edit Data Akun Pengguna  </p>
                    <form class="forms-sample" action="{{ route('user.update', $user->id) }}"  method="POST">
                    @csrf
                    @method('PUT')

                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input  value="{{ old('name', $user->name ?? '') }}"  type="text" name="name" class="form-control" id="name" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input  value="{{ old('email', $user->email ?? '') }}" type="email" name="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input  value="{{ old('password', $user->password ?? '') }}" type="password" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" name="role" id="role">
                          <option value="orang_tua" {{ old('role', $user->role ?? '') == 'orang_tua' ? 'selected' : '' }}>Orang Tua</option>
                          <option value="kepala_sekolah" {{ old('role', $user->role ?? '') == 'kepala_sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                          <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
</x-base>