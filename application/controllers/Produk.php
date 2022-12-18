<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function index()
    {
        $data['judul'] = 'Data Produk';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->getProduk()->result_array();

        $this->form_validation->set_rules('nama_batik', 'Nama Batik', 'required|min_length[3]', [
            'required' => 'Nama batik harus diisi',
            'min_length' => 'Nama batik terlalu pendek'
        ]);
        $this->form_validation->set_rules('motif', 'Motif', 'required', [
            'required' => 'Motif batik harus diisi',
        ]);
        $this->form_validation->set_rules('asal_daerah', 'Asal daerah', 'required', [
            'required' => 'Asal daerah harus diisi',
        ]);
        $this->form_validation->set_rules('size', 'Size', 'required', [
            'required' => 'Size harus diisi',
        ]);
        $this->form_validation->set_rules('bahan', 'Bahan', 'required', [
            'required' => 'Bahan harus diisi',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga harus diisi',
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required', [
            'required' => 'Gender harus diisi',
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('produk/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }

            $data = [
                'nama_batik' => $this->input->post('nama_batik', true),
                'motif' => $this->input->post('motif', true),
                'asal_daerah' => $this->input->post('asal_daerah', true),
                'size' => $this->input->post('size', true),
                'bahan' => $this->input->post('bahan', true),
                'stok' => $this->input->post('stok', true),
                'harga' => $this->input->post('harga', true),
                'gender' => $this->input->post('gender', true),
                'image' => $gambar
            ];

            $this->ModelProduk->simpanProduk($data);
            redirect('produk');
        }
    }

    public function hapusProduk()
    {
        $where = ['kd_batik' => $this->uri->segment(3)];
        $this->ModelProduk->hapusProduk($where);
        redirect('produk');
    }

    public function ubahProduk()
    {
        $data['judul'] = 'Ubah Data Produk';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->produkWhere(['kd_batik' => $this->uri->segment(3)])->result_array();
        

        $this->form_validation->set_rules('nama_batik', 'Nama Batik', 'required|min_length[3]', [
            'required' => 'Nama batik harus diisi',
            'min_length' => 'Nama batik terlalu pendek'
        ]);
        $this->form_validation->set_rules('motif', 'Motif', 'required', [
            'required' => 'Motif batik harus diisi',
        ]);
        $this->form_validation->set_rules('asal_daerah', 'Asal daerah', 'required', [
            'required' => 'Asal daerah harus diisi',
        ]);
        $this->form_validation->set_rules('size', 'Size', 'required', [
            'required' => 'Size harus diisi',
        ]);
        $this->form_validation->set_rules('bahan', 'Bahan', 'required', [
            'required' => 'Bahan harus diisi',
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga harus diisi',
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required', [
            'required' => 'Gender harus diisi',
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('produk/ubah_produk', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                'nama_batik' => $this->input->post('nama_batik', true),
                'motif' => $this->input->post('motif', true),
                'asal_daerah' => $this->input->post('asal_daerah', true),
                'size' => $this->input->post('size', true),
                'bahan' => $this->input->post('bahan', true),
                'stok' => $this->input->post('stok', true),
                'harga' => $this->input->post('harga', true),
                'gender' => $this->input->post('gender', true),
                'image' => $gambar
            ];

            $this->ModelProduk->updateProduk($data, ['kd_batik' => $this->input->post('kd_batik')]);
            redirect('produk');
        }
    }
}
