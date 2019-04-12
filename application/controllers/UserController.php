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
		$data = $user->index();
		$id="";
		$this->load->view('user/index',["data"=>$data,"id"=>$id]);
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
		$user->saveUser($id=null);

		return redirect(base_url('user'));
		// $this->load->model->store($data);

	}

	public function edit($id)
	{	
		$data = $this->db->get_where('users',['id'=>$id])->row();
		$this->load->view('user/addedit',["data"=>$data,"id"=>$id]);
	}	

	public function update($id)
	{	
		$user = new User;
		$user->saveUser($id);
		return redirect(base_url('user'));
	}

	public function delete($id)
	{	
		$user = new User;
		$user->deleteUser($id);
		return redirect(base_url('user'));
	}
}
