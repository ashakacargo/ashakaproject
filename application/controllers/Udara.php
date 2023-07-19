<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Udara extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view ekspedisi-udara.php
        $this->load->view("ekspedisi-udara");
	}
}