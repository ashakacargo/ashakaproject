<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view kirim-mobil.php
        $this->load->view("kirim-mobil");
	}
}