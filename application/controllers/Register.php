<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function RegisterPage()
	{
		if (ISSET ($_POST['submit'])){
			$this->form_validation->set_rules('users_fname', 'First Name', 'required');
			$this->form_validation->set_rules('users_mname', 'Middle Name', '');
			$this->form_validation->set_rules('users_lname', 'Last Name', 'required');
			$this->form_validation->set_rules('users_birthdate', 'Birth Date', 'required');
			$this->form_validation->set_rules('users_phone_number', 'Phone Number', 'required|min_length[5]');
			$this->form_validation->set_rules('users_civil_status', 'Civil Status', 'required');
			$this->form_validation->set_rules('users_gender', 'Gender', 'required');
			$this->form_validation->set_rules('users_profile_pic', 'Profile Image', '');
			$this->form_validation->set_rules('users_email', 'Email', 'required');
			$this->form_validation->set_rules('users_password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('users_password1', 'Confirm Password', 'required|min_length[5]|matches[users_password]');
			
			//If form validation is true
			if($this->form_validation->run() == TRUE) {
				echo 'form validated';
				//add user to database
				
				$data = array(
					'users_fname'=>$_POST['users_fname'],
					'users_mname'=>$_POST['users_mname'],
					'users_lname'=>$_POST['users_lname'],
					'users_birthdate'=>$_POST['users_birthdate'],
					'created_date'=> date ('m-d-Y'),
					'users_phone_number'=>$_POST['users_phone_number'],
					'users_civil_status'=>$_POST['users_civil_status'],
					'users_gender'=>$_POST['users_gender'],
					'users_profile_pic'=>$_POST['users_profile_pic'],
					'users_password'=> md5($_POST['users_password']),
				);

				$this->db->insert('Users', $data);

				$this->session->set_flashdata("success", "Your Account has been registered. You can login now!");
				redirect("Register/RegisterPage", "refresh");

			}
		}
		$this->load->view('access/pages-register');
	}
}
