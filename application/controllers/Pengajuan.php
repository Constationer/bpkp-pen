<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function index()
    {
        $data['nama']       = $this->M_crud->getPerwakilan($this->session->id_perwakilan);
        $data['page']       = 'Pengajuan';
        $data['pemda']      = $this->M_crud->getPemda($this->session->id_perwakilan);
        $data['data']       = $this->M_crud->getPinjaman($this->session->id_perwakilan);

        $this->load->view('header', $data);
        $this->load->view('pengajuan');
        $this->load->view('footer');
    }

    public function tambah()
    {
        $nilai = preg_replace('~\D~', '', $this->input->post('nilai'));

        $data = array(
            'id_perwakilan'     => $this->session->id_perwakilan,
            'id_pemda'          => $this->input->post('pemda'),
            'usulan_nomor'      => $this->input->post('nomor'),
            'usulan_tanggal'    => $this->input->post('tanggal'),
            'usulan_perihal'    => $this->input->post('perihal'),
            'usulan_nilai'      => $nilai,
            'status'            => "Menunggu Penandatanganan Perjanjian Pinjaman"
        );

        $this->db->insert('pinjaman', $data);

        redirect('pengajuan');
    }

    public function penandatanganan($id)
    {

        $nilai = preg_replace('~\D~', '', $this->input->post('nilai'));

        $data = array(
            'acc_nomor'      => $this->input->post('nomor'),
            'acc_tanggal'    => $this->input->post('tanggal'),
            'acc_nilai'      => $nilai,
            'status'         => "Menunggu Pencairan Pinjaman"
        );

        $this->db->where('idp', $id);
        $this->db->update('pinjaman', $data);

        redirect('pengajuan');
    }
}
