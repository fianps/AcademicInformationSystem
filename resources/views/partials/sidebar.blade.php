{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'PPL' || $title === 'Edit Profil') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="profil" class="align-text-bottom"></span>
            Profil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Mahasiswa' || $title === 'Edit Data Mahasiswa' || $title === 'Tambah Data Mahasiswa') ? 'active' : '' }}" href="/data-mahasiswa">
            <span data-feather="data-mahasiswa" class="align-text-bottom"></span>
            Data Mahasiswa
          </a>
        </li>
      </ul>
  
      <form action="/logout" method="POST" class="m-3">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    </div>
</nav> --}}

<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'PPL' || $title === 'Edit Profil') ? 'active' : '' }}">
          <a href="/"><i class="far fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="{{ ($title === 'Data Mahasiswa' || $title === 'Edit Data Mahasiswa' || $title === 'Tambah Data Mahasiswa') ? 'active' : '' }}">
          <a href="/data-mahasiswa"><i class="far fa-file"></i> <span>Data Mahasiswa</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>