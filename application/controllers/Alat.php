<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Alat extends CI_Controller {
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
           
            // // $this->load->view('Layout/V2/navbar');
            // $this->load->view('Layout/V2/sidebar');
        }
        function beranda(){
            $this->load->view('Page/v2/Alat/beranda');
            $this->load->view('Layout/v2/Alat/footer');
        }

    // ALAT

    public function showAlat()
    {
        $data = array('data' => $this->M_Tani->tampil_data('tb_alat', 'id_alat', 'ASC')->result());
         echo json_encode($data);
       
    }
        function tambahalat(){
            $this->load->view('Page/plusalat');
            $this->load->view('Layout/footer');
        }
        function prosestambahalat(){
            $kode = $this->input->post('kode');
            $sandi = $this->input->post('sandi');
            $sandi_md5 = md5($sandi);
            $lokasi = $this->input->post('lokasi');

            $data = array(
                'suara' => 0,
                'kode_alat' => $kode,
                'sandi_alat' => $sandi_md5,
                'sandi_alat_deskripsi' => $sandi,
                'lokasi' => $lokasi
            );
            $this->M_Tani->simpan_data('tb_alat', $data);
            redirect('Alat/dataalat');
        }
        function dataalat(){
            $data['tb_alat'] = $this->M_Tani->tampil_data('tb_alat','id_alat','ASC')->result();
            
            $this->load->view('Page/V2/Alat/dataalat',$data);
            $this->load->view('Layout/V2/footer');
        }
        function editalat($id_alat){
            $where = array('id_alat' => $id_alat);
            $data['tb_alat'] = $this->M_Tani->edit_data('tb_alat', $where)->result();
            
            
            $this->load->view('Page/ubahalat',$data);
            $this->load->view('Layout/footer');
        }
        function prosesubahalat(){
            $id_alat = $this->input->post('id');
            $kode = $this->input->post('kode');
            $sandi = $this->input->post('sandi');
            $sandi_md5 = md5($sandi);
            $lokasi = $this->input->post('lokasi');

            $data = array(
                'suara' => 0,
                'kode_alat' => $kode,
                'sandi_alat' => $sandi_md5,
                'sandi_alat_deskripsi' => $sandi,
                'lokasi' => $lokasi
            );

            $where = array('id_alat' => $id_alat);
            $this->M_Tani->proses_update($where, $data, 'tb_alat');
            redirect('Alat/dataalat');
            
        }

        //End Alat
   

    }
?>