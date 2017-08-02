<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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
			$this->load->view('admin/registration/list',$data);

		}else{
			redirect('login/logout');
		}
	}


	public function isLoggedIn()
    {
        $user = $this->session->userdata('user_id');
        return isset($user);
    }


    public function registration_data()
    {
        $registration_data = $this->registration_model->get();
        $j_data = json_encode($registration_data);
        echo $j_data; 
    }

    public function details($id)
    {
    	$data['session_user'] = $this->session->userdata('username');
    	$data['info'] = $this->registration_model->_get($id);

    	$this->load->view('admin/registration/view',$data);
    }

    
    public function delete($id)
    {
    	$this->registration_model->delete($id);
    	$this->index();
    }


}
