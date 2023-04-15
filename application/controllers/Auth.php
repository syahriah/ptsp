<?php

class Auth extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run()==FALSE) {
			$data['title'] = 'FORM LOGIN';
			$this->load->view('login',$data);
		}else{
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');

			$cek = $this->m_login->cek_login($email, $password);

			if($cek == FALSE)
			{
				$this->session->set_flashdata('pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					email Atau Password Anda Salah !!!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>'); redirect('Auth');
			}else{
				$this->session->set_userdata('role_id', $cek->role_id);
				switch ($cek->role_id){
					case 1 : redirect('admin/index');
							 break;
					case 2 : redirect('departemen/index');
							 break;
					case 3 : redirect('umum/index');
							 break;		 
					default: break;
				}
			}
		}
		
	}

	public function _rules()
	{
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password ','password','required');

	}

}

	// public function profile_user()
	// {
	// 	$data['title'] = "Profile Pengguna";
	// 	$data['user'] = $this->m_login->tampil_data()->result();
	// 	$this->load->model('m_login');
	// 	$detail = $this->m_login->detail_data($id_user);
	// 	$data['detail'] = $detail;

	// 	$this->load->view('template_user/header');
	// 	$this->load->view('profile_user',$data);
	// 	$this->load->view('template_user/footer');
	

	// public function login()
	// {
		
	// 	$this->form_validation->set_rules('email','Email','required');
	// 	$this->form_validation->set_rules('password','Password','required');

	// 	if ($this->form_validation->run() == FALSE)
	// 	{
	// 		$this->load->view('login');
	// 	}else {
	// 		$auth = $this->m_login->cek_login();

	// 		if($auth == FALSE)
	// 		{
	// 			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //             email Atau Password Anda Salah !!!
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //           </div>');
	// 		redirect('auth/login');
	// 		} else 
	// 		{
	// 			$this->session->set_userdata('email',$auth->email);
	// 			$this->session->set_userdata('role_id', $auth->role_id);
				
	// 			switch($auth->role_id)
	// 			{
	// 				case 1 : redirect('admin/index');
	// 						 break;
	// 				case 2 : redirect('departemen/index');
	// 						 break;
	// 				case 3 : redirect('umum/index');
	// 						 break;		 
	// 				default: break;
	// 			}


	// 		}
			
	// 	}
	// }

	

// 	public function registrasi()
// 	{
// 		$nama				= $this->input->post('nama');
// 		$nik				= $this->input->post('nik');
// 		$jenis_kelamin		= $this->input->post('jenis_kelamin');
// 		$tempat_lahir		= $this->input->post('tempat_lahir');
// 		$tanggal_lahir		= $this->input->post('tanggal_lahir');
// 		$no_hp				= $this->input->post('no_hp');
// 		$email				= $this->input->post('email');
// 		$alamat				= $this->input->post('alamat');
// 		$password			= $this->input->post('password');
// 		$ktp 				= $_FILES['ktp'];
// 		if ($ktp=''){}else{
// 			$config['upload_path']		='./assets/ktp';
// 			$config['allowed_types']	='pdf';

// 			$this->load->library('upload', $config);
// 			if(!$this->upload->do_upload('ktp')){
// 				$this->session->set_flashdata('message', 
// 				'<div class="alert alert-danger alert-dismissible" role="alert">
// 					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
// 					<p class="alert-heading"><strong>Data Gagagl Disimpan!!<br></strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</p>
// 				</div>'); redirect('auth/index'); die();
// 			} else{
// 				$ktp=$this->upload->data('file_name');
// 			}
// 		}

// 			$data = array(
// 				'id_user'			=> '',
// 				'nama'				=> $nama,
// 				'nik'				=> $nik,
// 				'jenis_kelamin'		=> $jenis_kelamin,
// 				'tempat_lahir'		=> $tempat_lahir,
// 				'tanggal_lahir'		=> $tanggal_lahir,
// 				'no_hp'				=> $no_hp,
// 				'email'				=> $email,
// 				'password'			=> $password,
// 				'alamat'			=> $alamat,
// 				'ktp'				=> $ktp,
// 				'role_id'			=> 3,
// 			);
			
// 			$this->m_login->input_data($data, 'tb_user');
// 			$this->session->set_flashdata('message', 
// 			'<div class="alert alert-success alert-dismissible" role="alert">
// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
// 				<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
// 				<strong>Permohonan Akan Segera Diproses!!</strong> 
// 			</div>');
// 			redirect('auth/login');
		
// 	}
   
// }
