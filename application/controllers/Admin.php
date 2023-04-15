<?php

class Admin extends CI_Controller{

	// public function __construct(){
	// 	parent::__construct();

	// 	if($this->session->userdata('role_id') !='1') {
	// 		$this->session->set_flashdata('pesan',
	// 		'<div class="alert alert-warning fade show text-center" role="alert ">
	// 			Anda Belum Login!!!
	// 			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 		</div>');
	// 		redirect('auth');
	// 	}
	// }
	
	
	public function index()
	{
		$data['title'] = "Dashboard";
		
		$pemohon1 = $this->db->query('SELECT * FROM tb_imb_mushola');
		$data['pemohon1']=$pemohon1->num_rows();

		$pemohon2 = $this->db->query('SELECT * FROM tb_bantuan_masjid');
		$data['pemohon2']=$pemohon2->num_rows();

		$pemohon3 = $this->db->query('SELECT * FROM tb_registrasi_mushola');
		$data['pemohon3']=$pemohon3->num_rows();

		$pemohon4 = $this->db->query('SELECT * FROM tb_ubah_status');
		$data['pemohon4']=$pemohon4->num_rows();

		$pemohon5 = $this->db->query('SELECT * FROM tb_mutasi_sekolah');
		$data['pemohon5']=$pemohon5->num_rows();

		$pemohon6 = $this->db->query('SELECT * FROM tb_batal_haji');
		$data['pemohon6']=$pemohon6->num_rows();

		$pemohon7 = $this->db->query('SELECT * FROM tb_rumah_ibadat');
		$data['pemohon7']=$pemohon7->num_rows();

		$pemohon8 = $this->db->query('SELECT * FROM tb_pindah_agama');
		$data['pemohon8']=$pemohon8->num_rows();
		
		$pemohon9 = $this->db->query('SELECT * FROM tb_rohaniawan');
		$data['pemohon9']=$pemohon9->num_rows();


		$data['pesan_umum'] = $this->m_pesan->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin_ptsp',  $data);
		$this->load->view('template_admin/footer');
	}

	public function index2()
	{
		$data['imb_mushola'] = $this->m_imb_mushola->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_imb_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	public function index3()
	{
		$data['bantuan_masjid'] = $this->m_bantuan_masjid->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_bantuan_masjid', $data);
		$this->load->view('template_admin/footer');
	}

	public function index4()
	{
		$data['registrasi_mushola'] = $this->m_registrasi_mushola->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_registrasi_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	public function index5()
	{
		$data['ubah_status'] = $this->m_ubah_status_mushola->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_ubah_status_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	public function index6()
	{
		$data['mutasi_sekolah'] = $this->m_mutasi_sekolah->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_mutasi_sekolah', $data);
		$this->load->view('template_admin/footer');
	}

	public function index7()
	{
		$data['batal_haji'] = $this->m_batal_haji->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_batal_haji', $data);
		$this->load->view('template_admin/footer');
	}
	public function index8()
	{
		$data['rumah_ibadat'] = $this->m_rumah_ibadat->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_rumah_ibadat', $data);
		$this->load->view('template_admin/footer');
	}
	public function index9()
	{
		$data['pindah_agama'] = $this->m_pindah_agama->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_pindah_agama', $data);
		$this->load->view('template_admin/footer');
	}
	public function index10()
	{
		$data['rohaniawan'] = $this->m_rohaniawan->tampil_data()->
			result();

		$this->load->view('template_admin/header');
		$this->load->view('admin/admin_rohaniawan', $data);
		$this->load->view('template_admin/footer');
	}
	
	public function detail_imb_mushola($id)
	{
		$this->load->model('m_imb_mushola');
		$detail = $this->m_imb_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_imb_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_bantuan_masjid($id)
	{
		$this->load->model('m_bantuan_masjid');
		$detail = $this->m_bantuan_masjid->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_bantuan_masjid', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_batal_haji($id)
	{
		$this->load->model('m_batal_haji');
		$detail = $this->m_batal_haji->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_batal_haji', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_mutasi_sekolah($id)
	{
		$this->load->model('m_mutasi_sekolah');
		$detail = $this->m_mutasi_sekolah->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_mutasi_sekolah', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_registrasi_mushola($id)
	{
		$this->load->model('m_registrasi_mushola');
		$detail = $this->m_registrasi_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_registrasi_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_rohaniawan($id)
	{
		$this->load->model('m_rohaniawan');
		$detail = $this->m_rohaniawan->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_rohaniawan', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_rumah_ibadat($id)
	{
		$this->load->model('m_rumah_ibadat');
		$detail = $this->m_rumah_ibadat->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_rumah_ibadat', $data);
		$this->load->view('template_admin/footer');
	}

	public function detail_ubah_status_mushola($id)
	{
		$this->load->model('m_ubah_status_mushola');
		$detail = $this->m_ubah_status_mushola->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template_admin/header');
		$this->load->view('action/detail_ubah_status_mushola', $data);
		$this->load->view('template_admin/footer');
	}

	
}
