<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){

        parent::__construct();

        $this->load->model('users_model');
    }


	public function index(){
		if($this->isLoggedIn()){
			$data['session_user'] = $this->session->userdata('username');
			$data['list'] = $this->users_model->get();
			$this->load->view('admin/users/list',$data);
		}else{
			redirect('login/logout');
		}
	}


	public function isLoggedIn()
    {
        $user = $this->session->userdata('user_id');
        return isset($user);
    }

    public function add(){
    	$data['session_user'] = $this->session->userdata('username');
    	$this->load->view('admin/users/add',$data);
    }

    public function add_post(){
        
		$data['user_name'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['full_name'] = $this->input->post('full_name');
		$data['email'] = $this->input->post('email');

		$users_id = $this->users_model->create($data);

		redirect('users');
	}

	public function edit($id)
    {
    	$data['session_user'] = $this->session->userdata('username');
    	$data['info'] = $this->users_model->_get($id);
    	$this->load->view('admin/users/edit',$data);
    }

    public function edit_post(){
        
		$id = $this->input->post('id');
		$data['user_name'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['full_name'] = $this->input->post('full_name');
		$data['email'] = $this->input->post('email');

		$users_id = $this->users_model->update($id,$data);

		redirect('users');
	}


	public function delete($id)
    {
    	$this->users_model->delete($id);
    	$this->index();
    }


}
