<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlatModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_alatsensor() {
    $query = $this->db->from('alat')->join('det_sensor', 'det_sensor.id_alat = alat.id_alat')
      ->join('sensor', 'det_sensor.id_sensor = sensor.id_sensor')->get()->result();
    return $query;
  }
  public function edit($id) {
  	$query = $this->db->from('alat')->join('det_sensor', 'alat.id_alat = det_sensor.id_alat')->join('sensor', 'sensor.id_sensor = det_sensor.id_sensor')->where('alat.id_alat', $id)->get()->result();
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
