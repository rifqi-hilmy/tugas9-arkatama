<?php
class users extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load library database
        $this->load->database();
    }

    public function get_users() {
        // Jalankan query "select * from users"
        $query = $this->db->get('users');
        
        // Cek apakah query berhasil dijalankan
        if ($query) {
            // Mengembalikan hasil query sebagai array objek
            return $query->result();
        } else {
            // Mengembalikan pesan kesalahan jika query gagal
            return false;
        }
    }
}
