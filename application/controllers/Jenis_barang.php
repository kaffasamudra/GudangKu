<?php
class Jenis_barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_jenis');
    }

    public function index() {
        $data['jenis_barang'] = $this->M_jenis->get_all();
        $this->load->view('jenis', $data);
    }

    public function create() {
        $this->load->view('addjenis');
    }

    public function store() {
        $data = ['jenis_barang' => $this->input->post('jenis_barang')];
        $this->M_jenis->insert($data);
        redirect('jenis_barang');
    }

    public function edit($id) {
        $data['jenis_barang'] = $this->M_jenis->get_by_id($id);
        $this->load->view('editjenis', $data);
    }

    public function update($id) {
        $data = ['jenis_barang' => $this->input->post('jenis_barang')];
        $this->M_jenis->update($id, $data);
        redirect('jenis_barang');
    }

    public function delete($id) {
        $this->M_jenis->delete($id);
        redirect('jenis_barang');
    }
}
