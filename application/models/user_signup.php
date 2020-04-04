<?php

class user_signup extends CI_model
{
    public function tambahDataPengguna()
    {
        $data = [
            "name_user" => $this->input->post('name', true),
            "age_user" => $this->input->post('age', true),
            "sex_user" => $this->input->post('sex', true),
            "email" => $this->input->post('email', true),
            "image" => 'default.jpg',
            "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="center col-lg-13 alert alert-success " role="alert">Your data is created. Please Login</div>'
        );
    }
}
