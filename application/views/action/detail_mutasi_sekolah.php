
            <!-- page content -->
            <div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_right">
        <h3>Layanan Permohonan Pindah atau Melanjutkan Sekolah</h3>
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
                        </form>
                      </div>

                    <div id="step-2">
                            <div class="item form-group">
                              <h5 class="StepTitle">Surat pindah/lulus sekolah <br>dari Madrasah asal<br></h5><br>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/mutasi_sekolah/<?php echo $detail->surat_pindah; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                      <div id="step-3">
                      <div class="item form-group">
                        <h5 class="StepTitle">Foto Raport semester terakhir<br><br></h5>
                                <div class="col-md-8 col-sm-6 mx-5 px-5"><embed src="<?php echo base_url(); ?>assets/mutasi_sekolah/<?php echo $detail->raport; ?>"  width="1300px" height="700px"></div>
                            </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- End SmartWizard Content -->
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
  