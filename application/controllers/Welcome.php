<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Admin_Model');
		$data = $this->Admin_Model->adminRegisterModel($email, $password);
		// print_r($email);
	}

	public function dashboard()
	{
		$this->load->model('Company_Model');
		$data = $this->Company_Model->get_comp();
		$this->session->set_userdata('company_all', $data);
		$this->load->view('dashboard');
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
		$comp_name = $this->input->post('name');
		$email = $this->input->post('email');
		$logo = $this->input->post('logo');
		$website = $this->input->post('website');
		$pass = $this->input->post('pass');

		$this->load->model('Company_Model');

		$data = $this->Company_Model->companyRegisterModel($comp_name, $email, $logo, $website, $pass);

		//email alert for admin here duak3710@gmmail.com is admin you can change if u want
		$from_email = 'test@gmail.com';
		$to_email = 'duak3710@gmail.com';
		$this->load->library('email');
		$this->email->from($from_email, 'test email');
		$this->email->to($to_email);
		$this->email->subject('test email');
		$this->email->message('test email message');
		$this->email->send();
	}
	public function editCompanyView()
	{
		$this->load->view('company_Data');
	}
	public function companyEditData()
	{
		$data = $this->input->post();
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$this->load->model('Company_Model');
		$this->Company_Model->companyEdit($id, $name, $email, $website);
		redirect('Welcome/dashboard', 'refresh');
		// print_r($data);

	}
	public function deleteComp()
	{
		$id = $_GET['id'];
		$email = $_GET['email'];
		$this->load->model('Company_Model');
		$data = $this->Company_Model->deleteCompData($id, $email);
		redirect('Welcome/dashboard', 'refresh');
		// print_r($email);

	}

	//emp

	// employee registration page 

	// employee registration
	public function registerEmpView()
	{
		$this->load->model('Emp_Model');
		$data = $this->Emp_Model->get_company();
		$this->session->set_userdata('companies', $data);
		$this->load->view('emp');
	}
	public function empRegister()
	{
		$data = $this->input->post();
		$name = $this->input->post('name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$id = $this->input->post('Company');
		$phone = $this->input->post('phone');

		// print_r($id);

		$this->load->model('Emp_Model');

		$data = $this->Emp_Model->empRegisterModel($name, $last_name, $email, $pass, $id, $phone);


		//email alert for admin here duak3710@gmmail.com is admin you can change if u want
		$from_email = 'test@gmail.com';
		$to_email = 'duak3710@gmail.com';
		$this->load->library('email');
		$this->email->from($from_email, 'test email');
		$this->email->to($to_email);
		$this->email->subject('test email');
		$this->email->message('test email message');
		$this->email->send();
	}


	public function editEmpView()
	{
		$this->load->View('empEdit');
	}
	public function empData()
	{
		$this->load->model('Emp_Model');
		$data = $this->Emp_Model->get_emp();
		$this->session->set_userdata('emp', $data);
		$this->load->view('emp_data');
	}


	public function empEdit()
	{
		$data = $this->input->post();
		$emp = $this->input->post('emp_id');
		$name = $this->input->post('name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$id = $this->input->post('Company');
		$phone = $this->input->post('phone');
		$this->load->model('Emp_Model');

		$data = $this->Emp_Model->empEdit($name, $last_name, $email, $pass, $id, $phone, $emp);
		// $this->load->view('emp_data');
		redirect('Welcome/empData', 'refresh');
		// print_r($emp);
	}
	public function deleteEmp()
	{
		$id = $_GET['id'];
		$email = $_GET['email'];
		$this->load->model('Emp_Model');
		$data = $this->Emp_Model->deleteEmpData($id, $email);
		redirect('Welcome/empData', 'refresh');
	}
}
