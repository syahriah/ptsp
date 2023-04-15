
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_right">
                            <h3>Layanan Permohonan Rohaniawan (Umum)</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <h2>Data Permohonan Layanan</h2>
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
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
                      </ul>

                      <div id="step-1">
                        <h2 class="StepTitle">Data Pemohon</h2>
                        <form class="form-horizontal form-label-left">

                         <br><br>
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
                        <h2 class="StepTitle">Surat Permohonan</h2><br>
                            <div class="item form-group">
                                <div class="col-md-8 col-sm-6"><embed src="<?php echo base_url(); ?>assets/rohaniawan/<?php echo $detail->surat_permohonan; ?>"  width="1200px" height="700px"></div>
                            </div>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
                      </div>
                    </div>
            
                    