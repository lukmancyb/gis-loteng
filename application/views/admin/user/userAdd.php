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
            <form method="post" id="add-user-form" method="post" action="" enctype="multipart/form-data">
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
                    <label>Nama Lengkap</label>
                    <input type="text" id="namalengkap" name="namalengkap" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>No. Telpon</label>
                    <input type="tel" id="telp" name="telp" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Level User</label>
                      <select class="form-control" id="level" name="level">
                        <option value="ketua"> Ketua</option>
                        <option value="sekretaris"> Sekretaris</option>
                        <option value="komisioner"> Komisioner</option>
                        <option value="kasubbag"> Kasubbag</option>
                        <option value="staff_entri"> Staff Entri</option>                        
                        <option value="staff"> Staff</option>
                      </select>
                  </div>

                  <div class="form-group col-md-4 col-12">
                    <label>Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control">
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Atasan</label>
                      <select class="form-control" id="atasan" name="atasan">
                        <option value=""> Tidak Ada</option>
                        <?php 
                          $this->db->select('*');
                          $this->db->from('users');
                          $this->db->where_not_in('level', 'administrator');
                          $user = $this->db->get()->result();
                          foreach($user as $row){
                        ?>
                          <option value="<?=$row->id;?>"> <?=$row->nama .' - '. $row->jabatan;?></option>

                        <?php } ?>
                      </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary" name="submit" value="true">Simpan</button>
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