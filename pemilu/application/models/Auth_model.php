<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
  private $table = 'tb_pengguna';

  public function getPenggunaWhere($username){
    $this->db->where('username', $username);
    return $this->db->get($this->table);
  }
}

/* End of file Auth_model.php */
