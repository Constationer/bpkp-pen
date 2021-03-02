<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $data['nama']   = $this->M_crud->getPerwakilan($this->session->id_perwakilan);
        $data['page']   = 'Dashboard';

        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}
