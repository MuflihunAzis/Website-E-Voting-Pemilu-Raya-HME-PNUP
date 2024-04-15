<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  private $table_calon = 'tb_calon';
  private $table_pengguna = 'tb_pengguna';
  private $table_vote = 'tb_vote';

  public function getCalon(){
    return $this->db->get($this->table_calon);
  }

  public function pilihCalon($id_calon, $id_pengguna){
    $data = [
      'id_calon' => $id_calon,
      'id_pemilih'=> $id_pengguna,
      'date' => date("Y-m-d H:i:s")
    ];
    if($this->db->insert($this->table_vote, $data)){
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update($this->table_pengguna, ['status' => 1]);
        return 1;
    } else {
      return 0;
    }
  }
}
