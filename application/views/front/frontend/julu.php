<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('front/_partial/front_header');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <center>
                <h1><?= $title; ?> <br>Tanggal 22 - 23 Maret<h5>
                </h1>
            </center>
        </div>
        <div class="alert alert-warning alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Info</div>
                <div id="banyak"></div>
                <em>"Dirumah aja ya "</em>
            </div>
        </div>
        <div class="section-body">
            <div id="mapId" style="height: 500px"></div>
        </div>
    </section>
</div>

<?php $this->load->view('front/_partial/front_footer'); ?>
<style>
    .myCSSClass {
        background: none;
        border: none;
        box-shadow: none;
    }

    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        line-height: 30px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>
<script src="<?= base_url(); ?>assets/json/staticdata.js"></script>
<script src="<?= base_url(); ?>assets/json/datastate2.js"></script>
<script src="<?= base_url(); ?>assets/js/app.js"></script>
<script>
    $(document).ready(function(){
        $('#banyak').append(`<h6> Total PMI yang pulang sebanyak ${jumlah} Orang Tersebar di 12 Kecamatan </h6>`);

    });
</script>