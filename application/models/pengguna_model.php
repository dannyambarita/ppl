<?php

class roti_model extends CI_model {
    public function tambahDataPengguna($data) 
    {
        $insert = mysqli_query($conn, "INSERT INTO pengguna VALUES 
              ('nama','umur','email',)";    
        $this->db->query($query);
    }
}