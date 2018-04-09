<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('admin/login');
    }

    public function auth() {
        $this->load->model('Auth_model', 'model');

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $user_credentials = $this->model->validate_login($user);

        // CHECK IF IS THERE SUCH USER
        $this->user_exists($user_credentials);

        // CHECK IF THERE IS A PASSWORD MATHC
        $this->check_password($user_credentials, $pass);
    }

    private function user_exists($user_credentials) {
        if (!$user_credentials) {
            // USER DOES NOT EXIST
            $this->session->set_flashdata('login_no_user_registred', $this->lang->line('login_no_user_registred'));
            redirect(site_url('admin/login'));
        }
    }

    private function check_password($user_credentials, $typed_pass) {
        if ($this->encryption->decrypt($user_credentials->pass) == $typed_pass) {
            // VALID USER, GENERATE SESSIONS AND LOG IN
            $this->session->set_userdata('id', $user_credentials->id);
            $this->session->set_userdata('name', $user_credentials->name);
            redirect('/admin/painel');
        }
    }

}
