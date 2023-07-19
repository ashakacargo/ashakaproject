<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewatruck extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view sewa-truk.php
        $this->load->view("sewa-truk");
	}
}