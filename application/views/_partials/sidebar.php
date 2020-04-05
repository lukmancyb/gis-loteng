<?php
defined('BASEPATH') or exit('No direct script access allowed');
$url = $this->uri->uri_string();
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>">Sebaran Covid-19</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>">Diskominfo</a>
    </div>
    <ul class="sidebar-menu">
      <li class="<?=$url == 'dashboard' || $url == '' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a>
      </li>
      <li class="menu-header">DATA MASTER</li>
      <li class="<?=$url == 'siswa' || $url == 'siswa/add'  ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url(); ?>sebaran"><i class="fas fa-user"></i> <span>Data Sebaran</span></a>
      </li>


      
      <li class="<?= $url== 'satpen' ||  $url== 'layanan' ||  $url== 'benpen' ||  $url== 'kecamatan' ||  $url== 'desa' ? 'dropdown active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Referensi</span></a>
        <ul class="dropdown-menu">
        <li class="<?= $url== 'lokasi' ? 'active' : ''; ?>"><a class="nav-link" href="<?= base_url(); ?>lokasi">Lokasi</a></li>
          <li class="<?= $url== 'kecamatan' ? 'active' : ''; ?>"><a class="nav-link" href="<?= base_url(); ?>kecamatan">Kecamatan</a></li>
          <li class="<?= $url== 'desa' ? 'active' : ''; ?>"><a class="nav-link" href="<?= base_url(); ?>desa">Desa</a></li>
        </ul>
      </li>
      <!-- <li class="menu-header">Manajemen User</li>
      <li class="<?=$url == 'user' || $url == 'user/add' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>user"><i class="fas ion-android-contacts"></i> <span>Master Pengguna</span></a>
      </li> -->
      <li class="menu-header">Menu Profile</li>
      <li class="<?=$url == 'profile' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>profile"><i class="fas fa-user"></i> <span>Profile</span></a>
      </li>
      <li class="menu-header">Keluar Sistem</li>
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="<?php echo base_url(); ?>auth/logout" class="btn btn-success btn-lg btn-block btn-icon-split" id="sugul_notif">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </div>
    </ul>
  </aside>
</div>