<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Perintah extends CI_Controller {
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
        public function updateperintah($id_alat){
            $suara = $this->input->post('suara');

            $data = array(
                'suara' => $suara
            );

            $where = array('id_alat' => $id_alat);
            $this->M_IQM->proses_update($where, $data, 'tb_alat');
            redirect('Pagealat/beranda');
        }
    
        public function tampilan(){
            date_default_timezone_set("Asia/Jakarta");
            $this->load->model('m_belajar');
    
            $data['sensor'] = $this->m_belajar->ambildata();
    
            $this->load->view('view_belajar', $data);
        }
    }
?>