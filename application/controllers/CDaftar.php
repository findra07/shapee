<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CDaftar extends CI_Controller
{

    public function index()
    {
        $this->load->view('daftar.php');
    }

    public function daftar_masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    }
}

/* End of file CDaftar.php */
