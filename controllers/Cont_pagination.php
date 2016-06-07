<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_pagination extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->database();
        $this->load->library('pagination');	
        $this->load->model('Model_pagination');
    }

    public function index()
    {
        redirect('Cont_pagination/bootstrap_pagination');
    }


	
	public function bootstrap_pagination()
	{
		
		$count_all_new = $this->Model_pagination->count_all();
        
		//For Pagination
		$config['base_url'] = site_url("Cont_pagination/bootstrap_pagination/");
        $config['total_rows'] = $count_all_new;
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = 7;

    	//  integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['customer_list'] = $this->Model_pagination->get_all($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('sample_pagination', $data);
	}




}
