<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    
    public function index($lang = null) {
        if(is_null($lang))
            redirect('/pt');
        
        $this->session->set_userdata('lang', $lang);
        $this->lang->load($lang);
        $this->load->view('site/home');
    }

    public function showCase() {
        
    }

}
