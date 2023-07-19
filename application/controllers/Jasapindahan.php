<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasapindahan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view jasa-pindahan.php
        $this->load->view("jasa-pindahan");
	}
}