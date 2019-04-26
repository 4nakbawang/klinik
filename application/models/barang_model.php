<?php
class Barang_model extends CI_Model{
 
   function search_barang($title){
        $this->db->like('nama_barang', $title , 'both');
        $this->db->order_by('id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('m_barang')->result();
    }
}