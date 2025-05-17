<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_user', 'users');
        $this->load->helper('url');
    }

    // public function index() {
    //     $this->load->view('user');
    // }

    public function index() {
        $data['users'] = $this->users->get_all_users();
        $this->load->view('user', $data);
    }

    public function toggle_user($id) {
        $this->users->toggle_user_status($id);
        redirect('admin');
    }

    public function delete_user($id) {
        $this->users->delete_user($id);
        redirect('admin');
    }
}
