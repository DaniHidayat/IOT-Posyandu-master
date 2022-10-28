<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_DATA_Bayi extends CI_Model{
        // Proses authentication
        function cek_akun($nm_tabel, $kondisi){
            return $this->db->get_where($nm_tabel, $kondisi);
        }
        function save($databayi)
        {
            $this->db->insert('tb_anak', $databayi);
            return TRUE;
        }
        function ambildataperintah($id_alat){
            $this->db->select('*');
            $this->db->from('tb_alat');
            $this->db->where('id_alat',$id_alat);
            $query = $this->db->get();
            if ($query->num_rows()>0) {
                return $query->result();
            }
        }
        // Menambahkan Data ke Database
        function simpan_data($nm_table, $data){
            $this->db->insert($nm_table, $data);
        }
        // Laporan
        function Laporan($nm_tabel, $id_alat, $dari, $sampai){
            
            // $this->db->query("SELECT * FROM tb_sensor");
            // $this->db->select('*');
            // $this->db->from($nm_tabel);
            // $this->db->where('id_alat',$id_alat);
            $sql = "SELECT * FROM $nm_tabel WHERE waktu BETWEEN ? AND ? AND id_alat = ? ORDER BY `tb_sensor`.`waktu` DESC";
            // -- SELECT * FROM $nm_tabel WHERE id = ? AND status = ? AND author = ?
            $query = $this->db->query($sql, array($dari, $sampai, $id_alat));
            return $query;
        }

    //count all
    public function count_all()
    {
        $this->db->from("tb_bayi")->count_all_results();
    }
    function filter_data($search = null, $limit = null, $start = null, $order_field = null, $order_ascdesc = null)
    {

        $this->db->select('*');
        $this->db->from('tb_bayi ');
       

        if (!empty($search)) {
            $this->db->like('kode_bayi', $search); // Untuk 
            $this->db->or_like('nama_anak', $search); // Untuk menambahkan query where LIKE       
        }
        // if($id_alat !== "all" ){
        //     $this->db->where('kode_alat_posyandu', $id_alat);
        // }
       //menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        $query = $this->db->get();
        return $query->result_array();   // Eksekusi query sql sesuai kondisi diatas
    }

    public function count_filter($search)
    {
        $this->db->select('*');
        $this->db->from('tb_bayi ');
  
        if (!empty($search)) {
            $this->db->like('kode_anak', $search); // Untuk 
            $this->db->or_like('nama_anak', $search); // Untuk menambahkan query where LIKE
        }
        // if ($id_alat !== "all") {
        //     $this->db->where('kode_alat_posyandu', $id_alat);
        // }
        $query = $this->db->get();
        return $query->num_rows();  // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }


        // Menampilkan Data Dari Database
        function tampil_data($nm_table,$field,$order){
            
        
            $this->db->select('*');
            $this->db->from($nm_table);
           
            $this->db->order_by($field, $order);
            return $this->db->get();
        }
        function tampil_data_join($nm_tabel, $nm_tabel_join, $on,$field,$order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_2tb($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $field, $order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_4tb($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $nm_tabel_join3, $on3, $nm_tabel_join4, $on4, $field, $order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->join($nm_tabel_join3, $on3);
            $this->db->join($nm_tabel_join4, $on4);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_where($nm_tabel, $nm_tabel_join, $on,$where,$field,$order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->where($where);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_2tb_where($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $where, $field, $order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->where($where);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_2tb_where2($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $where, $where2, $field, $order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->where($where);
            $this->db->where($where2);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        function tampil_data_join_4tb_where($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $nm_tabel_join3, $on3, $nm_tabel_join4, $on4, $where, $field, $order){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->join($nm_tabel_join3, $on3);
            $this->db->join($nm_tabel_join4, $on4);
            $this->db->where($where);
            $this->db->order_by($field, $order);
            return $query = $this->db->get();
        }
        // Menampilkan Data Dari Database dengan kondisi
        function tampil_data_where($nm_table,$field,$order,$where){
            // Mendapatkan nilai dari pengambilan data dari nama tabel yang dikirim 
                $this->db->select('*');
                $this->db->from($nm_table);
                $this->db->order_by($field, $order);
                $this->db->where($where);
                return $this->db->get();
        }

        function tampil_data_where_limit($nm_table,$field,$order,$where,$limit){
            // Mendapatkan nilai dari pengambilan data dari nama tabel yang dikirim 
                $this->db->select('*');
                $this->db->from($nm_table);
                $this->db->order_by($field, $order);
                $this->db->where($where);
                $this->db->limit($limit);
                return $this->db->get();
        }

        // Merubah Data Dari Database
        function edit_data($nm_table, $kondisi){		
            return $this->db->get_where($nm_table,$kondisi);
        }
        function edit_data_join($nm_tabel, $nm_tabel_join, $on, $kondisi){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->where($kondisi);
            return $query = $this->db->get();
        }
        function edit_data_join_2tb($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $where){
            $this->db->select('*');
            $this->db->from($nm_tabel);
            $this->db->join($nm_tabel_join, $on);
            $this->db->join($nm_tabel_join2, $on2);
            $this->db->where($where);
            return $query = $this->db->get();
        }

        // Proses Merubah Data Dari Database
        function proses_update($kondisi,$data,$nm_table){
            $this->db->where($kondisi);
            $this->db->update($nm_table,$data);
        }

        // Menghapus Data Dari Database
        function hapus_data($nm_table, $kondisi){
            $this->db->where($kondisi);
            $this->db->delete($nm_table);
        }
    }
?>