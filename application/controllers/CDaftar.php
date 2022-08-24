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

        $input = array(
            'username' => $username,
            'password' => $password
        );
        $insert = $this->db->insert('tb_user', $input);

        if ($insert) {
            echo '<script> alert("SELAMAT! Anda Berhasil Register, Silahkan LOGIN ...");window.location.href="' . base_url('CLogin') . '";</script>';
        } else {
            echo "<script> alert('MAAF, Ada Yang Salah')</script>";
            die(redirect('CDaftar', 'refresh'));
        }

        // redirect('CDaftar');
    }
}

/* End of file CDaftar.php */
