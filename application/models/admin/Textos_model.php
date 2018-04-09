<?php

class Textos_model extends CI_Model {
    
    const TABLE_NAME = 'general_content';
    
    public function get_text_by_key($text_key) {
        return $this->db->get_where(self::TABLE_NAME, ['text_key' => $text_key])->result();
    }
    
    public function get_all_texts_by_category($category) {
        return $this->db->get_where(self::TABLE_NAME, ['category' => $category, 'language_id' => 1])->result();
    }
    
}