<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title;?></h1>
            <!-- <div class="section-header-button">
              <a href="<?php echo base_url(); ?>desa/add" class="btn btn-success">Tambah desa</a>
            </div> -->
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><?php echo $title;?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
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
                    <div class="table-responsive">
                      <table class="table table-striped" id="example1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">#</th>
                            <th>Kode Kecamatan</th>
                            <th>Status Desa</th>
                            <th>Kode Desa</th>
                            <th>Nama Desa</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if($desa): ?>
                            <?php $no = 0; foreach($desa as $row): ?>                                 
                            <tr>
                              <td><?php echo ++$no; ?></td>
                              <td><?php echo $row->id_kecamatan; ?></td>
                              <td><?php echo $row->status_desa; ?></td>
                              <td><?php echo $row->kd_desa; ?></td>
                              <td><?php echo $row->nama_desa; ?></td>
                              <!-- <td>
                                <a href="<?=base_url();?>desa/delete/<?= $row->id_desa;?>" class="btn btn-icon btn-danger">
                                  <i class="fas fa-times"></i>
                                </a>
                                <a href="<?=base_url();?>desa/edit/<?= $row->id_desa;?>" class="btn btn-icon btn-primary">
                                  <i class="far fa-edit"></i>
                                </a>
                              </td> -->
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                              <tr>
                                <td class="center-align" colspan="6">Belum ada data satuan pendidikan</td>
                              </tr>
                            <?php endif; ?>       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_partials/footer'); ?>
