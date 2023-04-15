<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('role_id') !='3') 
		{
			$this->session->set_flashdata('pesan',
			'<div class="alert alert-warning fade show text-center" role="alert ">
				Anda Belum Login!!!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
			redirect('auth');
		}
	}

	public function index()
	{
		
		$this->load->view('template_user/header');
		$this->load->view('layanan_umum');
		$this->load->view('template_user/footer');
	}

	public function index2()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_imb_mushola');
		$this->load->view('template_user/footer');
	}
	public function index3()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_bantuan_masjid');
		$this->load->view('template_user/footer');
	}
	public function index4()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_registrasi_mushola');
		$this->load->view('template_user/footer');
	}
	public function index5()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_ubah_status_mushola');
		$this->load->view('template_user/footer');
	}
	public function index6()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_mutasi_sekolah');
		$this->load->view('template_user/footer');
	}
	public function index7()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_batal_haji');
		$this->load->view('template_user/footer');
	}
	public function index8()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_rumah_ibadat');
		$this->load->view('template_user/footer');
	}

	public function index9()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_pindah_agama');
		$this->load->view('template_user/footer');
	}

	public function index10()
	{
		$this->load->view('template_user/header');
		$this->load->view('umum/daftar_rohaniawan');
		$this->load->view('template_user/footer');
	}

	public function tambah_imb_mushola() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$alamat		= $this->input->post('alamat');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}
		
		$profil_masjid = $_FILES['profil_masjid'];
		if ($profil_masjid=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('profil_masjid')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$profil_masjid=$this->upload->data('file_name');
			}
		}

		$susunan_kepengurusan = $_FILES['susunan_kepengurusan'];
		if ($susunan_kepengurusan=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('susunan_kepengurusan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$susunan_kepengurusan=$this->upload->data('file_name');
			}
		}

		$berita_acara = $_FILES['berita_acara'];
		if ($berita_acara=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('berita_acara')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$berita_acara=$this->upload->data('file_name');
			}
		}

		$ttd_warga = $_FILES['ttd_warga'];
		if ($ttd_warga=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('ttd_warga')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$ttd_warga=$this->upload->data('file_name');
			}
		}

		$fc_ktp = $_FILES['fc_ktp'];
		if ($fc_ktp=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('fc_ktp')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$fc_ktp=$this->upload->data('file_name');
			}
		}

		$surat_tanah = $_FILES['surat_tanah'];
		if ($surat_tanah=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_tanah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$surat_tanah=$this->upload->data('file_name');
			}
		}

		$denah_lokasi = $_FILES['denah_lokasi'];
		if ($denah_lokasi=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('denah_lokasi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$denah_lokasi=$this->upload->data('file_name');
			}
		}

		$rencana_bangunan = $_FILES['rencana_bangunan'];
		if ($rencana_bangunan=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rencana_bangunan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$rencana_bangunan=$this->upload->data('file_name');
			}
		}

		$keterangan_domisili = $_FILES['keterangan_domisili'];
		if ($keterangan_domisili=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_domisili')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$keterangan_domisili=$this->upload->data('file_name');
			}
		}

		$rekomendasi_dmi = $_FILES['rekomendasi_dmi'];
		if ($rekomendasi_dmi=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekomendasi_dmi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$rekomendasi_dmi=$this->upload->data('file_name');
			}
		}

		$rekomendasi_fkub = $_FILES['rekomendasi_fkub'];
		if ($rekomendasi_fkub=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekomendasi_fkub')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$rekomendasi_fkub=$this->upload->data('file_name');
			}
		}

		$pengantar_kua = $_FILES['pengantar_kua'];
		if ($pengantar_kua=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('pengantar_kua')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$pengantar_kua=$this->upload->data('file_name');
			}
		}

		$anggaran = $_FILES['anggaran'];
		if ($anggaran=''){}else{
			$config['upload_path']		='./assets/imb_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('anggaran')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index2'); die();
			} else{
				$anggaran=$this->upload->data('file_name');
			}
		}

		


		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'alamat'		=> $alamat,
			'surat_permohonan'		=> $surat_permohonan,
			'profil_masjid'			=> $profil_masjid,
			'susunan_kepengurusan'	=> $susunan_kepengurusan,
			'berita_acara'			=> $berita_acara,
			'ttd_warga'				=> $ttd_warga,
			'fc_ktp'				=> $fc_ktp,
			'surat_tanah'			=> $surat_tanah,
			'denah_lokasi'			=> $denah_lokasi,
			'rencana_bangunan'		=> $rencana_bangunan,
			'keterangan_domisili'	=> $keterangan_domisili,
			'rekomendasi_dmi'		=> $rekomendasi_dmi,
			'rekomendasi_fkub'		=> $rekomendasi_fkub,
			'pengantar_kua'			=> $pengantar_kua,
			'anggaran'				=> $anggaran,
			
		);

		$this->m_imb_mushola->input_data($data, 'tb_imb_mushola');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index2'); 
	}

	public function tambah_bantuan_masjid() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$alamat		= $this->input->post('alamat');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}
		
		$profil_masjid = $_FILES['profil_masjid'];
		if ($profil_masjid=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('profil_masjid')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$profil_masjid=$this->upload->data('file_name');
			}
		}

		$susunan_kepengurusan = $_FILES['susunan_kepengurusan'];
		if ($susunan_kepengurusan=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('susunan_kepengurusan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$susunan_kepengurusan=$this->upload->data('file_name');
			}
		}

		$keterangan_domisili = $_FILES['keterangan_domisili'];
		if ($keterangan_domisili=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_domisili')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$keterangan_domisili=$this->upload->data('file_name');
			}
		}

		$sk_kepengurusan_dmi = $_FILES['sk_kepengurusan_dmi'];
		if ($sk_kepengurusan_dmi=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sk_kepengurusan_dmi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$sk_kepengurusan_dmi=$this->upload->data('file_name');
			}
		}

		$rab = $_FILES['rab'];
		if ($rab=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rab')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$rab=$this->upload->data('file_name');
			}
		}

		$foto_ktp = $_FILES['foto_ktp'];
		if ($foto_ktp=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto_ktp')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$foto_ktp=$this->upload->data('file_name');
			}
		}

		$buku_rekening = $_FILES['buku_rekening'];
		if ($buku_rekening=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('buku_rekening')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$buku_rekening=$this->upload->data('file_name');
			}
		}

		$rekomendasi_kua = $_FILES['rekomendasi_kua'];
		if ($rekomendasi_kua=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekomendasi_kua')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$rekomendasi_kua=$this->upload->data('file_name');
			}
		}

		$gambar_bangunan = $_FILES['gambar_bangunan'];
		if ($gambar_bangunan=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_bangunan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$gambar_bangunan=$this->upload->data('file_name');
			}
		}

		$status_tanah = $_FILES['status_tanah'];
		if ($status_tanah=''){}else{
			$config['upload_path']		='./assets/bantuan_masjid';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('status_tanah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index3'); die();
			} else{
				$status_tanah=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'alamat'		=> $alamat,
			'surat_permohonan'			=> $surat_permohonan,
			'profil_masjid'				=> $profil_masjid,
			'susunan_kepengurusan'		=> $susunan_kepengurusan,
			'keterangan_domisili'		=> $keterangan_domisili,
			'sk_kepengurusan_dmi'		=> $sk_kepengurusan_dmi,
			'rab'						=> $rab,
			'foto_ktp'					=> $foto_ktp,
			'buku_rekening'				=> $buku_rekening,
			'rekomendasi_kua'			=> $rekomendasi_kua,
			'gambar_bangunan'			=> $gambar_bangunan,
			'status_tanah'				=> $status_tanah,
		);

		$this->m_bantuan_masjid->input_data($data, 'tb_bantuan_masjid');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index3'); 
	}

	public function tambah_batal_haji() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}
		
		$setoran = $_FILES['setoran'];
		if ($setoran=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('setoran')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$setoran=$this->upload->data('file_name');
			}
		}

		$no_porsi = $_FILES['no_porsi'];
		if ($no_porsi=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('no_porsi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$no_porsi=$this->upload->data('file_name');
			}
		}

		$surat_daftar = $_FILES['surat_daftar'];
		if ($surat_daftar=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_daftar')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$surat_daftar=$this->upload->data('file_name');
			}
		}

		$apk_tf = $_FILES['apk_tf'];
		if ($apk_tf=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('apk_tf')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$apk_tf=$this->upload->data('file_name');
			}
		}

		$surat_pernyataan = $_FILES['surat_pernyataan'];
		if ($surat_pernyataan=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_pernyataan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$surat_pernyataan=$this->upload->data('file_name');
			}
		}

		$surat_kuasa = $_FILES['surat_kuasa'];
		if ($surat_kuasa=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_kuasa')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$surat_kuasa=$this->upload->data('file_name');
			}
		}

		$sptjm = $_FILES['sptjm'];
		if ($sptjm=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sptjm')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$sptjm=$this->upload->data('file_name');
			}
		}

		$rekening_kuasa = $_FILES['rekening_kuasa'];
		if ($rekening_kuasa=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekening_kuasa')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$rekening_kuasa=$this->upload->data('file_name');
			}
		}

		$ktp_kuasa = $_FILES['ktp_kuasa'];
		if ($ktp_kuasa=''){}else{
			$config['upload_path']		='./assets/batal_haji';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('ktp_kuasa')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index7'); die();
			} else{
				$ktp_kuasa=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'surat_permohonan'		=> $surat_permohonan,
			'setoran'				=> $setoran,
			'no_porsi'				=> $no_porsi,
			'surat_daftar'			=> $surat_daftar,
			'apk_tf'				=> $apk_tf,
			'surat_pernyataan'		=> $surat_pernyataan,
			'surat_kuasa'			=> $surat_kuasa,
			'sptjm'					=> $sptjm,
			'rekening_kuasa'		=> $rekening_kuasa,
			'ktp_kuasa'				=> $ktp_kuasa,
		);

		$this->m_batal_haji->input_data($data, 'tb_batal_haji');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index7'); 
	}

	public function tambah_mutasi_sekolah() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$surat_pindah = $_FILES['surat_pindah'];
		if ($surat_pindah=''){}else{
			$config['upload_path']		='./assets/mutasi_sekolah';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_pindah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index6'); die();
			} else{
				$surat_pindah=$this->upload->data('file_name');
			}
		}

		$raport = $_FILES['raport'];
		if ($raport=''){}else{
			$config['upload_path']		='./assets/mutasi_sekolah';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('raport')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index6'); die();
			} else{
				$raport=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'surat_pindah'	=> $surat_pindah,
			'raport'		=> $raport,
		);

		$this->m_mutasi_sekolah->input_data($data, 'tb_mutasi_sekolah');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index6');
	}

	public function tambah_pindah_agama() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
		);

		$this->m_pindah_agama->input_data($data, 'tb_pindah_agama');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index9');
	}
	
	public function tambah_registrasi_mushola() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$alamat		= $this->input->post('alamat');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}
		
		$profil_masjid = $_FILES['profil_masjid'];
		if ($profil_masjid=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('profil_masjid')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$profil_masjid=$this->upload->data('file_name');
			}
		}

		$keterangan_domisili = $_FILES['keterangan_domisili'];
		if ($keterangan_domisili=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_domisili')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$keterangan_domisili=$this->upload->data('file_name');
			}
		}

		$sk_kepengurusan_dmi = $_FILES['sk_kepengurusan_dmi'];
		if ($sk_kepengurusan_dmi=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sk_kepengurusan_dmi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$sk_kepengurusan_dmi=$this->upload->data('file_name');
			}
		}

		$foto_ktp = $_FILES['foto_ktp'];
		if ($foto_ktp=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto_ktp')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$foto_ktp=$this->upload->data('file_name');
			}
		}

		$pengantar_kua = $_FILES['pengantar_kua'];
		if ($pengantar_kua=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('pengantar_kua')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$pengantar_kua=$this->upload->data('file_name');
			}
		}
		
		$surat_tanah = $_FILES['surat_tanah'];
		if ($surat_tanah=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_tanah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$surat_tanah=$this->upload->data('file_name');
			}
		}

		$gambar_bangunan = $_FILES['gambar_bangunan'];
		if ($gambar_bangunan=''){}else{
			$config['upload_path']		='./assets/registrasi_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar_bangunan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index4'); die();
			} else{
				$gambar_bangunan=$this->upload->data('file_name');
			}
		}


		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'alamat'		=> $alamat,
			'surat_permohonan'			=> $surat_permohonan,
			'profil_masjid'				=> $profil_masjid,
			'keterangan_domisili'		=> $keterangan_domisili,
			'sk_kepengurusan_dmi'		=> $sk_kepengurusan_dmi,
			'foto_ktp'					=> $foto_ktp,
			'pengantar_kua'				=> $pengantar_kua,
			'gambar_bangunan'			=> $gambar_bangunan,
			'surat_tanah'				=> $surat_tanah,
		);

		$this->m_registrasi_mushola->input_data($data, 'tb_registrasi_mushola');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index4');
	}

	public function tambah_rumah_ibadat() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$alamat		= $this->input->post('alamat');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}

		$proposal = $_FILES['proposal'];
		if ($proposal=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('proposal')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$proposal=$this->upload->data('file_name');
			}
		}

		$ttd_warga = $_FILES['ttd_warga'];
		if ($ttd_warga=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('ttd_warga')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$ttd_warga=$this->upload->data('file_name');
			}
		}

		$keterangan_domisili = $_FILES['keterangan_domisili'];
		if ($keterangan_domisili=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_domisili')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$keterangan_domisili=$this->upload->data('file_name');
			}
		}

		$keterangan_camat = $_FILES['keterangan_camat'];
		if ($keterangan_camat=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_camat')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$keterangan_camat=$this->upload->data('file_name');
			}
		}

		$rekomendasi_fkub = $_FILES['rekomendasi_fkub'];
		if ($rekomendasi_fkub=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekomendasi_fkub')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$rekomendasi_fkub=$this->upload->data('file_name');
			}
		}

		$susunan_pengurus = $_FILES['susunan_pengurus'];
		if ($susunan_pengurus=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('susunan_pengurus')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8'); die();
			} else{
				$susunan_pengurus=$this->upload->data('file_name');
			}
		}

		$foto_ktp = $_FILES['foto_ktp'];
		if ($foto_ktp=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto_ktp')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$foto_ktp=$this->upload->data('file_name');
			}
		}

		$sinode_pendirian = $_FILES['sinode_pendirian'];
		if ($sinode_pendirian=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sinode_pendirian')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$sinode_pendirian=$this->upload->data('file_name');
			}
		}

		$sinode_penunjukan = $_FILES['sinode_penunjukan'];
		if ($sinode_penunjukan=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sinode_penunjukan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$sinode_penunjukan=$this->upload->data('file_name');
			}
		}

		$anggaran = $_FILES['anggaran'];
		if ($anggaran=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('anggaran')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$anggaran=$this->upload->data('file_name');
			}
		}

		$nama_dan_ttd = $_FILES['nama_dan_ttd'];
		if ($nama_dan_ttd=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('nama_dan_ttd')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$nama_dan_ttd=$this->upload->data('file_name');
			}
		}

		$status_tanah = $_FILES['status_tanah'];
		if ($status_tanah=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('status_tanah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$status_tanah=$this->upload->data('file_name');
			}
		}

		$denah_lokasi = $_FILES['denah_lokasi'];
		if ($denah_lokasi=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('denah_lokasi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$denah_lokasi=$this->upload->data('file_name');
			}
		}

		$foto_bangunan = $_FILES['foto_bangunan'];
		if ($foto_bangunan=''){}else{
			$config['upload_path']		='./assets/rumah_ibadat';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto_bangunan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index8');die();
			} else{
				$foto_bangunan=$this->upload->data('file_name');
			}
		}


		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'alamat'		=> $alamat,
			'surat_permohonan'		=> $surat_permohonan,
			'proposal'				=> $proposal,
			'ttd_warga'				=> $ttd_warga,
			'keterangan_domisili'	=> $keterangan_domisili,
			'keterangan_camat'		=> $keterangan_camat,
			'rekomendasi_fkub'		=> $rekomendasi_fkub,
			'susunan_pengurus'		=> $susunan_pengurus,
			'foto_ktp'				=> $foto_ktp,
			'sinode_pendirian'		=> $sinode_pendirian,
			'sinode_penunjukan'		=> $sinode_penunjukan,
			'anggaran'				=> $anggaran,
			'nama_dan_ttd'			=> $nama_dan_ttd,
			'status_tanah'			=> $status_tanah,
			'denah_lokasi'			=> $denah_lokasi,
			'foto_bangunan'			=> $foto_bangunan,
		);

		$this->m_rumah_ibadat->input_data($data, 'tb_rumah_ibadat');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index8');
	}


	public function tambah_ubah_status_mushola() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$alamat		= $this->input->post('alamat');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}
		}
		
		$profil_masjid = $_FILES['profil_masjid'];
		if ($profil_masjid=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('profil_masjid')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$profil_masjid=$this->upload->data('file_name');
			}
		}

		$keterangan_domisili = $_FILES['keterangan_domisili'];
		if ($keterangan_domisili=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('keterangan_domisili')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$keterangan_domisili=$this->upload->data('file_name');
			}
		}

		$sk_kepengurusan_dmi = $_FILES['sk_kepengurusan_dmi'];
		if ($sk_kepengurusan_dmi=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('sk_kepengurusan_dmi')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$sk_kepengurusan_dmi=$this->upload->data('file_name');
			}
		}

		$rab = $_FILES['rab'];
		if ($rab=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rab')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$rab=$this->upload->data('file_name');
			}
		}

		$foto_ktp = $_FILES['foto_ktp'];
		if ($foto_ktp=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto_ktp')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$foto_ktp=$this->upload->data('file_name');
			}
		}

		$surat_tanah = $_FILES['surat_tanah'];
		if ($surat_tanah=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_tanah')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$surat_tanah=$this->upload->data('file_name');
			}
		}

		$buku_rekening = $_FILES['buku_rekening'];
		if ($buku_rekening=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('buku_rekening')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); redirect('umum/index5'); die();
			} else{
				$buku_rekening=$this->upload->data('file_name');
			}
		}

		$rekomendasi_kua = $_FILES['rekomendasi_kua'];
		if ($rekomendasi_kua=''){}else{
			$config['upload_path']		='./assets/ubah_status_mushola';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('rekomendasi_kua')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>'); 
				redirect('umum/index5'); die();
			} else{
				$rekomendasi_kua=$this->upload->data('file_name');
			}
		}
		

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'alamat'		=> $alamat,
			'surat_permohonan'			=> $surat_permohonan,
			'profil_masjid'				=> $profil_masjid,
			'keterangan_domisili'		=> $keterangan_domisili,
			'sk_kepengurusan_dmi'		=> $sk_kepengurusan_dmi,
			'rab'						=> $rab,
			'foto_ktp'					=> $foto_ktp,
			'surat_tanah'				=> $surat_tanah,
			'buku_rekening'				=> $buku_rekening,
			'rekomendasi_kua'			=> $rekomendasi_kua,
		);

		$this->m_ubah_status_mushola->input_data($data, 'tb_ubah_status');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index5');
	}


	public function tambah_rohaniawan() 
	{
		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');
		$nomor_hp	= $this->input->post('nomor_hp');
		$tanggal	= $this->input->post('tanggal');
		$surat_permohonan = $_FILES['surat_permohonan'];
		if ($surat_permohonan=''){}else{
			$config['upload_path']		='./assets/rohaniawan';
			$config['allowed_types']	='pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('surat_permohonan')){
				$this->session->set_flashdata('message', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="alert-heading"><strong>Data Permohonan Gagagl Disimpan!!</strong></h4>
					<strong>Mohon Input File Berkas Persyaratan Dalam Bentuk PDF !!!</strong> 
				</div>');
				redirect('umum/index10'); die;
			
			} else{
				$surat_permohonan=$this->upload->data('file_name');
			}

		}

		$data = array(
			'nama'			=> $nama,
			'email'			=> $email,
			'nomor_hp'		=> $nomor_hp,
			'tanggal'		=> $tanggal,
			'surat_permohonan'	=> $surat_permohonan
		);

		$this->m_rohaniawan->input_data($data, 'tb_rohaniawan');
		$this->session->set_flashdata('message', 
		'<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="alert-heading"><strong>Data Permohonan Layanan Berhasil Disimpan!</strong></h4>
		<strong>Permohonan Akan Segera Diproses!!</strong> 
	  	</div>');
		redirect('umum/index10');
	}
}
