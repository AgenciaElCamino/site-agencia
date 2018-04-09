<?php

class Auth_model extends CI_Model {
    
    public function validate_login($user) {
        return $this->db->get_where('users', ['user' => $user])->row();
    }
    
}