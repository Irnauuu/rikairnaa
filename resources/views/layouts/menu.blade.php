<li class="nav-item menu-open">
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
      </p>
    </a>
    
  </li>

  <li class="nav-item menu-open">
    <a href="{{ route('admin.datasiswa') }}" class="nav-link {{ Route::currentRouteName() == 'admin.datasiswa' ? 'active' : '' }}">
      <i class="nav-icon fas fa-user-alt"></i>
      <p>
        Data siswa
      </p>
    </a>
    
  </li>
  <li class="nav-item menu-open">
    <a href="{{ route('admin.dashboardbuku') }}" class="nav-link {{ Route::currentRouteName() == 'admin.dashboardbuku' ? 'active' : '' }}">
      <i class="nav-icon fas fa-book"></i>
      <p>
        Data buku
      </p>
    </a>
    
  </li>