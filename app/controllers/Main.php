<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
        $this->load->model('course_model');
        $this->load->model('batch_model');

    }


	public function index(){

		$this->load->view('index');
	}

	public function registration(){

		$data['course_id'] = $this->input->post('course_id');
		$data['batch_schedule_id'] = $this->input->post('batch_schedule_id');
		$data['full_name'] = $this->input->post('full_name');
		$data['contact_number'] = $this->input->post('contact_number');
		$data['email'] = $this->input->post('email');
		$data['university'] = $this->input->post('university');
		$data['uni_pass_date'] = $this->input->post('uni_pass_date');
		$data['college'] = $this->input->post('college');
		$data['col_pass_date'] = $this->input->post('col_pass_date');
		$data['school'] = $this->input->post('school');
		$data['sch_pass_date'] = $this->input->post('sch_pass_date');
		$data['prefession'] = $this->input->post('prefession');
		$data['gc_copy'] = $this->input->post('gc_copy');
		$data['similer_course'] = $this->input->post('similer_course');

		$selected_file_c = $_FILES['gc_copy']['name'];
		$selected_path_c = $_FILES['gc_copy']['tmp_name'];
        $uploaded_path_c =  $_SERVER['DOCUMENT_ROOT'].'/tot/storage/'.$selected_file_c;

		$selected_file_s = $_FILES['similer_course']['name'];
		$selected_path_s = $_FILES['similer_course']['tmp_name'];
        $uploaded_path_s =  $_SERVER['DOCUMENT_ROOT'].'/tot/storage/'.$selected_file_s;

        move_uploaded_file($selected_path_c, $uploaded_path_c);

        move_uploaded_file($selected_path_s, $uploaded_path_s);

        $data['gc_copy'] = base_url().'../storage/'.$selected_file_c;
        $data['similer_course'] = base_url().'../storage/'.$selected_file_s;

		$registration_id = $this->registration_model->create($data);

		$exam_link = $this->course_model->get_exam_link($data['course_id']);
		$msg['exam_name'] = $exam_link->exam_name;
		$msg['exam_link'] = $exam_link->exam_link;

		if ($registration_id) {
			$msg['status'] = "Registration Success";
		}else {
			$msg['status'] = "Registration Failed";
		}
		
		$this->registration_success($msg);

	}


	public function registration_success($msg='Failed'){
		$this->load->view('success/success',$msg);
	}

	
	public function get_course_drop_down(){

		$load_select = '';
		$course = $this->course_model->get();

        $load_select .= '<select class="form-control"  name="course_id">
            <option value="" style="color:#707070">Select One</option>';
            
        foreach($course as $course_i){
            $load_select .= '<option value="'.$course_i['id'].'">'.$course_i['course_name'].'</option>';
        }

        $load_select .= '</select>';

        echo $load_select;

	}

	public function get_batch_drop_down(){
		$course_id = $this->input->post('course_id');

		$load_select = '';
		$batch = $this->batch_model->get($course_id);

        $load_select .= '<select class="form-control"  name="batch_schedule_id">
            <option value="" style="color:#707070">Select One</option>';
            
        foreach($batch as $batch_i){
            $load_select .= '<option value="'.$batch_i['id'].'">'.$batch_i['batch_name'].' ('.$batch_i['batch_start'].' - '.$batch_i['batch_end'].')</option>';
        }

        $load_select .= '</select>';

        echo $load_select;
	}


}
