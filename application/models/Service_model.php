<?php
    class Service_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function insertService($data) {
            $this->db->insert('service', $data);
        }

        public function getServicesBySubCategoryId($id) {
            $this->db->where('sub_category_id', $id);
            $query = $this->db->get('service');
            return $query->result();
        }
    }