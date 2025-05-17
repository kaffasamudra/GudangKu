<?php
class M_user extends CI_Model
{
	function get_user($username) {
		$where = array(
			'username' => $username,
		);
		$this->db->where($where);
		$query = $this->db->get('users')->result();
		foreach ($query as $key => $value) {
			return $value;
		}
	}

	public function get_all_users() {
        return $this->db->get('users')->result();
    }

	public function insert_users($data) {
        return $this->db->insert('users', $data);
    }

    public function get_users() {
        $id=$this->session->userdata("id_user");
        $this->db->where("id",$id);
        return $this->db->get('users')->result();
    }

    public function toggle_user_status($id) {
        $user = $this->db->get_where('users', ['id' => $id])->row();

        if ($user) {
            $new_status = ($user->is_active === 'on') ? 'off' : 'on';
            $this->db->where('id', $id);
            $this->db->update('users', ['is_active' => $new_status]);
        }
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}