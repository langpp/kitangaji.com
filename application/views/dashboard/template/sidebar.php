<div class="xclosed">
  <button type="button" class="btn btn-x-closed btn-sm" id="closeYourSideBar">X</button>
</div>
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url();?>dashboard">Kitangaji.com</a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/angular.jpg">
      </div>
      <div class="sidebar-user-details">
        <div class="user-name">Ujang Maman</div>
        <div class="user-role">
          Administrator
        </div>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li <?php if ($this->uri->segment(2) == "") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>dashboard"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
      </li>

      <li class="menu-header">Components</li>
      <li <?php if ($this->uri->segment(2) == "daftarGuru" || $this->uri->segment(2) == "daftarMurid" || $this->uri->segment(2) == "daftarDonatur") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-person-add"></i><span>Pendaftaran</span></a>
        <ul class="menu-dropdown">
          <li<?php if ($this->uri->segment(2) == "daftarGuru") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/daftarGuru"><i class="ion ion-ios-circle-outline"></i> Guru</a></li>
          <li<?php if ($this->uri->segment(2) == "daftarMurid") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/daftarMurid"><i class="ion ion-ios-circle-outline"></i> Murid</a></li>
          <li<?php if ($this->uri->segment(2) == "daftarDonatur") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/daftarDonatur"><i class="ion ion-ios-circle-outline"></i> Donatur</a></li>
        </ul>
      </li>

      <li <?php if ($this->uri->segment(2) == "profileGuru" || $this->uri->segment(2) == "profileMurid" || $this->uri->segment(2) == "profileDonatur") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-person"></i><span>Profile</span></a>
        <ul class="menu-dropdown">
          <li <?php if ($this->uri->segment(2) == "profileGuru") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/profileGuru"><i class="ion ion-ios-circle-outline"></i> Guru</a></li>
          <li <?php if ($this->uri->segment(2) == "profileMurid") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/profileMurid"><i class="ion ion-ios-circle-outline"></i> Murid</a></li>
          <li <?php if ($this->uri->segment(2) == "profileDonatur") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/profileDonatur"><i class="ion ion-ios-circle-outline"></i> Donatur</a></li>
        </ul>
      </li>

      <li <?php if ($this->uri->segment(2) == "rencanaKbm" || $this->uri->segment(2) == "progressKbm" || $this->uri->segment(2) == "finalKbm") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-ios-color-filter"></i><span>KBM</span></a>
        <ul class="menu-dropdown">
          <li <?php if ($this->uri->segment(2) == "rencanaKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/rencanaKbm"><i class="ion ion-ios-circle-outline"></i> Rencana</a></li>
          <li <?php if ($this->uri->segment(2) == "progressKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/progressKbm"><i class="ion ion-ios-circle-outline"></i> Progress</a></li>
          <li <?php if ($this->uri->segment(2) == "finalKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/finalKbm"><i class="ion ion-ios-circle-outline"></i> Final</a></li>
        </ul>
      </li>

      <li <?php if ($this->uri->segment(2) == "rencanaProyek" || $this->uri->segment(2) == "progressProyek" || $this->uri->segment(2) == "finalProyek") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-ribbon-b"></i><span>Proyek</span></a>
        <ul class="menu-dropdown">
          <li <?php if ($this->uri->segment(2) == "rencanaProyek") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/rencanaProyek"><i class="ion ion-ios-circle-outline"></i> Rencana</a></li>
          <li <?php if ($this->uri->segment(2) == "progressProyek") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/progressProyek"><i class="ion ion-ios-circle-outline"></i> Progress</a></li>
          <li <?php if ($this->uri->segment(2) == "finalProyek") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/finalProyek"><i class="ion ion-ios-circle-outline"></i> Final</a></li>
        </ul>
      </li>

      <li <?php if ($this->uri->segment(2) == "keuanganKbm" || $this->uri->segment(2) == "keuanganProyek") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="#" class="has-dropdown"><i class="ion ion-social-bitcoin"></i><span>Keuangan</span></a>
        <ul class="menu-dropdown">
          <li <?php if ($this->uri->segment(2) == "keuanganKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/keuanganKbm"><i class="ion ion-ios-circle-outline"></i> KBM</a></li>
          <li <?php if ($this->uri->segment(2) == "keuanganProyek") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>dashboard/keuanganProyek"><i class="ion ion-ios-circle-outline"></i> Proyek</a></li>
        </ul>
      </li>

      <li class="menu-header">Lainnya</li>
      <li <?php if ($this->uri->segment(2) == "banner") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>dashboard/banner "><i class="fa fa-cubes"></i><span>Banner</span></a>
      </li>

      <li <?php if ($this->uri->segment(2) == "berita") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>dashboard/berita "><i class="fa fa-newspaper"></i><span>Berita</span></a>
      </li>

      <li <?php if ($this->uri->segment(2) == "video") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>dashboard/video "><i class="fa fa-crosshairs"></i><span>Video</span></a>
      </li>

      <li <?php if ($this->uri->segment(2) == "kotakSaran") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
        <a href="<?php echo base_url();?>dashboard/kotakSaran"><i class="fa fa-comment"></i><span>Kotak Saran</span></a>
      </li>

    </ul> 
  </aside>
</div>