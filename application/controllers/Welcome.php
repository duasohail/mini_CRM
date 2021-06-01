<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
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
	public function index()
	{
		$this->load->view('sign_in');
	}

	// sign controller
	public function signIn()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('Admin_Model');
		$data=$this->Admin_Model->adminRegisterModel($email, $password);
		print_r($data);
	}



	// company

	// company resgitration page 
	public function registerCompanyView()
	{
		$this->load->view('company');
	}


	// company registration 
	public function companyRegister()
	{
		$comp_name=$this->input->post('name');
		$email=$this->input->post('email');
		$logo=$this->input->post('logo');
		$website=$this->input->post('website');
		$pass=$this->input->post('pass');
		$this->load->model('Company_Model');

		$data=$this->Company_Model->companyRegisterModel($comp_name, $email, $logo, $website, $pass);
	
	}

	//emp
	
	// employee registration page 
	
	// employee registration
	public function registerEmpView()
	{
		$this->load->model('Emp_Model');
		$data=$this->Emp_Model->get_company();
		$this->session->set_userdata('companies', $data);
		$this->load->view('emp');
	}
	public function empRegister()
	{
		$data=$this->input->post();
		$name=$this->input->post('name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$company=$this->input->post('company');
		$phone=$this->input->post('phone');
		
		$this->load->model('Emp_Model');

		$data=$this->Emp_Model->empRegisterModel($name, $last_name, $email, $pass , $company, $phone);
	}

}
