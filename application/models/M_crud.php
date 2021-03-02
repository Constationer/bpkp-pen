<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_crud extends CI_Model
{
    public function getResult($table)
    {
        $query = $this->db->get($table)->result();
        return $query;
    }

    public function getArrayWhere($table, $where, $id)
    {
        $this->db->where($where, $id);
        $query = $this->db->get($table)->row_array();
        return $query;
    }

    public function getPemda($id)
    {
        $this->db->where('id_perwakilan', $id);
        return $this->db->get('pemda')->result();
    }

    public function getPerwakilan($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('perwakilan')->row_array();
        return $query['nama'];
    }

    public function getPinjaman($id)
    {
        $this->db->select('*');
        $this->db->where('pinjaman.id_perwakilan', $id);
        $this->db->from('pinjaman');
        $this->db->join('pemda', 'pinjaman.id_pemda = pemda.id');
        return $this->db->get()->result();
    }

    public function getPinjamanAll()
    {
        $this->db->select('*');
        $this->db->from('pinjaman');
        $this->db->join('pemda', 'pinjaman.id_pemda = pemda.id');
        return $this->db->get()->result();
    }
}
