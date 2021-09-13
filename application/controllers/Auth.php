<?php
class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('AdminModel');
    }
    public function index(){
        $this->load->view('auth/login_a');
    }
    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->AdminModel->findByEmail($email);
        if($data){
            if(password_verify($password, $data['password'])){
                $admin = array(
                    'login' => $data['email'],
                );
                $this->session->set_userdata($admin);
                redirect('/admin');
            }
            else{
                $this->session->set_flashdata('message','<script langue="javascript">window.alert("Password Salah")</script>');
                redirect('/auth');
            }
        } else{
            $this->session->set_flashdata('message','<script langue="javascript">window.alert("Email Salah")</script>');
            redirect('/auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('login');
            //$this->session->set_flashdata('message','<script langue="javascript">window.alert("Log Out Success")</script>');
        redirect('/auth');
    }
    public function register(){
        $this->load->view('auth/register_a');
    }
    public function create_admin(){
        $admin = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
        );
        $this->AdminModel->create($admin);
        $this->session->set_flashdata('message','<script langue="javascript">window.alert("Register Berhasil")</script>');
        redirect('/auth');
    }
    public function update($id){
        $admin = array(
            'id' => $id,
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
        );
        $this->AdminModel->update($admin);
        $this->session->set_flashdata('message','<script langue="javascript">window.alert("Register Berhasil")</script>');
        redirect('/admin');
    }

    public function loginAdmin(){
        $this->load->view('auth/login_u');
    }
}

?>