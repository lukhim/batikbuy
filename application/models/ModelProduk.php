<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProduk extends CI_Model
{
    //manajemen buku
    public function getProduk()
    {
        return $this->db->get('produk');
    }

    public function produkWhere($where)
    {
        return $this->db->get_where('produk', $where);
    }

    public function simpanProduk($data = null)
    {
        $this->db->insert('produk',$data);
    }

    public function updateProduk($data = null, $where = null)
    {
        $this->db->update('produk', $data, $where);
    }

    public function hapusProduk($where = null)
    {
        $this->db->delete('produk', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('produk');
        return $this->db->get()->row($field);
    }
}