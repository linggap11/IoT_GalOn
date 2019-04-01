<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('SensorModel');
    //Codeigniter : Write Less Do More
  }

  public function store() {
    $data_sensor = array(
      'jenis_sensor' => $this->input->post('jenis_sensor'),
      'id_alat' => $this->input->post('id_alat')
    );

    $this->SensorModel->store($data_sensor);
    redirect('alat');
  }

  public function edit($id) {
    $data['data_sensor'] = $this->db->where('id_sensor',$id)->get('sensor')->row();
  }

  public function update($id) {
    $nama = array(
      'jenis_sensor' => $jenis_sensor,
      'id_alat' => $id_alat,
    );
    if ($this->SensorModel->update($id, $data) == true) {
      redirect('alat');
    }
  }

  public function hapus($id) {
    if ($this->SensorModel->hapus($id) == true) {
      redirect ('alat');
    }
  }


}
