<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pagealat extends CI_Controller {
        function __construct(){
            parent::__construct();
            // Models
                $this->load->model('M_Tani');
            // Helper URL
                $this->load->helper('url');
            // Session Check
            if($this->session->userdata('id_alat') == ""){
                redirect(base_url("Mainpage"));
            }
            // Setup
            $this->load->view('Layout/head');

            $where = array('id_alat' => $this->session->userdata('id_alat'));
            $data['tb_alat'] = $this->M_Tani->tampil_data_where('tb_alat','id_alat','ASC',$where)->result();

            $this->load->view('Layout/navbaralat', $data);
            $this->load->view('Layout/sidebaralat');
        }
        function berandaalat(){
            $where = array('id_alat' => $this->session->userdata('id_alat'));
            $data['tb_sensor'] = $this->M_Tani->tampil_data_where_limit('tb_sensor','waktu','DESC',$where,10)->result();
            $data['tb_alat'] = $this->M_Tani->tampil_data_where('tb_alat','id_alat','ASC',$where)->result();

            $this->load->view('Page/Alat/beranda', $data);
            $this->load->view('Layout/footeralat');
        }
            // Perintah ON/OFF Suara
            public function updateperintah(){
                $id_alat = $this->input->post('id_alat');
                $suara = $this->input->post('suara');

                $data = array(
                    'suara' => $suara
                );

                $where = array('id_alat' => $id_alat);
                $this->M_Tani->proses_update($where, $data, 'tb_alat');
                redirect('Pagealat/berandaalat');
            }
        // Next Pengembangan
        // Sensor PH
            // Tampilkan berdasarkan rentang tanggal tertentu dengan max 30 hari dalam bentuk Grafik
            // Tampilkan berdasarkan rentang tanggal tertentu dengan max 30 hari dalam bentuk Tabel
            // Laporan berdasarkan rentang tanggal tertentu dengan max 30 hari

        // Sensor Moisture
            // Tampilkan berdasarkan rentang tanggal tertentu dengan max 30 hari dalam bentuk Grafik
            // Tampilkan berdasarkan rentang tanggal tertentu dengan max 30 hari dalam bentuk Tabel
            // Laporan berdasarkan rentang tanggal tertentu dengan max 30 hari
        // Laporan Bulanan 
        function laporan(){
            $this->load->view('Page/Alat/laporan');
            $this->load->view('Layout/footeralat');
        }

        function buatlaporan(){
            $id_alat = $this->input->post('id_alat');
            $dari = $this->input->post('dari');
            $date = $this->input->post('sampai');
            $date = strtotime($date);
            $date = strtotime("+1 days", $date);
            $date2 = date('Y-m-d', $date);
            $sampai = $date2;

            redirect('Laporan/buatlaporan/'.$id_alat.'/'.$dari.'/'.$sampai);
        }
    }
?>