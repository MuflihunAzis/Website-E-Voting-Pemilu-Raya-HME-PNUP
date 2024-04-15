<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model');
  }

	public function index()
	{
    $data['content'] = $this->Home_model->getCalon()->result();
    $data['page'] = 'pages/home/index';
		$this->view($data);
	}

  public function pilih()
  {
    $id_calon = $this->input->post('id_calon');
    $id_pengguna = $this->session->userdata('id_pengguna');

    $result = $this->Home_model->pilihCalon($id_calon, $id_pengguna);
    if($result == 1){
      $sess_data = [
        'id_pengguna','nama_pengguna','status','is_login'
      ];
      $this->session->unset_userdata($sess_data);
      $this->session->sess_destroy();

      $data['content'] = $this->Home_model->getCalon()->result();
      $data['page'] = 'pages/home/index';
      $data['status_choose'] = "Terima kasih Anda Sudah Memilih";
      $this->view($data);
    } else {
      $data['content'] = $this->Home_model->getCalon()->result();
      $data['page'] = 'pages/home/index';
      $data['status_choose'] = "Anda Gagal Memilih";
      $this->view($data);
    }
  }
}
