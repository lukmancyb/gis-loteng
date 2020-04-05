<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sebaran extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      
      // Cek apakah user sudah login
      $this->cekLogin();

    //   $this->load->model('model_sebaran');
   
    }

    public function index(){
        $data = array(
            'title' => 'List Data Sebaran',
            'section' => 'pada halaman ini anda dapat melihat semua data sebaran',
        );
        $this->load->view('admin/sebaran/v_sebaranList', $data);
    }

    
  



}

/* End of file Kecamatan.php */
/* Location: ./application/controllers/Kecamatan.php */