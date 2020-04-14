<?php

class Useradmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
            $this->load->view('templates/header');
            $this->load->view('useradmin/index');

    }
}
