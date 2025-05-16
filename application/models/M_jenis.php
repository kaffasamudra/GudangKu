<?php
class M_jenis extends CI_Model {

    public function get_all() {
        return $this->db->get('jenis_barang')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('jenis_barang', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('jenis_barang', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('jenis_barang', $data);
    }

    public function delete($id) {
        return $this->db->delete('jenis_barang', ['id' => $id]);
    }
}
