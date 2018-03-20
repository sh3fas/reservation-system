<?php
class Ordered_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
  
    public function rezerv($vardas = FALSE)
    {
            if ($vardas === FALSE)
            {
                    $query = $this->db->get('rezervavimas');
                    return $query->result_array();
            }

    }
    
    public function get_auto()
        {
                
                $this->db->select('*');
                $this->db->from('automobiliai');
            
                $query = $this->db->get();
                return $query->result_array();
        }
    
    public function get_user()
        {
                $this->db->select('*');
                $this->db->from('vartotojai');
            
                $query = $this->db->get();
                return $query->result_array();
        }
    
    public function deleteProduct($rid){
        $this->db->where('rid', $rid);
        $this->db->delete('rezervavimas');
    }
  
  public function sujungimas()
  {
    $this->db->select('*');
    $this->db->from('rezervavimas');
    $this->db->join('automobiliai', 'rezervavimas.aid = automobiliai.aid', 'left');
    $this->db->join('vartotojai', 'rezervavimas.vid = vartotojai.vid' , 'left');
    $query = $this->db->get();
   
    return $query->result_array();
  }
}
