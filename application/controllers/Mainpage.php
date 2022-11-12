<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	function __construct(){
        parent::__construct();
        // Models
            $this->load->model('M_Tani');
        // Helper URL
			$this->load->helper('url');
		}
	public function index()
	{
		// Page Setup
		$this->load->view('Layout/head');
		$this->load->view('Page/mainpage');
		$this->load->view('Layout/footer');

	}
	public function test()
	{
		// Page Setup
		$this->load->view('Layout2/head');
		$this->load->view('Page//v2/mainpage');
		$this->load->view('Layout2/footer');
	}			
}
