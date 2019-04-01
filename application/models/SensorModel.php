<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SensorModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function store($data) {
    $this->db->insert('sensor', $data);
  }

  public function update($id, $data) {
  	$this->db->where('id_sensor', $id)->update('sensor', $data);
  	return true;
  }

  public function hapus($id) {
  	$this->db->delete('sensor', array('id_sensor' => $id));
  	return true;
  }

}
