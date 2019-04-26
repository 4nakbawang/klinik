<?php
class Layanan_model extends CI_Model{
 
   function search_layanan($title){
        $this->db->like('nama_layanan', $title , 'both');
        $this->db->order_by('id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('m_layanan')->result();
    }
}