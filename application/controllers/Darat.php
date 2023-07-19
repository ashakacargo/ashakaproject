<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darat extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view ekspedisi-darat.php
        $this->load->view("ekspedisi-darat");
	}
}