<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
        data-original-title="General"></i>
      </li>

      <li class="<?php if($this->uri->segment(1)==''){echo 'active';} else if($this->uri->segment(1)=='formdata'){echo 'active';} else if($this->uri->segment(1)=='admin'){echo 'active';} ?> nav-item">
        <a href="<?php echo base_url()?>"><i class="ft-home"></i>
          <span class="menu-title" data-i18n="">Dashboard</span>
        </a>
      </li>

      <li class=" nav-item"><a href="#"><i class="ft-file"></i><span class="menu-title" data-i18n="">Guidelines</span></a>
        <ul class="menu-content">
          <li <?php if($this->uri->segment(1)=="greklamasi"){echo 'class="active"';}?>><a class="menu-item" href="<?php echo base_url();?>greklamasi">T2. Reklamasi Hutan</a>
          </li>
          <li <?php if($this->uri->segment(1)=="gproduksi"){echo 'class="active"';}?>><a class="menu-item" href="<?php echo base_url();?>gproduksi">T3. Tahap Produksi</a>
          </li>
          <li <?php if($this->uri->segment(1)=="grehabilitasi"){echo 'class="active"';}?>><a class="menu-item" href="<?php echo base_url();?>grehabilitasi">T4. Rehabilitasi</a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</div>