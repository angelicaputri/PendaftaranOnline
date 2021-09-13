<?php
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('AdminModel');
            $this->load->model('UserModel');

            if($this->session->userdata('login')==false){
                $this->session->set_flashdata('message','<script langue="javascript">window.alert("Login First")</script>');
                redirect('/auth');
            }
        }

        public function index (){
            $data = array(
                'login' => $this->AdminModel->findByEmail($this->session->userdata('login')),
            );
            $this->load->view('admin/index', $data);
        }

        public function show($username){
            $data = array(
                'login' => $this->AdminModel->findByEmail($this->session->userdata('login')),
            );
            $this->load->view('admin/update',$data);
        }
        
        public function update($id){
            $admin = array(
                'id_admin' => $id,
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            );
            $this->AdminModel->update($admin);
            redirect('/admin');
        }
        public function showUser(){
            $data = array(
                'login' => $this->AdminModel->findByEmail($this->session->userdata('login')),
            );
        }

        public function showAll(){
            $data = array(
                'users'=>$this->UserModel->all(),
                'login' => $this->AdminModel->findByEmail($this->session->userdata('login')),
            );
            $this->load->view('admin/show', $data);
        }

        public function showScore(){
            $data = array(
                'users'=>$this->UserModel->all(),
                'login' => $this->AdminModel->findByEmail($this->session->userdata('login')),
            );
            $this->load->view('admin/score', $data);
        }
        
        public function editScore($id){
            if($this->input->post('nilai')>75){
                $hasil="Lulus";
            }else{
                $hasil="Tidak Lulus";
            }
            $user = array(
                'user_id' => $id,
                'nilai' => $this->input->post('nilai'),
                'hasil' => $hasil,
            );
            $this->UserModel->upnilai($user);
            redirect('/admin/showScore');
        }

    }
?>