<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'PPL' || $title === 'Edit Profil') ? 'active' : '' }}">
          <a href="/mahasiswa"><i class="fas fa-user"></i> <span>Profile</span></a>
        </li>
        <li class="{{ ($title === 'Data IRS' || $title === 'Edit IRS') ? 'active' : '' }}">
          <a href="/irs"><i class="fas fa-laptop"></i> <span>Data IRS</span></a>
        </li>
        <li class="{{ ($title === 'Data KHS' || $title === 'Edit KHS') ? 'active' : '' }}">
          <a href="/khs"><i class="fas fa-table"></i> <span>Data KHS</span></a>
        </li>
        <li class="{{ ($title === 'Data PKL' || $title === 'Edit PKL') ? 'active' : '' }}">
          <a href="/pkl"><i class="fas fa-cube"></i> <span>Data PKL</span></a>
        </li>
        <li class="{{ ($title === 'Data Skripsi' || $title === 'Edit Skripsi') ? 'active' : '' }}">
          <a href="/skripsi"><i class="fas fa-book"></i> <span>Data Skripsi</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>