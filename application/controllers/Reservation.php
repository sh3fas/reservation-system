<?php
class Reservation extends CI_Controller {
        
         public function __construct()
        {
                parent::__construct();
                $this->load->model('reservation_model');
                $this->load->helper('url_helper');
        }    
    
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a new user';

            $this->form_validation->set_rules('vardas', 'Vardas', 'required');
            $this->form_validation->set_rules('pavarde', 'Pavarde', 'required');
            $this->form_validation->set_rules('telefonas', 'Telefonas', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('reservation/registration');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->reservation_model->create_user();
                $this->load->view('templates/header', $data);
                $this->load->view('reservation/success');
                $this->load->view('templates/footer');
            }
        }
}