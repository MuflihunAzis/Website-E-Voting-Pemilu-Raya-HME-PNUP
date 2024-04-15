<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }
  

  public function index()
  {
    $this->load->view('auth');
  }

  public function authenticate()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek_pengguna = $this->Auth_model->getPenggunaWhere($username);
    if($cek_pengguna->num_rows() > 0){
      $hasil = $cek_pengguna->row();
      if($password === $hasil->password){
        $this->session->set_userdata('id_pengguna', $hasil->id_pengguna);
        $this->session->set_userdata('nama_pengguna', $hasil->nama_pengguna);
        $this->session->set_userdata('status', $hasil->status);
        $this->session->set_userdata('is_login', TRUE);
        redirect(base_url('/'));
      } else {
        $this->session->set_flashdata('alert','Password salah !');
        redirect(base_url('auth'));
      }
    } else {
        $this->session->set_flashdata('alert','Username tidak ditemukan !');
        redirect(base_url('auth'));
    }
  }

  public function logout()
  {
    $sess_data = [
      'id_pengguna','nama_pengguna','status','is_login'
    ];
    $this->session->unset_userdata($sess_data);
    $this->session->sess_destroy();
    redirect(base_url());
  }
}

/* End of file Auth.php */
