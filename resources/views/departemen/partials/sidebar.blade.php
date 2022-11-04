<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
          <a href="/departemen-dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ ($title === 'Data Mahasiswa' || $title === 'Detail') ? 'active' : '' }}">
          <a href="/departemen"><i class="fas fa-book"></i> <span>Data Mahasiswa</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>