<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      
      // Cek apakah user sudah login
      $this->cekLogin();
      $this->load->model('model_kecamatan');
    }

    public function index(){
        $data = array(
            'title' => 'List Data Kecamatan',
            'section' => 'pada halaman ini anda dapat melihat semua data kecamatan',
            'kecamatan' => $this->model_kecamatan->getAll()->result()
        );
        $this->load->view('admin/kecamatan/kecamatanList', $data);
    }

}

/* End of file Kecamatan.php */
/* Location: ./application/controllers/Kecamatan.php */