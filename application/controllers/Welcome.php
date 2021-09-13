<?php 

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index (){
        $this->load->view('user/index');
    }

	public function daftar(){
		$this->load->view('user/formPendaftaran');
	}

	public function sekolah(){
		$this->load->view('user/TentangSekolah');
	}

	public function calon(){
		$this->load->view('user/ListPendaftar');
	}

	public function edit(){
		$data = array(
			'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
		);
		$this->load->view('user/EditData', $data);
	}

}