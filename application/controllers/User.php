<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
  }s

  function index() {
    if ($this->session->userdata('id_user') == null) {
      return redirect('login');
    } else {
      return $this->load->view('admin/dashboard');
    }
  }

  public function daftar_pengguna() {
    $data['data_pengguna'] = $this->db->get('user')->result();
    $this->load->view('admin/user/daftar_pengguna', $data);
  }

  public function edit($id) {
    $data['data_pengguna'] = $this->db->where('id_user',$id)->get('user')->row();
  }

  public function update($id) {
    $nama = array(
      'no_rfid' => $no_rfid,
      'nama' => $nama,
      'alamat' => $alamat,
      'telp' => $telp,
      'username' => $username,
      'password' => $password,
    );
    if ($this->UserModel->update($id, $data) == true) {
      redirect('pengguna');
    }
  }

  public function hapus($id) {
    if ($this->UserModel->hapus($id) == true) {
      redirect ('pengguna');
    }
  }


}
