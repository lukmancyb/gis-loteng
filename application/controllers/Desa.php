<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      
      // Cek apakah user sudah login
      $this->cekLogin();
      $this->load->model('model_desa');
    }

    public function index(){
        $data = array(
            'title' => 'List Data Desa',
            'section' => 'pada halaman ini anda dapat melihat semua data desa',
            'desa' => $this->model_desa->getAll()->result()
        );
        $this->load->view('admin/desa/desaList', $data);
    }

}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */