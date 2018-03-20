<?php
class Ordered extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ordered_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
        $data['get_auto'] = $this->ordered_model->get_auto();
        $data['get_user'] = $this->ordered_model->get_user();
            
        $this->load->helper('form');
        $this->load->library('form_validation');   
          
        $data['title'] = ' ';
        $data['sujungimas'] = $this->ordered_model->sujungimas();
        $this->load->view('templates/header', $data);
        $this->load->view('ordered/view-ordered-list', $data);
        $this->load->view('templates/footer');
        }

        public function view($vardas = NULL)
        {
            $data['get_auto'] = $this->Bookcar_model->get_auto();
            
                $data['news_item'] = $this->ordered_model->get_news($vardas);
          if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('ordered/view-ordered-list', $data);
        $this->load->view('templates/footer');
        
        }
    
        public function delete_row($rid)
        {
            $this->load->model('Ordered_model');
            $this->Ordered_model->deleteProduct($rid);
            redirect('ordered/index', 'refresh');
        }
}