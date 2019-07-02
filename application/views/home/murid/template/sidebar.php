<div class="xclosed">
  <button type="button" class="btn btn-x-closed btn-sm" id="closeYourSideBar">X</button>
</div>
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url();?>murid">Kitangaji.com</a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/angular.jpg">
      </div>
      <div class="sidebar-user-details">
        <div class="user-name">Ujang Maman</div>
        <div class="user-role">
          Murid
        </div>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li <?php if ($this->uri->segment(2) == "") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>murid"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
      </li>

      <li class="menu-header">Components</li>
      <li <?php if ($this->uri->segment(2) == "jadwalKbm" || $this->uri->segment(2) == "laporanKbm" || $this->uri->segment(2) == "detail") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-speakerphone"></i><span>KBM</span></a>
        <ul class="menu-dropdown">
          <li<?php if ($this->uri->segment(2) == "jadwalKbm" || $this->uri->segment(2) == "detail") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>murid/jadwalKbm"><i class="ion ion-ios-circle-outline"></i> Jadwal</a></li>
          <li<?php if ($this->uri->segment(2) == "laporanKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>murid/laporanKbm"><i class="ion ion-ios-circle-outline"></i> Laporan</a></li>
        </ul>
      </li>
      <li <?php if ($this->uri->segment(2) == "laporan") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>murid/laporan "><i class="ion ion-clipboard"></i><span>Laporan</span></a>
      </li>
      <li <?php if ($this->uri->segment(2) == "invoice" || $this->uri->segment(2) == "laporanKeuangan") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-social-bitcoin"></i><span>Keuangan</span></a>
        <ul class="menu-dropdown">
          <li <?php if ($this->uri->segment(2) == "invoice") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>murid/invoice"><i class="ion ion-ios-circle-outline"></i> Invoice</a></li>
          <li <?php if ($this->uri->segment(2) == "laporanKeuangan") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>murid/laporanKeuangan"><i class="ion ion-ios-circle-outline"></i> Laporan</a></li>
        </ul>
      </li>

      <li class="menu-header">Lainnya</li>
      <li <?php if ($this->uri->segment(2) == "profile") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>murid/profile "><i class="ion ion-person"></i><span>My Profile</span></a>
      </li>

    </ul> 
  </aside>
</div>