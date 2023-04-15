
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_right">
                            <h3>Layanan Permohonan Pekomendasi IMB Pendirian Rumah Ibadat</h3>
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
                                    <?php echo form_open_multipart('umum/tambah_rumah_ibadat'); ?>
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
                                                </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Alamat Rumah Ibadat</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" class='text' type="text" name="alamat" required='required'></div>
                                        </div><br><br>
                                        <span class="section">Dokumen Persyaratan (Dalam Bentuk PDF)</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"> <h6>Surat Permohonan Rekomendasi IMB Rumah Ibadat</h6> <span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="surat_permohonan" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Proposal Pendirian Rumah Ibadat meliputi : <br> a. Pendahuluan<br> b. Latar Belakang Pendirian Rumah Ibadat<br> c. Permasalahan/Kebutuhan<br> d. Penutup</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="proposal" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Daftar dan tanda tangan warga setempat yang tidak keberatan atas pendirian rumah ibadat (minimal 60 orang) di tandatangani oleh RT dan fotocopy KTP terlampir</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="ttd_warga" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Keterangan Domisili dari Kelurahan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="keterangan_domisili" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Keterangan Camat</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="keterangan_camat" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Rekomendasi FKUB Kota Balikpapan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="rekomendasi_fkub" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Susunan pengurus Kelembagaan yang masih berlaku periodesasinya</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="susunan_pengurus" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Foto KTP Ketua, Sekretaris dan Bendahara</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="foto_ktp" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>SK Sinode tentang Pendirian Rumah Ibadat</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="sinode_pendirian" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>SK Sinode tentang Penunjukan Gembala/Pendeta Rumah Ibadat</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="sinode_penunjukan" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Anggaran Dasar/ Anggaran Rumah Tangga</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="anggaran" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Daftar nama dan tanda tangan serta Fotocopy KTP pengguna rumah ibadat paling sedikit 90 orang ditandatangani oleh Gembala/Pendeta</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="nama_dan_ttd" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Keterangan sah bukti kepemilikan status tanah bangunan (sertifikat) atau surat bukti hibah</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="status_tanah" required='required'></div>>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Denah Lokasi Rumah Ibadat</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="denah_lokasi" required='required'></div>>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Foto Blueprint bangunan Rumah Ibadat yang akan dibangun</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="foto_bangunan" required='required'></div>>
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
                                            <button class="btn btn-primary col-1 mx-5" type="submit">Submit</button>
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

            