<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      
      // Cek apakah user sudah login
      $this->cekLogin();

    //   $this->load->model('model_sebaran');
    $this->load->model('model_kecamatan');
    $this->load->model('model_desa');
    }

    public function index(){
        $data = array(
            'title' => 'List Data Lokasi',
            'section' => 'pada halaman ini anda dapat melihat semua data kecamatan',
        );
        $this->load->view('admin/lokasi/v_lokasi', $data);
    }

    
    public function add(){
        $data = array(
            'title' => 'Tambah Lokasi Sebaran',
            'section' => 'pada halaman ini anda dapat melihat semua data kecamatan',
            'kecamatan' => $this->model_kecamatan->getAll()->result(),

        );
        $this->load->view('admin/lokasi/v_lokasiAdd', $data);
    }



}

/* End of file Kecamatan.php */
/* Location: ./application/controllers/Kecamatan.php */