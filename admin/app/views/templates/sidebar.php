  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">White Rent Car</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="<?= base_url; ?>/home" class="nav-link">
              <i class="nav-icon  fas fa-th"></i>
              <p> 
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data</li>
      <?php
      
        ?>
          <li class="nav-item">
            <a href="<?= base_url; ?>/mobil" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Mobil
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url; ?>/transaksi" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

        <?php
        ?>
        <li class="nav-header">Profil</li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/karyawan" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil Karyawan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>