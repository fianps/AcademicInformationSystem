<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dosen') ? 'active' : '' }}" aria-current="page" href="/dosen">
            <span data-feather="profil" class="align-text-bottom"></span>
            Verifikasi Mahasiswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data PKL') ? 'active' : '' }}" aria-current="page" href="/data-pkl">
            <span data-feather="profil" class="align-text-bottom"></span>
            Data PKL Mahasiswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Skripsi') ? 'active' : '' }}" aria-current="page" href="/data-skripsi">
            <span data-feather="profil" class="align-text-bottom"></span>
            Data Skripsi Mahasiswa
          </a>
        </li>
      </ul>
  
      <form action="/logout" method="POST" class="m-3">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
</nav>