<?php
class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->helper('url');
    }

    public function index() {
        $data['barang'] = $this->M_barang->get_all_barang();
        $this->load->view('barang', $data);
    }

    public function tambah() {
        $data['jenis'] = $this->M_barang->get_all_jenis();
        $data['barang'] = $this->M_barang->get_all_barang();
        $this->load->view('addbarang', $data);
    }

    public function simpan() {
        $data = [
            'id_jenis' => $this->input->post('id_jenis'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok')
        ];
        $this->M_barang->insert_barang($data);
        redirect('barang');
    }

    public function edit($id) {
        $data['barang'] = $this->M_barang->get_barang_by_id($id);
        $data['jenis'] = $this->M_barang->get_all_jenis();
        $this->load->view('editbarang', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $data = [
            'id_jenis' => $this->input->post('id_jenis'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok')
        ];
        $this->M_barang->update_barang($id, $data);
        redirect('barang');
    }

    public function hapus($id) {
        $this->M_barang->delete_barang($id);
        redirect('barang');
    }
}
