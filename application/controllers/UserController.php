<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->library('form_validation');
	}

	public function index (){
		$data = array(
			'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
		);
		$this->load->view('user/index', $data);
	}
	
	public function show()
	{
		$data['users'] = $this->UserModel->all();
		$this->load->view('user/ListPendaftar', $data);
	}

	public function token()
	{
		$data['users'] = $this->UserModel->all();
		$this->load->view('user/masuk', $data);
	}
	
	public function create(){
		
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|integer|exact_length[16]');
		$this->form_validation->set_rules('ttl', 'TTL', 'required|callback_date_valid');
		$this->form_validation->set_rules('umur', 'Umur', 'required|integer');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('namaBapak', 'Nama Bapak', 'required');
		$this->form_validation->set_rules('kerjaBapak', 'Kerja Bapak', 'required');
		$this->form_validation->set_rules('tempatBapak', 'Tempat Bapak', 'required');
		$this->form_validation->set_rules('gajiBapak', 'Gaji Bapak', 'required|integer');
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('kerjaIbu', 'Kerja Ibu', 'required');
		$this->form_validation->set_rules('tempatIbu', 'Tempat Ibu', 'required');
		$this->form_validation->set_rules('gajiIbu', 'Gaji Ibu', 'required|integer');
		$this->form_validation->set_rules('asalSekolah', 'Asal Sekolah', 'required');

		$this->load->helper('string');
		$randomString = random_string('alnum',5);
		$passw = random_string('alnum',5);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/formPendaftaran');
		} else {
			$this->load->library('upload');
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|gif|jpeg|JPG|PNG';
			$config['max_size']	= '300'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('ijazah')&&! $this->upload->do_upload('kk'))
			{
				echo $this->upload->display_errors();
				$this->load->view('user/formPendaftaran');
				echo "<script>
				alert('Pendaftaran Gagal');
				</script>";
			} else {
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$ijazah = $this->upload->data('file_name');
				$kk = $this->upload->data('file_name');
				$data_siswa=	array(
					'namaLengkap'			=> set_value('namaLengkap'),
					'nik'					=> set_value('nik'),
					'ttl'					=> set_value('ttl'),
					'umur'					=> set_value('umur'),
					'alamat'				=> set_value('alamat'),
					'namaBapak'				=> set_value('namaBapak'),
					'kerjaBapak'			=> set_value('kerjaBapak'),
					'tempatBapak'			=> set_value('tempatBapak'),
					'gajiBapak'				=> set_value('gajiBapak'),
					'namaIbu'				=> set_value('namaIbu'),
					'kerjaIbu'				=> set_value('kerjaIbu'),
					'tempatIbu'				=> set_value('tempatIbu'),
					'asalSekolah'			=> set_value('asalSekolah'),
					'ijazah'				=> $ijazah,
					'kk'					=> $kk,
					'usernameU'				=> $randomString,
					'passwordU'				=> $passw
				);
				$this->UserModel->create($data_siswa);
				$data['users'] = $this->UserModel->findByNIK($data_siswa['nik']);
				$this->load->view('user/masuk',$data);
			}
		}
	}

	public function update($user_id){
		$this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('ttl', 'TTL', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('namaBapak', 'Nama Bapak', 'required');
		$this->form_validation->set_rules('kerjaBapak', 'Kerja Bapak', 'required');
		$this->form_validation->set_rules('tempatBapak', 'Tempat Bapak', 'required');
		$this->form_validation->set_rules('gajiBapak', 'Gaji Bapak', 'required');
		$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('kerjaIbu', 'Kerja Ibu', 'required');
		$this->form_validation->set_rules('tempatIbu', 'Tempat Ibu', 'required');
		$this->form_validation->set_rules('gajiIbu', 'Gaji Ibu', 'required');
		$this->form_validation->set_rules('asalSekolah', 'Asal Sekolah', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['users'] = $this->UserModel->find($user_id);
			$this->load->view('user/ListPendaftar', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				//form submit dengan gambar diisi
				//load uploading file library
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);


				if ( ! $this->upload->do_upload())
				{
					$data['users'] = $this->UserModel->find($user_id);
					$this->load->view('user/EditData', $data);
				} else {
					$gambar = $this->upload->data();
					$data_siswa=	array(
						'namaLengkap'			=> set_value('namaLengkap'),
						'nik'					=> set_value('nik'),
						'ttl'					=> set_value('ttl'),
						'umur'					=> set_value('umur'),
						'alamat'				=> set_value('alamat'),
						'namaBapak'				=> set_value('namaBapak'),
						'kerjaBapak'			=> set_value('kerjaBapak'),
						'tempatBapak'			=> set_value('tempatBapak'),
						'gajiBapak'				=> set_value('gajiBapak'),
						'namaIbu'				=> set_value('namaIbu'),
						'kerjaIbu'				=> set_value('kerjaIbu'),
						'tempatIbu'				=> set_value('tempatIbu'),
						'asalSekolah'			=> set_value('asalSekolah'),
						'ijazah'				=> $gambar['file_name'],
						'kk'					=> $gambar['file_name']
					);
					$this->UserModel->update($user_id, $data_siswa);
					redirect('user/ListPendaftar');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$data_siswa =	array(
					'namaLengkap'			=> set_value('namaLengkap'),
					'nik'					=> set_value('nik'),
					'ttl'					=> set_value('ttl'),
					'umur'					=> set_value('umur'),
					'alamat'				=> set_value('alamat'),
					'namaBapak'				=> set_value('namaBapak'),
					'kerjaBapak'			=> set_value('kerjaBapak'),
					'tempatBapak'			=> set_value('tempatBapak'),
					'gajiBapak'				=> set_value('gajiBapak'),
					'namaIbu'				=> set_value('namaIbu'),
					'kerjaIbu'				=> set_value('kerjaIbu'),
					'tempatIbu'				=> set_value('tempatIbu'),
					'asalSekolah'			=> set_value('asalSekolah')
				);
				$this->UserModel->update($user_id, $data_siswa);
				redirect('user/ListPendaftar');
			}
		}
	}
	
	public function delete($user_id){
		$this->UserModel->delete($user_id);
		redirect('user/ListPendaftar');
	}

	public function daftar(){
		$this->load->view('user/formPendaftaran');
	}

	public function sekolah(){
		$this->load->view('user/TentangSekolah');
	}

	public function login(){
		$usernameU = $this->input->post('usernameU');
		$passwordU = $this->input->post('passwordU');

		$data = $this->UserModel->findByUsername($usernameU);
		if($data){
			if($passwordU == $data['passwordU']){
				$user = array(
					'login' => $data['usernameU'],
				);
				$this->session->set_userdata($user);
				$uss = array(
					'login' => $this->UserModel->findByUsername($data['usernameU']),
				);
				$this->load->view('user/indexMasuk',$uss);
			}
			else{
				$this->session->set_flashdata('message','<script langue="javascript">window.alert("Password Salah")</script>');
				redirect('/auth');
			}
		} else{
			$this->session->set_flashdata('message','<script langue="javascript">window.alert("Username Salah")</script>');
			redirect('/auth');
		}
	}
	public function logout(){
		$this->session->unset_userdata('login');
		$this->load->view('auth/login_a');
	}

	public function udahLogin(){
		$data = array(
			'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
		);
		$this->load->view('user/indexMasuk', $data);
	}

	public function hasilAkhirBanget(){
		$xx = array(
			'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
		);
		$this->load->view('user/hasilAkhir', $xx);
	}

	public function date_valid($ttl){
		$parts = explode("/", $ttl);
		if (count($parts) == 3) {      
			if (checkdate($parts[1], $parts[0], $parts[2]))
			{
				return TRUE;
			}
		}
		$this->form_validation->set_message('date_valid', 'The Date field must be mm/dd/yyyy');
		return false;
	}

	public function bayar(){
		$xx = array(
			'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
		);
		$this->load->view('user/inputPembayaran', $xx);
	}

	public function editBukti($un){
		$this->load->library('upload');
			//load uploading file library
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|gif|jpeg|JPG|PNG';
			$config['max_size']	= '300'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('bukti')){
				echo $this->upload->display_errors();
				$this->load->view('user/inputPembayaran');
				echo "<script>
				alert('Pendaftaran Gagal');
				</script>";
			} else {
				//file berhasil diupload -> lanjutkan ke query INSERT
				// eksekusi query INSERT
				$bukti = $this->upload->data('file_name');
				$data_siswa=	array(
					'bukti'					=> $bukti
				);
				$dataa= $this->user->findByUsername($un);
				$this->UserModel->upBukti($dataa);
				
				$data = array(
					'login' => $this->UserModel->findByUsername($this->session->userdata('login')),
				);
				$this->load->view('user/indexMasuk', $data);
			}
		}

		public function showMasuk(){
		$data['users'] = $this->UserModel->all();
		$this->load->view('user/ListPendaftarMasuk', $data);
	}
	}