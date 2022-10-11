<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        // Import Model
        $this->load->model('M_Tani');
    }
    // Halaman Login
	function index(){
		$this->load->view('Layout/head');
        $this->load->view('Page/login');
		$this->load->view('Layout/footer');
    }
    
	// Pengecekan login
	function auth(){
        $pengguna = $this->input->post('pengguna');
        $sandi = $this->input->post('sandi');
        $sandi_md5 = md5($sandi);

        $where = array(
            'username' => $pengguna,
            'password' => $sandi_md5
        );
        $stat = $this->M_Tani->cek_akun('tb_admin', $where)->num_rows();
        if ($stat > 0) {
            $data = $this->M_Tani->cek_akun('tb_admin', $where)->result();
            foreach ($data as $data);
            $datalogin = array(
                'id_admin'=> $data->id_admin,
                'nama'=> $data->nama,
                'username'=> $data->username,
                'password'=> $data->password
			);
            $this->session->set_userdata($datalogin);
            // echo "Masuk";
            header('location:'.base_url().'../Page/dataalat');
        }else{
            // echo "Tidak Masuk";
            header('location:'.base_url().'../Login');
        }
    }
    // Halaman Alat
	function alat(){
		$this->load->view('Layout/head');
        $this->load->view('Page/loginalat');
		$this->load->view('Layout/footer');
    }
    // Pengecekan login alat
	function authalat(){
        $pengguna = $this->input->post('kodealat');
        $sandi = $this->input->post('sandi');
        $sandi_md5 = md5($sandi);

        $where = array(
            'kode_alat' => $pengguna,
            'sandi_alat' => $sandi_md5
        );
        $stat = $this->M_Tani->cek_akun('tb_alat', $where)->num_rows();
        if ($stat > 0) {
            $data = $this->M_Tani->cek_akun('tb_alat', $where)->result();
            foreach ($data as $data);
            $datalogin = array(
                'id_alat'=> $data->id_alat,
                'suara'=> $data->suara,
                'kode_alat'=> $data->kode_alat,
                'sandi_alat'=> $data->sandi_alat,
                'lokasi'=> $data->lokasi
			);
            $this->session->set_userdata($datalogin);
            header('location:'.base_url().'Pagealat/berandaalat');
        }else{
            header('location:'.base_url().'Login/alat');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        header('location:'.base_url().'Mainpage');
    }
}
