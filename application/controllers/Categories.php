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

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('img_url'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $path = $this->upload->data();
                $img = "uploads/".$path['file_name'];
            }

            $data = array();

            $data = array(
                'name' => $name,
                'description' => $description,
                'img_url' => $img,
                'created_at' => $date,
            );

            $this->category_model->insertCategory($data);

            redirect('categories');
        }

        public function subCategory() {
            $id = $this->input->get('id');
            $data['category_details'] = $this->category_model->getCategoryById($id);
            $data['sub_categories'] = $this->category_model->getSubCategoriesByCategoryId($id);
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