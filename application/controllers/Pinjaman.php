<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjaman extends CI_Controller
{
    public function index()
    {
        $data['nama']       = $this->M_crud->getPerwakilan($this->session->id_perwakilan);
        $data['page']       = 'Pengajuan';
        $data['data']       = $this->M_crud->getPinjamanAll();

        $this->load->view('header', $data);
        $this->load->view('pinjaman');
        $this->load->view('footer');
    }
}
