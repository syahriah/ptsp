
            <!-- page content -->
<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_right">
          <h3>Layanan Permohonan IMB Mushola</h3>
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
                            <span class="step_no">11</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-12">
                            <span class="step_no">12</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-13">
                            <span class="step_no">13</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-14">
                            <span class="step_no">14</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-15">
                            <span class="step_no">15</span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <span class="section"><br>Data Pemohon</span><br>

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
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->surat_permohonan; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-3">
                      <div class="item form-group">
                        <h5 class="StepTitle">Profil Masjid/Mushola<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->profil_masjid; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-4">
                      <div class="item form-group">
                        <h5 class="StepTitle">Susunan Kepengurusan<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->susunan_kepengurusan; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-5">
                      <div class="item form-group">
                        <h5 class="StepTitle">Berita Acara Kesepakatan Untuk <br>mendirikan Masjid/ Mushola<br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->berita_acara; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-6">
                      <div class="item form-group">
                        <h5 class="StepTitle">Tanda tangan Warga setempat 90 Orang</h5>
                                <div class="col-md-8 col-sm-6"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->ttd_warga; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-7">
                      <div class="item form-group">
                        <h5 class="StepTitle">Foto Surat Status Tanah (Sertifikat / <br>Akta Ikrar Wakaf dari KUA)</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->surat_tanah; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-8">
                      <div class="item form-group">
                        <h5 class="StepTitle">Foto KTP 60 Orang<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->fc_ktp; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-9">
                      <div class="item form-group">
                        <h5 class="StepTitle">Denah Lokasi<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->denah_lokasi; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-10">
                      <div class="item form-group">
                        <h5 class="StepTitle">Gambar Rencana bangunan<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->rencana_bangunan; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-11">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat keterangan Domisili dari LURAH</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->keterangan_domisili; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-12">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat Rekomendasi dari DMI <br>(Dewan Masjid Indonesia) Kecamatan</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->rekomendasi_dmi; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-13">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat Rekomendasi dari FKUB <br>(Forum Kerukunan Umat Beragama)</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->rekomendasi_fkub; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-14">
                      <div class="item form-group">
                        <h5 class="StepTitle">Surat Pengantar dari KUA (Kantor Urusan Agama)</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->pengantar_kua; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-15">
                      <div class="item form-group">
                        <h5 class="StepTitle">Anggaran Dasar/ Anggaran Rumah Tangga</h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/imb_mushola/<?php echo $detail->anggaran; ?>"  width="1200px" height="700px"></div>
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

            
                    
