<?php

$CI =& get_instance();
$CI->load->model('admin/Textos_model', 'model');

$content = $CI->db->get_where('general_content', ['language_id' => 1])->result();

foreach($content as $data) {
    $lang[$data->text_key] = $data->value;
}

/* ADMIN */
$lang['login_error_message'] = 'Usuário e/ou senha inválidos';
$lang['login_no_user_registred'] = 'O nome de usuário informado não existe';