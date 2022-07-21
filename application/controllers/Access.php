<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

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
	public function login()
	{
		$this->session->sess_destroy();
		$this->load->view('access/pages-login');

	}


	public function oAuth(){
		if ($_GET['token'] != null){
			// Setting of session data
			$this->session->set_userdata(
				array(
					'TOKEN' => $_GET['token'],
					'USERS_TYPE' => $_GET['users_type'],
					'FIRSTNAME' => $_GET['users_fname'],
					'MIDDLENAME' => $_GET['users_mname'],
					'LASTNAME' => $_GET['users_lname'],
					'FULLNAME' => $_GET['users_full_name'],
					'PROFILE_PIC' => $_GET['users_profile_pic'],
					'EMAIL' => $_GET['users_email'],

				)
			);
			// redirect to pages depends on users_type
			$users_type = $_GET['users_type'];

			if($users_type == "Admin"){
				redirect(base_url('admin/dashboard'));
			}elseif($users_type == "Staff"){
				redirect(base_url('staff/dashboard'));
			}elseif($users_type == "Dentist"){
				redirect(base_url('dentist'));
			}elseif($users_type == "Patient"){
				redirect(base_url('patient'));
			}else{
				redirect(base_url('login'));
			}
		}else{

		}
	}

	public function Register()
	{

		if (ISSET ($_POST['register'])){
			$this->form_validation->set_rules('users_fname', 'Users_fname', 'required');
			$this->form_validation->set_rules('users_mname', 'Users_mname', '');
			$this->form_validation->set_rules('users_lname', 'users_lname', 'required');
			$this->form_validation->set_rules('users_birthdate', 'Users_birthdate', 'required');
			$this->form_validation->set_rules('users_phone_number', 'Users_phone_number', 'required|min_length[5]');
			$this->form_validation->set_rules('users_civil_status', 'Users_civil_status', 'required');
			$this->form_validation->set_rules('users_gender', 'Users_gender', 'required');
			$this->form_validation->set_rules('users_profile_pic', 'Users_profile_pic', 'required');
			$this->form_validation->set_rules('users_email', 'Users_email', 'required');
			$this->form_validation->set_rules('users_password', 'Users_password', 'required|min_length[5]');
			$this->form_validation->set_rules('users_password', 'Confirm Password', 'required|min_length[5]|matches[users_password]');
			
			//If form validation is true
			if($this->form_validation->run() == TRUE) {
				echo 'form validated';

				//add user to database
				
				$data = array (
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

				$this->session->set_flashdata ("success", "Your Account has been registered. You can login now!");
				redirect("Access/Register", "refresh");
			}
		}
		$this->load->view('access/pages-register');
	}
}
