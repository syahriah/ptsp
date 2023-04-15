<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	public function index()
	{
		$this->load->view('landing_page');
	}

    public function tambah_pesan() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$isi_pesan	= $this->input->post('isi_pesan');
		
		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'isi_pesan'		=> $isi_pesan,
		);

		$this->m_pesan->input_data($data, 'tb_pesan');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<h6 class="alert-heading"><strong>Pesan Berhasil Disimpan!</strong></h6>
		<strong>Pesan Balasan Akan masuk kedalam email yang anda masukkan!!</strong> 
	  	</div>');
		redirect('landing_page/index#team');
	}
}
