 <?php

    class Signup extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('user_signup');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data['judul'] = "Website Jon's Bakery - Sign Up";

            $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
            $this->form_validation->set_rules('age', 'Age', 'required|trim|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'Email is already registered'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('signup/index');
                $this->load->view('templates/footer');
            } else {
                $this->user_signup->tambahDataPengguna();
            }
        }
    }
