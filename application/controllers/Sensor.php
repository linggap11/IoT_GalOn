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
      'jenis_sensor' => $this->input->post('sensor')      
    );

    $this->db->insert('sensor', $data_sensor);
    redirect('alat');
  }

  public function edit($id) {
    $sensor = $this->db->where('id_sensor',$id)->get('sensor')->row();
    echo json_encode($sensor);
  }

  public function update() {
    $sensor = array(
      'jenis_sensor' => strtoupper($this->input->post('sensor'))
    );
    if ($this->SensorModel->update($this->input->post('id_sensor'), $sensor) == true) {
      redirect('alat');
    }
  }

  public function hapus($id) {
    if ($this->SensorModel->hapus($id) == true) {
      redirect ('alat');
    }
  }


}
