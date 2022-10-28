<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Simpan extends CI_Controller {
        public function index(){
            echo " dani";
        }

        public function simpanData(
            $kode_anak,
            $nama_anak,
            $tanggal_lahir,
            $berat_badan,
            $tinggi_badan,
            $nama_ayah,
            $nama_ibu,
            $kode_alat_posyandu,
            $suhu_anak)
        {
        $this->load->model('M_Bayi');

        $databayi = array(
            'kode_anak' => $kode_anak,
            'nama_anak'=> $nama_anak,
            'tanggal_lahir' => $tanggal_lahir,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'kode_alat_posyandu' => $kode_alat_posyandu,
            'suhu_anak' => $suhu_anak   );

           
        if ($this->M_Bayi->save($databayi)) {
            echo "BERHASIL";
        } else {
            echo "ERROR";
        }
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