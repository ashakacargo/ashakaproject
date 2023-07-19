<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alatberat extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view kirim-alatberat.php
        $this->load->view("kirim-alatberat");
	}
}