<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemda extends CI_Controller
{

    public function index()
    {

        $data['nama']   = $this->M_crud->getPerwakilan($this->session->id_perwakilan);
        $data['page']   = 'Dashboard';
        $this->db->select('pemda.nama as napem, perwakilan.nama as naper');
        $this->db->join('perwakilan', 'pemda.id_perwakilan = perwakilan.id');
        $data['data']   = $this->db->get('pemda')->result();

        $this->load->view('header', $data);
        $this->load->view('pemda');
        $this->load->view('footer');
    }
}
