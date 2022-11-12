<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Form extends CI_Controller {
        function __construct(){
            parent::__construct();
            // Models
                $this->load->model('M_Tani');
            // Helper URL
                $this->load->helper('url');
            // Session Check
            if($this->session->userdata('id_admin') == ""){
                redirect(base_url("Mainpage"));
            }
            // Setup
           
            // // $this->load->view('Layout2/navbar');
            // $this->load->view('Layout2/sidebar');
        }
        public function index()
        {
        $this->load->view('Page/V2/Form/v_form_input');
        $this->load->view('Layout2/footer');
        }
    }
