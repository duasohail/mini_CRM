<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Emp_Model extends CI_Model
{
    public function empRegisterModel($name, $last_name, $email, $pass , $company, $phone)
    {

        $data=$this->db->query("SELECT * FROM admin WHERE email='".$email."'");
        // print_r($data->result_array());
        if($data->num_rows() > 0){
            $this->session->set_flashdata('emp_msg', 'Already exist');  
            
            $this->load->view('emp');
        }else{

            $this->db->query("INSERT INTO emp (first_name, last_name, company_id , email , phone) VALUES ('$name' , '$last_name' , '$email', '$company','$phone')");
            $this->db->query("INSERT INTO admin (email , password , admin_type) VALUES ('$email' , '$pass' ,'emp')");
            $this->session->set_flashdata('emp_msg_sucess', 'Successfully registered');
            $this->load->view('sign_in');
           

        }
       
       
    }

    public function get_company(){
        $data=$this->db->query("SELECT * FROM companies ");
        return $data->result_array();

    }
}


    ?>