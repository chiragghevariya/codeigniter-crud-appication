<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('User');    
	}

	public function index()
	{	
		$user = new User;
		$data['data'] = $user->index();
		$this->load->view('user/index',$data);
	}

	public function create()
	{	
		$this->load->view('user/addedit');
	}

	public function store()
	{	
		// print_r($_POST['name']);exit;
		// $data['name'] = $_POST['name'];
		// $data['email'] = $_POST['email'];

		$user = new User;
		$user->saveUser();

		return redirect(base_url('user'));
		// $this->load->model->store($data);

	}

	public function edit($id)
	{	
		$user = new User;
		$data['data'] = $user->index();
		$this->load->view('user/addedit',$data);
	}
}
