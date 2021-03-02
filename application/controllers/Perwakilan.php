<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perwakilan extends CI_Controller
{

    public function index()
    {

        $data['nama']   = $this->M_crud->getPerwakilan($this->session->id_perwakilan);
        $data['page']   = 'Dashboard';
        $data['data']   = $this->db->get('perwakilan')->result();

        $this->load->view('header', $data);
        $this->load->view('perwakilan');
        $this->load->view('footer');
    }
}
