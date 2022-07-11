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
					'FULLNAME' => $_GET['users_full_name'],
					'PROFILE_PIC' => $_GET['users_profile_pic'],
					'EMAIL' => $_GET['users_email'],

				)
			);
			// redirect to pages depends on users_type
			$users_type = $_GET['USERS_TYPE'];
			
			if($_GET['users_type'] == 'Admin'){
				redirect(base_url('Admin'));
			}elseif($_GET['users_type'] ==  "Staff"){
				redirect(base_url('Staff'));
			}elseif($_GET['users_type'] ==  "Dentist"){
				redirect(base_url('Dentist'));
			}elseif($_GET['users_type'] ==  "Patient"){
				redirect(base_url('Patient'));
			}else{
				redirect(base_url('login'));
			}
		}else{

		}
	}
}
