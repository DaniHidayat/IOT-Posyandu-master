<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
        parent::__construct();
        // Models
            $this->load->model('M_Tani');
        // Helper URL
			$this->load->helper('url');
		}
	// public function index()
	// {
	// 	// Page Setup
	// 	$this->load->view('Layout/head');
	// 	$this->load->view('Page/Cetak');
	// 	$this->load->view('Layout/footer');

	// }			
	// function buatlaporan($id_alat, $dari, $sampai){
	function buatlaporan(){

		$this->load->view('Layout/head');
		$id_alat = $this->input->post('id_alat');
		$dari = $this->input->post('dari');
		$date = $this->input->post('sampai');
		$date = strtotime($date);
		$date = strtotime("+1 days", $date);
		$date2 = date('Y-m-d', $date);
		$sampai = $date2;
		
		$data['tb_sensor'] = $this->M_Tani->Laporan('tb_sensor',$id_alat, $dari, $sampai)->result();

		$this->load->view('Page/Alat/cetak_laporan', $data);
		$this->load->view('Layout/footeralat');
	}	
}
