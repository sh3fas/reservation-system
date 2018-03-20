<?php
class Bookcar_controller extends CI_Controller {
        
         public function __construct()
        {
                parent::__construct();
                $this->load->model("Bookcar_model");
        }
    

        public function create_booking()
        {
            $data['get_auto'] = $this->Bookcar_model->get_auto();
            $data['get_user'] = $this->Bookcar_model->get_user();
        
            $this->load->helper('form');
            $this->load->library('form_validation');   
            
            $data['title'] = 'Create a car booking';

            $this->form_validation->set_rules('marke', 'vardas', 'required');
            $this->form_validation->set_rules('nuo', 'Nuo', 'required');
            $this->form_validation->set_rules('iki', 'Iki', 'required');
            
            
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('bookcar/bookacar');
                $this->load->view('templates/footer');

            }
            else
            {
                
                $this->Bookcar_model->create_car_booking();
                $this->load->view('templates/header', $data);
                $this->load->view('bookcar/success_car');
                $this->load->view('templates/footer');
            }
        }
            
}