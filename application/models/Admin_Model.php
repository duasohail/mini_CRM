<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function adminRegisterModel($email, $password)
    {
        $data = $this->db->query("SELECT * FROM admin WHERE password='" . $password . "' AND email='" . $email . "'");
        $data2 = $data->result_array();
        foreach ($data2 as $admin) {
            $admin_t = $admin['admin_type'];
        }

        if ($data->num_rows() > 0 && $admin_t == 'admin') {

                $this->load->view('dashboard');
        }elseif($data->num_rows() > 0 && $admin_t !== 'admin'){
                echo '<h1> hello you are not an admin so dashboard not accessible</h1>';
        } else {
            $this->session->set_flashdata('message', 'Incorrect E-mail or Password');
            $this->load->view('sign_in');
        }
    }
}
