
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
                                <div class="x_title">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php echo $this->session->flashdata('message');?>
                                    <?php echo form_open_multipart('umum/tambah_mutasi_sekolah'); ?>
                                        <span class="section">Form Persyaratan Layanan</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Nama</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="ex. John f. Kennedy" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>email</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Nomor HP</h6> <span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" type="text" class='number' name="nomor_hp" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Tanggal Permohonan Layanan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="tanggal" required='required'></div>
                                                </div><br><br>
                                        <span class="section">Dokumen Persyaratan (Dalam Bentuk PDF)</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat pindah sekolah dari Madrasah asal / Surat keterangan lulus dari Madrasah asal (bagi yang melanjutkan)</h6> <span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="surat_pindah" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Foto Raport semester terakhir</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="raport" required='required'></div>
                                        </div>
                                        <br>
                                        <div class="row justify-content-center mx-auto">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><span class="required"></span>
                                            <label class="form-check-label" for="flexCheckDefault">
                                            <h5>Data diatas merupakan data yang valid dan benar!!</h5>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-1 d-md-flex justify-content-md-end px-5">
                                            <button class="btn btn-primary col-1 mx-5" type="submit">submit</button>
                                            <button class="btn btn-success col-1" type="button">Draft</button>
                                            <div> <h1> </h1></div>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            