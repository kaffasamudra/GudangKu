<?php

class login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('M_user', 'users');
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $users = $this->users->get_users($username);
            
            if ($users && password_verify($password, $users->password)) {
                $this->session->set_userdata('fullname', $users->fullname);
                $this->session->set_userdata('role', $users->role);

                // Redirect based on role
                if ($users->role == 'users') {
                    redirect('dashboard');
                } else if ($users->role == 'admin') {
                    redirect('admin');
                }
                echo $users->role;
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('login');
            }
        }
    }

    public function regis()
    {
        $this->load->view('register');
    }

    public function register() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = [
                'fullname'     => $this->input->post('fullname'),
                'username'    => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                // 'role'     => $this->input->post('role'),
            ];

            if ($this->users->insert_users($data)) {
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed, try again!');
                redirect('registrasii');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login/logout');
    }
}