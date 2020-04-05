<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek apakah user sudah login
        $this->cekLogin();
        $this->load->model('model_siswa');
        $this->load->model('model_kecamatan');
        $this->load->model('model_desa');
        
    }

    public function index()
    {
        $data = array(
            'title' => 'List Peserta Didik',
            'section' => 'pada halaman ini anda dapat melihat semua data Surat Keluar'
        );

        // var_dump($data); die;

        $this->load->view('admin/siswa/siswaListServerside', $data);
    }

    public function cekVerifikasi($id){

        $dataSiswa = $this->model_siswa->getAllWhere(array('id_siswa' => $id))->row();
        $nama_lengkap = $dataSiswa->nama_lengkap;
        $dataPenduduk = $this->model_penduduk->get_like(array('nama_lengkap' => $nama_lengkap))->result();
        
        $data = array(
            'title' => 'Cek Verifikasi Siswa',
            'section' => 'Halaman ini adalah laporan untuk proses verifikasi data siswa',
            'data_siswa' => $dataSiswa,
            'data_penduduk' => $dataPenduduk
        );

        // var_dump($data); die;

        $this->load->view('admin/siswa/siswaVerifikasi', $data);
    }

    public function verifikasi($nama, $ibu)
    {

        // $uri_segement = $this->uri->segment(4);
        // var_dump($uri_segement);die;

        $result = $this->model_penduduk->getStatusSiswa($nama, $ibu)->result();
        return $result;
        // var_dump($result);die;
    }

    public function serversideSiswa()
    {
        $data = array(
            'title' => 'List Peserta Didik',
            'section' => 'pada halaman ini anda dapat melihat semua data Surat Keluar'
        );
        // var_dump($data); die;
        $this->load->view('admin/siswa/siswaListServerside', $data);
    }



    function get_data_siswa()
    {

    }

    public function bySekolah()
    {
        $id = $this->uri->segment(3);
        $data = $this->model_siswa->getSatuanPendidikan(array('kd_desa' => $id))->result();
        var_dump($data);
        die;
    }

    public function byDesa($id)
    {
        $desa = $this->uri->segment(4);
        $data = array(
            'title' => $desa,
            'section' => 'List siswa berdasarkan ' . $desa,
            'siswa' => $this->model_siswa->getByDesa(array('kd_desa' => $id))->result()
        );

        // var_dump($data);die;

        $this->load->view('admin/siswa/siswaList', $data);
    }


    public function getDesaByKecamatan()
    {
        // $id = $this->uri->segment(3);
        $kecamatan_id = $this->input->post('id', TRUE);
        $data = $this->model_desa->get_where(array('id_kecamatan' => $kecamatan_id))->result();
        // var_dump($data);
        echo json_encode($data);
    }


    public function add()
    {
        $data = array(
            'title' => 'Tambah Siswa',
            'section' => 'Halaman untuk tambah siswa baru',
            'kecamatan' => $this->model_kecamatan->getAll()->result(),
            // 'desa' => $this->model_desa->getAll()->result(),
        );

       

            // var_dump($data);die;
        

        // var_dump($data);die;
        $this->load->view('admin/siswa/siswaAdd', $data);
    }

  

   

   
}
