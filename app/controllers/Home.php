<?php defined('DIRECT') OR exit('No direct script access allowed');

class Home extends Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home_view');
	}
}