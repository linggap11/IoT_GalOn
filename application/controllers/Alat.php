<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
	  $this->load->model('AlatModel');
    //Codeigniter : Write Less Do More
  }

  function index() {
  	$data['data_alat'] = $this->db->get('alat')->result();
  	$data['data_sensor'] = $this->db->get('sensor')->result();
  	$data['det_sensor'] = $this->AlatModel->get_alatsensor();
  	$this->load->view('admin/alat/alat', $data);
  }

  public function store() {
    $data_alat = array(
      'no_seri' => $this->input->post('no_seri'),
      'nama_alat' => $this->input->post('nama_alat'),
      'penempatan' => $this->input->post('penempatan'),
      'status_alat' => $this->input->post('status'),
      'kondisi' => $this->input->post('kondisi'),
    );
    $this->db->insert('alat', $data_alat);
    $id = $this->db->select('id_alat')->order_by('id_alat','desc')->get('alat')->row();
    $sensor = $this->input->post('sensor');
    $jum_sensor = count($this->input->post('sensor'));
    for ($i=0; $i < $jum_sensor; $i++) {
      $det_sensor = array(
        'id_alat' => $id->id_alat,
        'id_sensor' => $sensor[$i],
      );
      $this->db->insert('det_sensor', $det_sensor);
    }

    redirect('alat');
  }

  public function edit($id) {
    $alat = $this->AlatModel->edit($id);
    echo json_encode($alat);
  }

  public function update($id) {
    $data_alat = array(
      'no_seri' => $this->input->post('no_seri'),
      'nama_alat' => $this->input->post('nama_alat'),
      'penempatan' => $this->input->post('penempatan'),
      'status_alat' => $this->input->post('status'),
      'kondisi' => $this->input->post('kondisi'),
    );
    if ($this->AlatModel->update($id, $data_alat) == true) {
      redirect ('alat');
    }
  }

  public function hapus($id) {
    if ($this->AlatModel->hapus($id) == true) {
      redirect('alat');
    }

  }

}
