<?php
    class Categories extends CI_Controller {
    	public function __construct() {
            parent::__construct();
            $this->load->model('category_model');
        }

        public function index() {
            $this->load->view('categories/index');
        }
    }