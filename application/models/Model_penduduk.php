<?php
  class Model_penduduk extends CI_Model {

    public $table = 'ms_penduduk';
    public $column_order = array(null, 'nama_lengkap','alamat'); //field yang ada di table user
    public $column_search = array('nama_lengkap','alamat'); //field yang diizin untuk pencarian 
    public $order = array('nama_lengkap' => 'asc'); // default order

    public function get()
    {
      $this->db->select('*');
      $this->db->from($this->table);

      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }else{
        return 0;
      }
    }

  

    public function getStatusSiswa($nama, $nama_ibu){
        $nama_tabel = $this->table;
        $nama_siswa = addslashes($nama);
        $ibu = addslashes($nama_ibu);
        $this->db->select("*");
        $this->db->from($nama_tabel);
        $this->db->where("nama_lengkap LIKE '$nama_siswa%' AND nama_ibu LIKE '$ibu%' ");
        $query = $this->db->get();
        return $query;
    }

    /*Fungsi GetAll*/
    public function getAll()
    {
      // Jalankan query
      $query = $this->db->get($this->table);
      // Return hasil query
      return $query;
    }

    function get_datatables()
    {
        $this->db->select("{$this->table}.*, ref_satuan_pendidikan.*");
        $this->_get_datatables_query();
        $this->db->join("ref_satuan_pendidikan", "ref_satuan_pendidikan.id_npsn = {$this->table}.kd_satuan_pendidikan", "left");
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }


    private function _get_datatables_query()
    {
         
      // $this->db->select('a.*, b.*')
      //          ->from('ms_siswa a')
      //          ->join('ref_satuan_pendidikan b', 'b.id_npsn = a.id_satuan_pendidikan', 'left')
      //          ->get();
      $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    function count_filtered()
    {
      $this->db->select("{$this->table}.*, ref_satuan_pendidikan.*");
        $this->_get_datatables_query();
      $this->db->join("ref_satuan_pendidikan", "ref_satuan_pendidikan.id_npsn = {$this->table}.kd_satuan_pendidikan", "left");
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
      $this->db->select("{$this->table}.*, ref_satuan_pendidikan.*");
      $this->_get_datatables_query();
      $this->db->join("ref_satuan_pendidikan", "ref_satuan_pendidikan.id_npsn = {$this->table}.kd_satuan_pendidikan", "left");
        return $this->db->count_all_results();
    }

    /*Fungsi Get AllWhere*/
    public function getAllWhere($where)
    {
      $query = $this->db
      ->select('a.*, kec.nama_kecamatan')
      ->from('ms_penduduk a')
      ->join('ref_kecamatan kec', 'kec.id_kecamatan = a.kd_kecamatan', 'left')
      ->where($where)
      ->get();
      return $query;
    }

    /*Fungsi Get ByDesa*/
    public function getByDesa($where)
    {
      $query = $this->db
      ->select('a.*, des.*')
      ->from('ms_penduduk a')
      ->join('ref_desa des', 'des.id_desa = a.kd_desa', 'left')
      ->where($where)
      ->get();
      return $query;
    }

    /*Fungsi Get Where*/
    public function get_where($where)
    {
      $query = $this->db
        ->where($where)
        ->get($this->table);
      return $query;
    }
    public function get_like($where)
    {
      $query = $this->db
        ->like($where)
        ->get($this->table);
      return $query;
    }

    /*Fungsi Insert*/
    public function insert($data)
    {
      $query = $this->db->insert($this->table, $data);
      return $query;
    }

    /*Fungsi Update*/
    public function update($where, $data)
    {
      $query = $this->db
        ->where($where)
        ->update($this->table, $data);
      return $query;
    }

    /*Fungsi Delete*/
    public function delete($where)
    {
      $query = $this->db
        ->where($where)
        ->delete($this->table);
      return $query;
    }
    
  }

/* End of file Model_penduduk.php */
/* Location: ./application/models/Model_penduduk.php */