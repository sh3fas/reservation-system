<?php
class Reservation_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    
        public function create_user()
        {
            $this->load->helper('url');


            $data = array(
                'vardas' => $this->input->post('vardas'),
                'pavarde' => $this->input->post('pavarde'),
                'telefonas' => $this->input->post('telefonas'),
                'epastas' => $this->input->post('epastas')
            );

            return $this->db->insert('vartotojai', $data);
        }
}