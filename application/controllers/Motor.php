<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view kirim-motor.php
        $this->load->view("kirim-motor");
	}
}