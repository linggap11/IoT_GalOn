<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
    $this->load->model('PenggunaanModel');
  }

  function index() {
    if ($this->session->userdata('id_user') == null) {
      return redirect('login');
    } else {
      $data['jum_pengguna'] = $this->db->get('user')->num_rows();
      $data['jum_alat'] = $this->db->get('alat')->num_rows();;
      $data['jum_sensor'] = $this->db->get('sensor')->num_rows();
      $data['jum_penggunaan_air'] = $this->db->get('penggunaan')->num_rows();
      $data['data_pengguna'] = $this->PenggunaanModel->get_data();
      return $this->load->view('admin/dashboard', $data);
    }
  }

  public function daftar_pengguna() {
    $data['data_pengguna'] = $this->db->get('user')->result();
    $this->load->view('admin/user/daftar_pengguna', $data);
  }

  public function store() {
    $data_user = array(
      'no_rfid' => $this->input->post('rfid'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'telp' => $this->input->post('telp'),
    );
    $this->db->insert('user', $data_user);
    $this->session->set_flashdata('tambah_message', 'Data '.$this->input->post('nama').' Berhasil Ditambahkan');
    redirect('pengguna');
  }
  public function edit($id) {
    $data = $this->db->where('id_user',$id)->get('user')->row();
    echo json_encode($data);
  }

  public function update() {
    $data_user = array(
      'no_rfid' => $this->input->post('rfid'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'telp' => $this->input->post('telp'),
    );

    if ($this->UserModel->update($this->input->post('id'), $data_user) == true) {
      redirect('pengguna');
    }
  }

  public function hapus($id) {
    if ($this->UserModel->hapus($id) == true) {
      redirect ('pengguna');
    }
  }


}
