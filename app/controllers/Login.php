<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

		$this->load->view('login/login');
	}


	public function check(){

		$user_name = $this->input->post('username');
		$password = $this->input->post('password');

		$usersDetailInfo = $this->users_model->get_user($user_name, $password);

		if(isset($usersDetailInfo)){
			$this->setingSessionData($usersDetailInfo);
			redirect('admin');
		}else{
			$this->index();
		}
	}


	public function setingSessionData($usersDetailInfo=''){
        $session_data = array(
            'user_id' => $usersDetailInfo->id,
            'username' => $usersDetailInfo->user_name,
            'password' => $usersDetailInfo->password
            );
        $this->session->set_userdata($session_data);
    }


    public function unsetSessionData(){
    	$this->session->unset_userdata('user_id');
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('password');
    	$this->session->sess_destroy();
    }

    public function logout()
    {
        $this->unsetSessionData();
        redirect('login');
    }

}
