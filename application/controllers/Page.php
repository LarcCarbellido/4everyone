<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Page extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
 
		$this->load->view('main_view');
	
	}

	public function test()
	{
 
		$this->load->view('test_view');
	
	}

}
