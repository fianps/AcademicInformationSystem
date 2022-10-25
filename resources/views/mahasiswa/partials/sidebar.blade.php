<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'PPL' || $title === 'Edit Profil') ? 'active' : '' }}" aria-current="page" href="/mahasiswa">
            <span data-feather="profil" class="align-text-bottom"></span>
            Profil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data IRS' || $title === 'Edit IRS') ? 'active' : '' }}" href="/irs">
            <span data-feather="irs" class="align-text-bottom"></span>
            IRS
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data KHS' || $title === 'Edit KHS') ? 'active' : '' }}" href="/khs">
            <span data-feather="khs" class="align-text-bottom"></span>
            KHS
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data PKL' || $title === 'Edit PKL') ? 'active' : '' }}" href="/pkl">
            <span data-feather="pkl" class="align-text-bottom"></span>
            PKL
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Skripsi' || $title === 'Edit Skripsi') ? 'active' : '' }}" href="/skripsi">
            <span data-feather="skripsi" class="align-text-bottom"></span>
            Skripsi
          </a>
        </li>
      </ul>
  
      <form action="/logout" method="POST" class="align-items-center">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
</nav>