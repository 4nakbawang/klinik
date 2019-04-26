<?php
class Pasien_model extends CI_Model{
 
   function search_pasien($title){
        $this->db->like('no_rm', $title , 'both');
        $this->db->order_by('id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('m_pasien')->result();
    }
}