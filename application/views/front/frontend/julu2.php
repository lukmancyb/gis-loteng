<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('front/_partial/front_header');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Top Navigation</h1>
        </div>
        <div class="section-body">
            <div id="mapId" data-height="500"></div>
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

