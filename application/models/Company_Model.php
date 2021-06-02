<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Company_Model extends CI_Model
{
    public function companyRegisterModel($comp_name, $email, $logo, $website, $pass)
    {
        $data=$this->db->query("SELECT * FROM admin WHERE email='".$email."'");
        if($data->num_rows() > 0){
            $this->session->set_flashdata('comp_msg', 'Already exist');  
            
            $this->load->view('company');
        }else{

            $this->db->query("INSERT INTO companies (name , email , logo, website) VALUES ('$comp_name' , '$email' , '$logo', '$website')");
            $this->db->query("INSERT INTO admin (email , password , admin_type) VALUES ('$email' , '$pass' ,'company_admin')");
            $this->session->set_flashdata('comp_msg_sucess', 'Company registered');
            $this->load->view('sign_in');
           

        }
       
      
    }

    public function get_comp(){
        $data=$this->db->query("SELECT * FROM companies ");
        return $data->result_array();
    }
    public function companyEdit($id, $name, $email, $website){
        $data=$this->db->query("UPDATE companies SET name='".$name."', email='".$email."', website='".$website."' WHERE company_id='".$id."'");
        return TRUE;
    }
    public function deleteCompData($id, $email){
        $this->db->query("DELETE FROM companies  WHERE `company_id` =" . $id);
        $this->db->query("DELETE FROM admin  WHERE email ='".$email."'");
        return TRUE;
       
    }

   
}


    ?>