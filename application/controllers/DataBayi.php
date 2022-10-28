<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataBayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Models
        $this->load->model('M_DATA_Bayi');
        $this->load->model('M_Tani');
        // Helper URL
        $this->load->helper('url');
        // Session Check
        if ($this->session->userdata('id_admin') == "") {
            redirect(base_url("Mainpage"));
        }
        // Setup

        // // $this->load->view('Layout/V2/navbar');
        // $this->load->view('Layout/V2/sidebar');
    }
    function beranda()
    {
        $this->load->view('Page/v2/DataBayi/beranda');
        $this->load->view('Layout/v2/Bayi/footer');
    }

    // ALAT


    public function showBayi()
    {

       

        $search = isset($_POST['search']['value']) ? $_POST['search']['value'] : ' '; // Ambil data yang di ketik user pada textbox pencarian
        $limit = isset($_POST['length']) ? $_POST['length'] : ' '; // Ambil data limit per page
        $start = isset($_POST['start']) ? $_POST['start'] : ''; // Ambil data start
        $order_index = isset($_POST['order'][0]['column']) ? $_POST['order'][0]['column'] : ' '; // Untuk mengambil index yg menjadi acuan untuk sorting
        $order_field = isset($_POST['columns'][$order_index]['data']) ? $_POST['columns'][$order_index]['data'] : ''; // Untuk mengambil nama field yg menjadi acuan untuk sorting
        $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
        // $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
        $sql_total = $this->M_DATA_Bayi->count_all(); // Panggil fungsi count_all  
        $sql_data = $this->M_DATA_Bayi->filter_data($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter
        $sql_filter = $this->M_DATA_Bayi->count_filter($search); // Panggil fungsi count_filter 
        $callback = array(
            'draw' => $_POST['draw'], // Ini dari datatablenya
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback); // Convert array $callback ke json
    }


    function tambahalat()
    {
        $this->load->view('Page/plusalat');
        $this->load->view('Layout/footer');
    }
    function prosestambah()
    {

        $kode = $this->input->post('kode');
        $nama_anak = $this->input->post('nama_anak');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        // $berat_badan = $this->input->post('berat_badan');
        // $tinggi_badan = $this->input->post('tinggi_badan');
        // $lingkar_lengan = $this->input->post('lingkar_lengan');
        // $lingkar_kepala = $this->input->post('lingkar_kepala');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');




        $data = array(
            'kode_bayi' => $kode,
            'nama_anak' => $nama_anak,
            'tanggal_lahir' => $tanggal_lahir,
            // 'berat_badan' => $berat_badan,
            // 'tinggi_badan' => $tinggi_badan,
            // 'lingkar_lengan' => $lingkar_lengan,
            // 'lingkar_kepala' => $lingkar_kepala,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
        );
        $this->M_Bayi->simpan_data('tb_bayi', $data);
        redirect('DataBayi/databayi');
    }
    function databayi()
    {
        $data['tb_anak'] = $this->M_DATA_Bayi->tampil_data('tb_bayi', 'id', 'ASC')->result();
        $data['tbl_alat'] = $this->M_Tani->tampil_data('tb_alat', 'id_alat', 'ASC')->result();
        $this->load->view('Page/V2/Databayi/v_data_bayi', $data);
        $this->load->view('Layout/V2/footer');
    }
    function editbayi($id_alat)
    {
        $where = array('id_alat' => $id_alat);
        $data['tb_alat'] = $this->M_Tani->edit_data('tb_alat', $where)->result();


        $this->load->view('Page/ubahalat', $data);
        $this->load->view('Layout/footer');
    }
    function prosesubah()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $nama_anak = $this->input->post('nama_anak');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        // $berat_badan = $this->input->post('berat_badan');
        // $tinggi_badan = $this->input->post('tinggi_badan');
        // $lingkar_lengan = $this->input->post('lingkar_lengan');
        // $lingkar_kepala = $this->input->post('lingkar_kepala');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');




        $data = array(
            'kode_bayi' => $kode,
            'nama_anak' => $nama_anak,
            'tanggal_lahir' => $tanggal_lahir,
            // 'berat_badan' => $berat_badan,
            // 'tinggi_badan' => $tinggi_badan,
            // 'lingkar_lengan' => $lingkar_lengan,
            // 'lingkar_kepala' => $lingkar_kepala,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
        );

        $where = array('id' => $id);
        $this->M_Tani->proses_update($where, $data, 'tb_bayi');
        redirect('DataBayi/databayi');
    }

    //End Alat


}
