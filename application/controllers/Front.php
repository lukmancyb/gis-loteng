<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    

  }

  public function index()
  {
   
    $data = array(
      'title' => 'Peta Sebaran Kepulangan Pekerja Migran Indonesia (PMI) Kabupaten Lombok Tengah'
    );
    // Jalankan view template/layout
    $this->load->view('front/frontend/julu', $data);
  }

 
}