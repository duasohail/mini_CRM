<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Emp_Model extends CI_Model
{
    public function empRegisterModel($name, $last_name, $email, $pass , $id, $phone)
    {
        // print_r($id);

        $data=$this->db->query("SELECT * FROM admin WHERE email='".$email."'");
        // print_r($data->result_array());
        if($data->num_rows() > 0){
            $this->session->set_flashdata('emp_msg', 'Already exist');  
            
            $this->load->view('emp');
        }else{

            $this->db->query("INSERT INTO emp (first_name, last_name, company_id , email ,password, phone) VALUES ('$name' , '$last_name','$id' , '$email','$pass','$phone')");
            $this->db->query("INSERT INTO admin (email , password , admin_type) VALUES ('$email' , '$pass' ,'emp')");
            $this->session->set_flashdata('emp_msg_sucess', 'Successfully registered');
            $this->load->view('sign_in');
           

        }
       
       
    }

    public function get_company(){
        $data=$this->db->query("SELECT * FROM companies ");
        return $data->result_array();

    }
    public function get_companyName(){
        $data=$this->db->query("SELECT company_id, name FROM companies ");
        return $data->result_array();

    }
    public function get_emp(){
        $data=$this->db->query("SELECT * FROM emp ");
        return $data->result_array();

    }
    public function empEdit($name, $last_name, $email, $pass , $id, $phone, $emp){
        $data=$this->db->query("UPDATE emp SET first_name='".$name."', last_name='".$last_name."', email='".$email."', password='".$pass."', company_id='".$id."', phone='".$phone."' WHERE emp_id='".$emp."'");
        return TRUE;
       

    }
    public function deleteEmpData($id, $email){
        $this->db->query("DELETE FROM emp  WHERE `emp_id` =" . $id);
        $this->db->query("DELETE FROM admin  WHERE email ='".$email."'");
        return TRUE;
       

    }
}


    ?>