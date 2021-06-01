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
	public function signIn()
	{
		$data=$this->input->post();
		echo 'welcome admin your email is'.$data['email'];
	}
	public function registerCompanyView()
	{
		$this->load->view('company');
	}
	public function companyRegister()
	{
		$data=$this->input->post();
		echo 'welcome admin your email is '.$data['name'];
	}
	
	public function register()
	{
		$data=$this->input->post();
		echo 'welcome admin your email is'.$data['email'];
	}
	public function registerEmpView()
	{
		$this->load->view('emp');
	}
	public function empRegister()
	{
		$data=$this->input->post();
		echo 'welcome admin your email is'.$data['name'];
	}

}
