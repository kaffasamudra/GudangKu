<?php
class M_barang extends CI_Model {

    public function get_all_barang() {
        $this->db->select('barang.*, jenis_barang.jenis_barang');
        $this->db->from('barang');
        $this->db->join('jenis_barang', 'jenis_barang.id = barang.id_jenis');
        return $this->db->get()->result();
    }

    public function get_barang_by_id($id) {
        return $this->db->get_where('barang', ['id' => $id])->row();
    }

    public function insert_barang($data) {
        return $this->db->insert('barang', $data);
    }

    public function update_barang($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('barang', $data);
    }

    public function delete_barang($id) {
        return $this->db->delete('barang', ['id' => $id]);
    }

    public function get_all_jenis() {
        return $this->db->get('jenis_barang')->result();
    }
}
