<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index() {
    return $this->load->view('admin/login.php');

  }

  public function login_sumbit() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $result = $this->UserModel->get_login($username, $password);

    if (!empty($result)) {
      print_r($result);
      $session_user = array(
        'id_user' => $result->id_user,
        'username' => $result->username,
      );
      $this->session->set_userdata($session_user);
      redirect('dashboard');
    } else {
      $this->session->set_flashdata('warning', 'Username atau Password Anda salah');
			redirect('login','refresh');
    }
  }

  public function logout() {
    $session = array('id_user');
    $this->session->unset_userdata($session);
    redirect('login');
  }
}
