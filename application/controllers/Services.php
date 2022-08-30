<?php
    class Services extends CI_Controller {
    	public function __construct() {
            parent::__construct();
            $this->load->model('service_model');
            $this->load->model('category_model');
            $this->load->helper(['url', 'language']);
        }

        public function index() {
            $this->load->view('templates/header');
            $this->load->view('categories/index', $data);
        }

        public function service() {
            $id = $this->input->get('id');
            $data['sub_category'] = $this->category_model->getSubCategoryById($id);
            $data['service_details'] = $this->service_model->getServicesBySubCategoryId($id);
            $this->load->view('templates/header');
            $this->load->view('services/service', $data);
        }

        public function addServiceView() {
            $data['id'] = $this->input->get('id');
            $data['sub_category_details'] = $this->category_model->getSubCategoryById($data['id']);
            $this->load->view('templates/header');
            $this->load->view('services/add_new', $data);
        }

        public function addNew() {
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $duration = $this->input->post('duration');
            $sub_category = $this->input->post('sub_category');
            $date = gmdate('Y-m-d H:i:s');

            $data = array();

            $data = array(
                'name' => $name,
                'description' => $description,
                'sub_category_id' => $sub_category,
                'duration' => $duration,
                'created_at' => $date,
            );

            $this->service_model->insertService($data);

            redirect('services/service?id='.$sub_category);
        }
    }