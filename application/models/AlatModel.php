<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlatModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function edit($id) {
  	$query = $this->db->where('id_alat', $id)->get('alat')->row();
  	return $query;
  }

  public function update($id, $data) {
  	$this->db->where('id_alat', $id)->update('alat', $data);
  	return true;
  }	

  public function hapus($id) {
  	$this->db->delete('alat', array('id_alat' => $id));
  	return true;
  }

}
