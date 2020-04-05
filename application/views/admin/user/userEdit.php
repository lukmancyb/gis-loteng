<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?php echo base_url($this->uri->segment(1)); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>
        <?php echo $title; ?>
      </h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">
          <?php echo $title; ?>
        </div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-sm-12">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form method="post" id="edit-user-form" method="post" action="">
              <div class="card-body">
              <?php if(validation_errors()): ?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>×</span>
                    </button>
                    <?php echo validation_errors('<p>', '</p>'); ?>
                  </div>
                </div>
                <?php endif; ?>
                <?php if($message = $this->session->flashdata('message')): ?>
                <div class="alert <?php echo ($message['status']) ? 'alert-success' : 'alert-danger'; ?> alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                      <span>×</span>
                    </button>
                    <?php echo $message['message']; ?>
                  </div>
                </div>
                <?php endif; ?>
                <div class="row">
                  <div class="form-group col-md-4 col-12">
                    <label>Username</label>
                    <input type="text" id="username" name="username" value="<?php echo $user->username; ?>" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label>Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control" value="<?=$user->jabatan;?>">
                  </div>
                  
                  <div class="form-group col-md-4 col-12">
                    <label>Aktif</label>
                      <select class="form-control" name="active">                        
                        <option <?php echo ($user->active === '0') ? 'selected' : ''; ?> value="0">Tidak Aktif</option>
                        <option <?php echo ($user->active === '1') ? 'selected' : ''; ?> value="1">Aktif</option>
                      </select>
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label>Level</label>
                      <select class="form-control" name="level">                        
                        <option <?php echo ($user->level === '') ? 'selected' : ''; ?> value=""></option>
                        <option <?php echo ($user->level === 'ketua') ? 'selected' : ''; ?> value="ketua">Ketua</option>
                        <option <?php echo ($user->level === 'sekretaris') ? 'selected' : ''; ?> value="sekretaris">Sekretaris</option>
                        <option <?php echo ($user->level === 'komisioner') ? 'selected' : ''; ?> value="komisioner">Komisioner</option>
                        <!-- <option <?php echo ($user->level === 'sekretaris') ? 'selected' : ''; ?> value="sekretaris">Pegawai</option> -->
                        <option <?php echo ($user->level === 'kasubbag') ? 'selected' : ''; ?> value="kasubbag">Kasubbag</option>
                        <option <?php echo ($user->level === 'staff') ? 'selected' : ''; ?> value="staff">Staff</option>
                        <option <?php echo ($user->level === 'staff_entri') ? 'selected' : ''; ?> value="staff_entri">Staff Entri</option>
                      </select>
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label>Atasan</label>
                      <select class="form-control" name="atasan">                        
                        <option <?php echo ($user->atasan === '') ? 'selected' : ''; ?> value="">Tidak ada</option>
                        <?php 
                          $this->db->select('*');
                          $this->db->from('users');
                          $this->db->where_not_in('level', 'administrator');
                          $users = $this->db->get()->result();
                          foreach($users as $row){
                        ?>
                        <option <?php echo ($user->atasan === "'$row->atasan'") ? 'selected' : ''; ?> value="<?=$row->id;?>"> <?=$row->nama. '-' . $row->jabatan;?></option>

                          <?php }?>
                      </select>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" name="submit" type="submit" value="<?php echo $user->id; ?>">Simpan</button>
                <!-- <a href="<?php echo base_url();?>" class="btn btn-danger">Kembali</a> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_partials/footer'); ?>