        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Selamat Datang <small>...........</small></h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- content start -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_right">
                            <h3><?php Echo $title?></h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <h2>Biodata</h2>
                    <!-- Tabs -->
                        <h2 class="StepTitle">Data Anda</h2>
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
                                        
                        </form>
                      </div>
                        <h2 class="StepTitle">Surat Permohonan</h2><br>
                            <div class="item form-group">
                                <div class="col-md-8 col-sm-6"><img src="<?php echo base_url(); ?>assets/ktp/<?php echo $detail->ktp; ?>"  width="600px" height="600px"></div>
                            </div>
                      </div>
                    <!-- End SmartWizard Content -->

                    <div class="d-grid gap-1 d-md-flex justify-content-md-end px-5">
                        <button class="btn btn-primary col-1 mx-5" type="submit">Kembali</button>
                        <button class="btn btn-success col-1" type="button">Edit</button>
                      <div> <h1> </h1></div>
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
          <!-- content end -->
