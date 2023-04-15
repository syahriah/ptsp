<?php

class Departemen extends CI_Controller{

	public function index()
	{
		$this->load->view('template_departemen/header');
		$this->load->view('departemen');
		$this->load->view('template_departemen/footer');
	}

	public function index2()
	{
		$data['imb_mushola'] = $this->m_imb_mushola->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_imb_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	public function index3()
	{
		$data['bantuan_masjid'] = $this->m_bantuan_masjid->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_bantuan_masjid', $data);
		$this->load->view('template_departemen/footer');
	}

	public function index4()
	{
		$data['registrasi_mushola'] = $this->m_registrasi_mushola->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_registrasi_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	public function index5()
	{
		$data['ubah_status'] = $this->m_ubah_status_mushola->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_ubah_status_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	public function index6()
	{
		$data['mutasi_sekolah'] = $this->m_mutasi_sekolah->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_mutasi_sekolah', $data);
		$this->load->view('template_departemen/footer');
	}

	public function index7()
	{
		$data['batal_haji'] = $this->m_batal_haji->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_batal_haji', $data);
		$this->load->view('template_departemen/footer');
	}
	public function index8()
	{
		$data['rumah_ibadat'] = $this->m_rumah_ibadat->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_rumah_ibadat', $data);
		$this->load->view('template_departemen/footer');
	}
	public function index9()
	{
		$data['pindah_agama'] = $this->m_pindah_agama->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_pindah_agama', $data);
		$this->load->view('template_departemen/footer');
	}
	public function index10()
	{
		$data['rohaniawan'] = $this->m_rohaniawan->tampil_data()->
			result();

		$this->load->view('template_departemen/header');
		$this->load->view('departemen/departemen_rohaniawan', $data);
		$this->load->view('template_departemen/footer');
	}

	public function upload_dpt() 
	{
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/upload_dpt';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>');
				redirect('departemen/index'); die;
			
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}

		}

		$data = array(
			'surat_permohonan'	=> $surat_permohonan
		);

		$this->m_departemen->input_data($data, 'tb_departemen');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('departemen/index');
	}


	
	public function detail_imb_mushola($id)
	{
		$this->load->model('m_imb_mushola');
		$detail = $this->m_imb_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_imb_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_bantuan_masjid($id)
	{
		$this->load->model('m_bantuan_masjid');
		$detail = $this->m_bantuan_masjid->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_bantuan_masjid', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_batal_haji($id)
	{
		$this->load->model('m_batal_haji');
		$detail = $this->m_batal_haji->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_batal_haji', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_mutasi_sekolah($id)
	{
		$this->load->model('m_mutasi_sekolah');
		$detail = $this->m_mutasi_sekolah->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_mutasi_sekolah', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_registrasi_mushola($id)
	{
		$this->load->model('m_registrasi_mushola');
		$detail = $this->m_registrasi_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_registrasi_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_rohaniawan($id)
	{
		$this->load->model('m_rohaniawan');
		$detail = $this->m_rohaniawan->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_rohaniawan', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_rumah_ibadat($id)
	{
		$this->load->model('m_rumah_ibadat');
		$detail = $this->m_rumah_ibadat->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_rumah_ibadat', $data);
		$this->load->view('template_departemen/footer');
	}

	public function detail_ubah_status_mushola($id)
	{
		$this->load->model('m_ubah_status_mushola');
		$detail = $this->m_ubah_status_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_departemen/header');
		$this->load->view('action_dept/detail_ubah_status_mushola', $data);
		$this->load->view('template_departemen/footer');
	}

	
}
