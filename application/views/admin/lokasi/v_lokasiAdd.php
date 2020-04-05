<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $title; ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title"><?= $title; ?></h2>
            <p class="section-lead">
                <?= $section; ?>
            </p>
            <form method="post" id="add-post-form" action="">
                <div class=" mt-sm-12">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>×</span>
                                            </button>
                                            <?php echo validation_errors('<p>', '</p>'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($message = $this->session->flashdata('message')) : ?>
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
                                    <!-- Form Siswa -->
                                    <div class="form-group col-md-6 col-12">
                                        <div class="form-group col-md-12 col-12">
                                            <label>
                                                <h6>Tambah Data</h6>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label>Kecamatan</label>
                                            <select class="form-control select2" id="kd_kecamatan" name="kd_kecamatan" onchange="getDesa()">
                                                <option>No Selection</option>
                                                <?php if ($kecamatan) : ?>
                                                    <?php foreach ($kecamatan as $row) : ?>
                                                        <option value="<?= $row->id_kecamatan; ?>"> <?= $row->nama_kecamatan; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label>Desa</label>
                                            <select class="form-control select2" id="kd_desa" name="kd_desa">
                                                <option>--- Pilih kecamatan terlebih dahulu ---</option>
                                            </select>
                                        </div>
                                        <div class="form-row col-12">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Latitude</label>
                                                <input type="text" id="latitude" name="latitude" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Longitude</label>
                                                <input type="text" id="latitude" name="longitude" class="form-control" required>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- Form orang tua -->
                                    <div class="form-group col-md-6 col-12 w-100">
                                        <div class="form-group col-md-12 col-12">
                                            <label>
                                                <h6>Select Map</h6>
                                            </label>
                                        </div>

                                        <div id="map" data-height="400"></div>
                                    </div>

                                    <div class="form-group col-md-12 col-12">
                                        <button class="btn btn-primary" name="submit" type="submit" value="true"><i class="fas fa-save"></i> Simpan</button>
                                        <a class="btn btn-warning" name="submit" href="<?php echo base_url('lokasi'); ?>"><i class="fas fa-back"></i> Kembali</a>
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

<script type="text/javascript">
    function getDesa() {
        var id = document.getElementById("kd_kecamatan").value;

        console.log(id);
        // var id = $(this).val();
        $.ajax({
            url: '<?php echo base_url(); ?>siswa/getDesaByKecamatan',
            method: "POST",
            data: {
                id: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].id_desa + '>' + data[i].nama_desa + '</option>';
                }
                $('#kd_desa').html(html);
            }
        });
        return false;
    }
</script>
<?php $this->load->view('_partials/footer'); ?>
<?php $this->load->view('admin/lokasi/js/js_lokasi'); ?>