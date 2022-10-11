<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Simpan extends CI_Controller {
        public function index(){
        }
        public function bacaperintah($id_alat){
            $this->load->model('M_Tani');

            // $id_alat = 1;
            $alat = $this->M_Tani->ambildataperintah($id_alat);

            foreach($alat as $perintah){
                if ($perintah->suara == 0) {
                    echo "OFF";
                }
                if ($perintah->suara == 1) {
                    echo "ON";
                }
                
            }
        }
        public function sensor($id_alat,$ph,$mt){
            $this->load->model('M_Tani');
            date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d H:i:s');
    
                $datasensor = array('id_alat' => $id_alat, 'ph' => $ph,'moisture' => $mt, 'waktu' => $tgl);
    
                if($this->M_Tani->save($datasensor)){
                    echo "BERHASIL";
                }else{
                    echo "ERROR";
                }
        }
        // public function sensor($id_alat,$ph,$mt){
            //     $this->load->model('M_Tani');
            //     date_default_timezone_set('Asia/Jakarta');
            //         $tgl = date('Y-m-d H:i:s');
            //         $datasensor = array('id_alat' => $id_alat, 'ph' => $ph,'moisture' => $mt, 'waktu' => $tgl);
            //         if($this->M_Tani->save($datasensor)){
            //             echo "BERHASIL";
            //         }else{
            //             echo "ERROR";
            //         }
            //         $this->load->model('M_Tani');
            //     // Perintah 
            //     $alat = $this->M_Tani->ambildataperintah($id_alat);
            //     foreach($alat as $perintah){
            //         if ($perintah->suara == 0) {
            //             echo "OFF";
            //         }
            //         if ($perintah->suara == 1) {
            //             echo "ON";
            //         }
            //     }
        // }
    
        public function tampilan(){
            date_default_timezone_set("Asia/Jakarta");
            $this->load->model('m_belajar');
    
            $data['sensor'] = $this->m_belajar->ambildata();
    
            $this->load->view('view_belajar', $data);
        }
    }
?>