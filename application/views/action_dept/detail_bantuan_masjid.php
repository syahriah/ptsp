
            <!-- page content -->
<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_right">
        <h3>Layanan Permohonan Bantuan Masjid / Mushola</h3>
        </div>
      </div>
      <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_content">
                    <h3>Data Permohonan Layanan</h3><br>
                    <!-- Tabs -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-8">
                            <span class="step_no">8</span>
                          </a>
                        </li>
                        
                        <li>
                          <a href="#step-9">
                            <span class="step_no">9</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-10">
                            <span class="step_no">10</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-11">
                            <span class="step_no">10</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-12">
                            <span class="step_no">10</span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <span class="section"><br>Data Pemohon</span><br>
                          <?php echo $this->session->flashdata('message');?>
                          <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Nama</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <h6><?php echo $detail->nama ?></h6>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Email</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <h6><?php echo $detail->email ?></h6>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Nomor Hp</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <h6><?php echo $detail->nomor_hp ?></h6>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Tanggal</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <h6><?php echo $detail->tanggal ?></h6>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Alamat Mushola/Masjid</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <h6><?php echo $detail->alamat ?></h6>
                                            </div>
                                        </div>
                        </form>
                      </div>

                    <div id="step-2">
                            <div class="item form-group">
                              <h5 class="StepTitle">Surat Permohonan<br></h5><br>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->surat_permohonan; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-3">
                      <div class="item form-group">
                        <h5 class="StepTitle">Profil Masjid/Mushola<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->profil_masjid; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-4">
                      <div class="item form-group">
                        <h5 class="StepTitle">Susunan Kepengurusan<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->susunan_kepengurusan; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-5">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat keterangan Domisili dari LURAH<br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->keterangan_domisili; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-6">
                      <div class="item form-group">
                        <h5 class="StepTitle">Kepengurusan dari DMI (Dewan Masjid Indonesia) Kecamatan</h5>
                                <div class="col-md-8 col-sm-6"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->sk_kepengurusan_dmi; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-7">
                      <div class="item form-group">
                        <h5 class="StepTitle">RAB - Rencana Anggaran Biaya</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->rab; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-8">
                      <div class="item form-group">
                        <h5 class="StepTitle">Foto KTP Ketua, Sekretaris, bendahara ( Leg. Capil )<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->foto_ktp; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-9">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat Rekomendasi dari KUA (Kantor Urusan Agama) Kecamatan<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->rekomendasi_kua; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-10">
                      <div class="item form-group">
                        <h5 class="StepTitle">Buku Rekening<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->buku_rekening; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-11">
                      <div class="item form-group">
                        <h5 class="StepTitle">Gambar bangunan<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->gambar_bangunan; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-12">
                      <div class="item form-group">
                        <h5 class="StepTitle">Status Tanah</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/bantuan_masjid/<?php echo $detail->status_tanah; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    <!-- End SmartWizard Content -->
                    <?php echo form_open_multipart('departemen/upload_dpt'); ?>
                      <span class="section">Upload Dokumen Permohonan Yang Telah Selesai Di Prosess (Dalam Bentuk PDF)!!</span>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Permohonan Layanan</h6> <span class="required"></span></label>
                              <div class="col-md-8 col-sm-6">
                                <input class="form-control left" class='file' type="file" name="surat_permohonan" required='required'></div>
                              </div><br>
                        </div><br>
                        <div class="d-grid gap-1 d-md-flex justify-content-md-end px-5">
                            <button class="btn btn-primary col-1 mx-5" type="submit">Submit</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content --> 
        
      </div>
</div>
  