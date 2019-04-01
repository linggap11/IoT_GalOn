<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_login($username , $password) {
    $query = $this->db->from('user')->where('username', $username)->where('password', $password)->get()->row();
    return $query;
  }

  public function update($id, $data) {
  	$this->db->where('id_user', $id)->update('user', $data);
  	return true;
  }

  public function hapus($id) {
  	$this->db->delete('user', array('id_user' => $id));
  	return true;
  }

  
}
