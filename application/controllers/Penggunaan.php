<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunaan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
	  $this->load->model('PenggunaanModel');
    $this->load->helpers('custome_helper');
    //Codeigniter : Write Less Do More
  }

  public function index() {
  	$data['data_pengguna'] = $this->PenggunaanModel->get_data();
  	$this->load->view('admin/user/penggunaan_air', $data);
  }

  public function test() {
    $data = array(
      'jenis_air' => 'AIR PUTIH',
      'jumlah_air' => 100,
      'id_user' => 1,
      'id_alat' => 1,
    );

    $this->db->insert('penggunaan', $data);
    $this->session->set_flashdata('sukses', 'Berhasil');
    redirect('dashboard');
  }

}
