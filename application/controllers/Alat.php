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
  	$this->load->view('admin/alat/alat', $data);
  }

  public function edit($id) {
    $data['data_alat'] = $this->AlatModel->edit($id);
    $this->load->view('admin/alat/edit_alat', $data);
  }

  public function update($id) {
    $data_alat = array(
      'no_seri' => $this->input->post('no_seri'), 
      'nama_alat' => $this->input->post('nama_alat'), 
      'penempatan' => $this->input->post('penempatan'), 
      'status' => $this->input->post('status'), 
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
