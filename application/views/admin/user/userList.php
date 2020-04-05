<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title;?></h1>
            <div class="section-header-button">
              <a href="<?php echo base_url(); ?>user/add" class="btn btn-success">Tambah User</a>
            </div>
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
                    <div class="table-responsive">
                      <table class="table table-striped" id="example1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">#</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Jabatan</th>
                            <th>Active</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if($users): ?>
                            <?php $no = 0; foreach($users as $row): ?>                                 
                            <tr>
                              <td><?php echo ++$no; ?></td>
                              <td><?php echo $row->nama; ?></td>
                              <td><?php echo $row->username; ?></td>
                              <td><?php echo $row->level; ?></td>
                              <td><?php echo $row->jabatan; ?></td>
                              <td class="align-middle"><?php echo $row->active; ?></td>
                              <td>

                                <?php
                                  if($row->level == 'administrator'){
                                    echo "No Action";
                                  }
                                  else{
                                    echo"<a href='".base_url('user/edit/' . $row->id)."' class='btn btn-warning'data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'><i class='far fa-edit'></i></a>   
                                    <a href='".base_url('user/delete/' . $row->id)."' class='btn btn-danger' id='alert_notif' data-toggle='tooltip' data-placement='top' title='' data-original-title='Hapus'><i class='fas fa-times'></i></a>";
                                  }
                                ?>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                              <tr>
                                <td class="center-align" colspan="6">Belum ada data user</td>
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
