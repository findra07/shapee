<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CLogin extends CI_Controller
{

    public function index()
    {
        $this->load->view('login.php');
    }

    public function login_user()
    {
        $username_login = $this->input->post('userlogin');
        $password_login = $this->input->post('passlogin');

        $datalogin = $this->db->query("SELECT * FROM tb_user WHERE tb_user.username='$username_login'");
        $cek = $datalogin->num_rows();
    }
}

/* End of file Controllername.php */
