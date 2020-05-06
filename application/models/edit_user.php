<?php

class edit_user extends CI_model
{
    public function edit_admin($id)
    {
        return $this->db->get_where('user', ['id' => $id])->result_array();
    }

    public function ubahdatauser()
    {
        $data = [
            "name_user" => $this->input->post('name', true),
            "age_user" => $this->input->post('age', true),
            "sex_user" => $this->input->post('sex', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password1'), true), //PASSWORD_DEFAULT
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config = array(
                'upload_path'          => './assets/img/profile',
                'allowed_types'        => 'gif|jpg|png',
                'overwrite'            => true,
                'max_size'             => 1024
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
                $this->db->set('image', $image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
