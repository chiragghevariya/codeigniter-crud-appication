<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function index()
	{	
		$this->load->view('user/index');
	}
	public function create()
	{	
		$this->load->helper('url');
		$this->load->view('user/addedit');
	}
}
