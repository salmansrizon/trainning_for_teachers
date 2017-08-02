<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

        $this->load->model('registration_model');
    }


	public function index(){
		if($this->isLoggedIn()){
			$data['session_user'] = $this->session->userdata('username');
			$data['list'] = $this->registration_model->get();
			$this->load->view('admin/home/home',$data);
		}else{
			redirect('login/logout');
		}
	}


	public function isLoggedIn()
    {
        $user = $this->session->userdata('user_id');
        return isset($user);
    }

    public function number_of_registration()
    {
        $registration_number = $this->registration_model->get_reg_number();

        echo $registration_number->count; 
    }


}
