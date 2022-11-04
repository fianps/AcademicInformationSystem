<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
          <a href="/dosen-dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ ($title === 'Dosen') ? 'active' : '' }}">
          <a href="/dosen"><i class="fas fa-user"></i> <span>Verifikasi Mahasiswa</span></a>
        </li>
        <li class="{{ ($title === 'Data PKL') ? 'active' : '' }}">
          <a href="/data-pkl"><i class="fas fa-cube"></i> <span>Data PKL Mahasiswa</span></a>
        </li>
        <li class="{{ ($title === 'Data Skripsi') ? 'active' : '' }}">
          <a href="/data-skripsi"><i class="fas fa-book"></i> <span>Data Skripsi Mahasiswa</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>