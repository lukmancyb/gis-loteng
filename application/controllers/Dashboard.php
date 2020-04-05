<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
  public function __construct()
  {
    parent::__construct();

    // Cek apakah user sudah login
    $this->cekLogin();



  }

  public function index() {
    $data = array(
      'title' => "Dashboard",

    );
    $this->load->view('admin/dashboard', $data);
    
  }
}