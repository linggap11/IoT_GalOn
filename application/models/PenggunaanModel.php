<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaanModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data() {
    $query = $this->db->from('user')->join('penggunaan', 'penggunaan.id_user = user.id_user')->join('alat', 'penggunaan.id_alat = alat.id_alat')
      ->order_by('id', 'desc')->get()->result();
    return $query;
  }


}
