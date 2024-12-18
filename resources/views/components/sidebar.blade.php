<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="/assets/images/photo.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ auth()->user()->name}}</span>
                  @if ( auth()->user()->role == 'admin')
                  <span class="text-secondary text-small"> Admin </span>
                    
                  @elseif ( auth()->user()->role == 'kepala_sekolah')
                  <span class="text-secondary text-small"> Kepala Sekolah </span>

                  @elseif ( auth()->user()->role == 'orang_tua')
                  <span class="text-secondary text-small"> Orang Tua </span>
                    
                  @endif
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            @if (auth()->check() && auth()->user()->role === 'admin')
            <li class="nav-item">
              <a class="nav-link" href=" {{ route('admin') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" {{ route('validation') }} ">
                <span class="menu-title">Validation</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('payments') }}">
                <span class="menu-title">Payments</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user') }}">
                <span class="menu-title">User</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('prestasi') }}">
                <span class="menu-title">Prestasi</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            @endif
            @if (auth()->check() && auth()->user()->role === 'kepala_sekolah')
            <li class="nav-item">
              <a class="nav-link" href=" {{ route('admin.kepala') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            @endif
            @if (auth()->check() && auth()->user()->role === 'orang_tua')
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pendaftaran') }}">
                <span class="menu-title">Pendaftaran</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('informasi') }}">
                <span class="menu-title">Informasi</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            @endif
          </ul>
        </nav>