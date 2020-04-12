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
            'is_active' => 0,
            'date_created' => time()
        ];
        // $this->db->insert('user', $data);

        $this->_sendEmail();

        $this->session->set_flashdata(
            'message',
            '<div class="center col-lg-13 alert alert-success " role="alert">Your data is created. Please Login</div>'
        );
        redirect('login');
    }

    private function _sendEmail()
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail,com',
            'smtp_user' => 'danny.ambarita153@gmail.com',
            'smtp_pass' => 'danny123',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'  => 'utf-8',
            'newline'  => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('danny.ambarita153@gmail.com', 'Danny Ambarita');
        $this->email->to('danny.ambarita130@gmail.com');
        $this->email->subject('test');
        $this->email->message('Hello World!');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
