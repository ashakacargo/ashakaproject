<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('SearchModel');
	}
	
	public function index()
	{
		$keyword = $this->input->get("keyword");
		$data = $this->SearchModel->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $data
		);
        $this->load->view("overview",$data);
	}
}