<?php

class login_model extends CI_model
{
    public function _login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('home');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="center col-lg-13 alert alert-danger "role="alert">Your Password is wrong</div>'
                    );
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="center col-lg-13 alert alert-danger "role="alert">Your Email is not Activated</div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="center col-lg-13 alert alert-danger "role="alert">Your Email is not registered. why dont you create one?</div>'
            );
            redirect('login');
        }
    }
}
