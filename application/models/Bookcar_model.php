<?php
class Bookcar_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
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
    
    
        public function create_car_booking()
        {
            $this->load->helper('url');


            $data = array(
                'aid' => $this->input->post('marke'),
                'vid' => $this->input->post('vardas'),
                'nuo' => $this->input->post('nuo'),
                'iki' => $this->input->post('iki')
            );

            return $this->db->insert('rezervavimas', $data);
        }

}