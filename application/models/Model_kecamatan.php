<?php
  class Model_kecamatan extends CI_Model {

    
    public $table = 'ref_kecamatan';

    public function get()
    {
      $this->db->select('*');
      $this->db->from($this->table);

    //   $this->db->order_by("suratmasuk_tanggal", "desc"); 
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }else{
        return 0;
      }
    }
    public function getAll()
    {
      // Jalankan query
      $query = $this->db->get($this->table);
      // Return hasil query
      return $query;
    }
  

    public function get_where($where)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->get($this->table);

      // Return hasil query
      return $query;
    }

    public function insert($data)
    {
      // Jalankan query
      $query = $this->db->insert($this->table, $data);

      // Return hasil query
      return $query;
    }

    public function update($where, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->update($this->table, $data);
      
      // Return hasil query
      return $query;
    }

    public function delete($where)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }
    
  }