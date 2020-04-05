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
            <h1><?=$title;?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><?=$title;?></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title"><?=$title;?></h2>
            <p class="section-lead">
              <?=$section;?>
            </p>

            <form method="post" id="add-post-form" action="" enctype="multipart/form-data">
              <div class="row mt-sm-12">
                <div class="col-md-8">
                  <div class="card">
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
                        <div class="form-group col-md-12 col-12">
                          <label>Icon</label>
                          <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Pilih Icon</label>
                            <input type="file" name="cover" id="image-upload" />
                          </div>
                        </div>

                        <div class="form-group col-md-12 col-12">
                          <label>Judul icon</label>
                          <input type="text" id="judul" name="judul" class="form-control" value="<?=$icon->icon_judul;?>">
                        </div>

                        <div class="form-group col-md-12 col-12">
                          <label>Publish</label>
                          <select class="form-control" name="status">
                            <option <?php echo ($icon->icon_status === '0') ? 'selected' : ''; ?> value="0">Draft</option>
                            <option <?php echo ($icon->icon_status === '1') ? 'selected' : ''; ?> value="1">Publish</option>
                          </select>
                        </div>

                        <div class="form-group col-md-12 col-12">
                          <button class="btn btn-primary" name="submit" type="submit" value="true"><i class="fas fa-file-pdf"></i> Publish</button>
                          <a class="btn btn-warning" name="submit" href="<?php echo base_url('icon');?>"><i class="fas fa-back"></i> Kembali</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
<?php $this->load->view('_partials/footer'); ?>