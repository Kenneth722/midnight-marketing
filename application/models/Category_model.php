<?php
    class Category_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }
        
        public function insertCategory($data) {
            $this->db->insert('category', $data);
        }

        public function getCategories() {
            $query = $this->db->get('category');
            return $query->result();
        }

        public function getCategoryById($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('category');
            return $query->row();
        }

        public function insertSubCategory($data) {
            $this->db->insert('sub_category', $data);
        }

        public function getSubCategories() {
            $query = $this->db->get('sub_category');
            return $query->result();
        }
    }