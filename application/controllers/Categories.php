<?php
    class Categories extends CI_Controller {
    	public function __construct() {
            parent::__construct();
            $this->load->model('category_model');
            $this->load->helper(['url', 'language']);
        }

        public function index() {
            $data['categories'] = $this->category_model->getCategories();
            $this->load->view('templates/header');
            $this->load->view('categories/index', $data);
        }

        public function addNewView() {
            $this->load->view('templates/header');
            $this->load->view('categories/add_new');
        }

        public function addNew() {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $date = gmdate('Y-m-d H:i:s');

            $data = array();

            $data = array(
                'name' => $name,
                'description' => $description,
                'created_at' => $date,
            );

            $this->category_model->insertCategory($data);

            redirect('categories');
        }

        public function subCategory() {
            $id = $this->input->get('id');
            $data['category_details'] = $this->category_model->getCategoryById($id);
            $data['sub_categories'] = $this->category_model->getSubCategories();
            $this->load->view('templates/header');
            $this->load->view('categories/sub_category', $data);
        }

        public function addSubCategoryView() {
            $data['id'] = $this->input->get('id');
            $this->load->view('templates/header');
            $this->load->view('categories/add_sub_category', $data);
        }

        public function addSubCategory() {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $duration = $this->input->post('duration');
            $category = $this->input->post('category');
            $date = gmdate('Y-m-d H:i:s');

            $data = array();

            $data = array(
                'name' => $name,
                'description' => $description,
                'category_id' => $category,
                'duration' => $duration,
                'created_at' => $date,
            );

            $this->category_model->insertSubCategory($data);

            redirect('categories/subCategory?id='.$category);
        }
    }