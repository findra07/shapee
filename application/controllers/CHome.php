<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CHome extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }
}

/* End of file Controllername.php */
