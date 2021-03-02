<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('login');
	}

	public function do_login()
	{
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$query      = $this->db->where('username', $username)
			->where('password', $password)
			->get('users');

		if ($query->num_rows() == '1') {
			$userdata = $query->row();
			$data = array(
				'id_perwakilan'		=> $userdata->id_perwakilan,
				'username'  		=> $userdata->username,
				'password'			=> $userdata->password
			);

			$this->session->set_userdata($data);
			redirect('home');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar / salah kata sandi.</div>');
			redirect('');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_perwakilan');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar.</div>');

		redirect('');
	}
}
