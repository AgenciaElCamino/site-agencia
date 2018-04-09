<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Textos extends CI_Controller {

    const ERR_404_MESSAGE = 'Não foi possível carregar a página solicitada. O arquivo não existe.';

    private $views_folder = 'admin/';
    private $views_path = 'application/views/admin/';
    private $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Textos_model', 'model');
    }

    public function index() {
        
    }

    public function listar($view) {

        $this->data['page_name'] = strtoupper($view);
        $this->data['content'] = $this->model->get_all_texts_by_category($view);

        $this->load->view($this->views_folder . 'textos', $this->data);
    }

    public function editar($text_key) {
        $this->data['text'] = $this->model->get_text_by_key($text_key);
        $this->load->view('admin/editar', $this->data);
    }

}
