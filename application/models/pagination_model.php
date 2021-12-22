<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Pagination_model extends CI_Model {

      public function get_data($limit,$start) 
     {
         $query = $this->db->get('mobil',$limit,$start);
         return $query; 
     }
     public function countdata()
     {
     	return $this->db->get('mobil')->num_rows();
     }
  
}
?>