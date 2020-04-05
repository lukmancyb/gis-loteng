<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?=$title;?></h1>
            <div class="section-header-button">
              <a href="<?php echo base_url(); ?>icon/add" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#"><?=$title;?></a></div>
              <div class="breadcrumb-item">All <?=$title;?></div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title"><?=$title;?></h2>
            <p class="section-lead">
              <?=$section;?>
            </p>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">

                    <div class="table-responsive">
                      <table class="table table-striped" id="example1">
                        <thead>
                          <th style="width: 12%; text-align: center">#</th>
                          <th style="width: 5%; text-align: center">No</th>
                          <th>Judul</th>
                          <th style="width: 13%">Tanggal</th>
                          <!-- <th style="width: 10%">Status</th> -->
                        </thead>
                        <tbody>
                        <?php if($icon): ?>
                            <?php $no = 0; foreach($icon as $row): ?>
                          <tr>
                            <td>
                              <a href="<?php echo base_url('icon/edit/' . $row->icon_id); ?>" class="btn btn-warning"   data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="far fa-edit"></i></a>   
                              <a href="<?php echo base_url('icon/delete/' . $row->icon_id); ?>" class="btn btn-danger" id="alert_notif"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"><i class="fas fa-times"></i></a>
                            </td>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->icon_judul; ?></td>
                            <td><?php echo $row->icon_tanggal; ?></td>
                            <!-- <td>
                            <?php 
                              if ($row->icon_status=='1'){
                                echo "<div class='badge badge-primary'>Published</div>";
                              }else{
                                echo "<div class='badge badge-primary'>Not Published</div>";
                              }
                            ?>
                            </td> -->
                          </tr>
                          <?php endforeach; ?>
                            <?php else: ?>
                              <tr>
                                <td class="center-align" colspan="6">Belum ada data icon</td>
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