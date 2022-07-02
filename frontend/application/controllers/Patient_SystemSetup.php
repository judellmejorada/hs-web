<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_SystemSetup extends CI_Controller {

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
	public function UI()
	{
		
		$this->load->view('users/patients/patient-dashboard');
		//$this->load->view('partials/admin/header');
		$this->load->view('partials/patient/top_bar');
		$this->load->view('partials/patient/left_sidebar');
		$this->load->view('partials/patient/right_sidebar');
		$this->load->view('partials/patient/footer');
	}
}
