<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'PPL' || $title === 'Edit Profil') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="profil" class="align-text-bottom"></span>
            Profil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Mahasiswa') ? 'active' : '' }}" href="#">
            <span data-feather="data-mahasiswa" class="align-text-bottom"></span>
            Data Mahasiswa
          </a>
        </li>
      </ul>
  
      <form action="/logout" method="POST" class="align-items-center">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
</nav>

{{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item menu-items">
      <a class="nav-link" href="/">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Profil</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Data Mahasiswa</span>
      </a>
    </li>
  </ul>
</nav> --}}