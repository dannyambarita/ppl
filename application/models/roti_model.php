<?php

class roti_model extends CI_model {
    private $table = 'pengguna';
    private $db;

    public function __construct()
    {   
        
        $this->db = new db; 
    }

    
}?>

public function __construct() {
        parent::__construct();
        $this->load->model('roti_model');
    }