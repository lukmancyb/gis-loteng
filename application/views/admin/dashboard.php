<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="row mt-4">
      <div class="col-12 col-lg-8 offset-lg-2">
        <div class="wizard-steps">
 
          <div class="wizard-step wizard-step-success">
            <div class="wizard-step-icon">
            </div>
            <div class="wizard-step-label">
             Jumlah Sembuh <h5>100</h5> orang
            </div>
          </div>

          <div class="wizard-step wizard-step-danger">
            <div class="wizard-step-icon">
            <div class="wizard-step-icon">
            </div>
            </div>
            <div class="wizard-step-label">
               Jumlah Positif <h5>100</h5> orang
            </div>
          </div>
          <div class="wizard-step wizard-step-warning">
            <div class="wizard-step-icon">
            <div class="wizard-step-icon">
            </div>
            </div>
            <div class="wizard-step-label">
               Jumlah PDP <h5>100</h5> orang
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row"></div>

  </section>
</div>
<?php $this->load->view('_partials/footer'); ?>