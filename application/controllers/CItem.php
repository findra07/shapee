<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CItem extends CI_Controller
{

    public function index()
    {
        $this->load->view('item.php');
    }
}

/* End of file CItem.php */
