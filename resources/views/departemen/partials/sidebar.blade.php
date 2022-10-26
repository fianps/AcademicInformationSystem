<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Data Mahasiswa') ? 'active' : '' }}" aria-current="page" href="/departemen">
            <span data-feather="profil" class="align-text-bottom"></span>
            Data Mahasiswa
          </a>
        </li>
      </ul>
  
      <form action="/logout" method="POST" class="m-3">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    </div>
</nav>