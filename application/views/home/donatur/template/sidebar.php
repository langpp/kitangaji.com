      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url();?>donatur">Kitangaji.com</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="<?php echo base_url();?>assets/dashboard/img/angular.jpg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Ujang Maman</div>
              <div class="user-role">
                Donatur
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li <?php if ($this->uri->segment(2) == "") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="<?php echo base_url();?>donatur"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>

            <li <?php if ($this->uri->segment(2) == "profileGuru" || $this->uri->segment(2) == "profileGuruDetail") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="<?php echo base_url();?>donatur/profileGuru "><i class="ion-ios-people"></i><span>Profile Guru</span></a>
            </li>

            <li <?php if ($this->uri->segment(2) == "kbm" || $this->uri->segment(2) == "detail") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="<?php echo base_url();?>donatur/kbm "><i class="ion ion-speakerphone"></i><span>KBM</span></a>
            </li>

            <li <?php if ($this->uri->segment(2) == "tetap" || $this->uri->segment(2) == "sukarela") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="#" class="has-dropdown"><i class="ion ion-social-bitcoin"></i><span>Donasi</span></a>
              <ul class="menu-dropdown">
                <li<?php if ($this->uri->segment(2) == "tetap") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>donatur/tetap"><i class="ion ion-ios-circle-outline"></i> Tetap</a></li>
                <li<?php if ($this->uri->segment(2) == "sukarela") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>donatur/sukarela"><i class="ion ion-ios-circle-outline"></i> Sukarela</a></li>
              </ul>
            </li>

            <li <?php if ($this->uri->segment(2) == "laporanKbm" || $this->uri->segment(2) == "laporanProyek" || $this->uri->segment(2) == "laporanKeuangan") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="#" class="has-dropdown"><i class="ion ion-clipboard"></i><span>Laporan</span></a>
              <ul class="menu-dropdown">
                <li <?php if ($this->uri->segment(2) == "laporanKbm") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>donatur/laporanKbm"><i class="ion ion-ios-circle-outline"></i> KBM</a></li>
                <li <?php if ($this->uri->segment(2) == "laporanProyek") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>donatur/laporanProyek"><i class="ion ion-ios-circle-outline"></i> Proyek</a></li>
                <li <?php if ($this->uri->segment(2) == "laporanKeuangan") { ?> class="active" <?php }else{?> class="" <?php }?>><a href="<?php echo base_url();?>donatur/laporanKeuangan"><i class="ion ion-ios-circle-outline"></i> Keuangan</a></li>
              </ul>
            </li>

            <li class="menu-header">Lainnya</li>
            <li <?php if ($this->uri->segment(2) == "profile") { ?> class="nav-active active" <?php }else{?> class="" <?php }?>>
              <a href="<?php echo base_url();?>donatur/profile "><i class="ion ion-person"></i><span>My Profile</span></a>
            </li>

            </ul> 
          </aside>
        </div>