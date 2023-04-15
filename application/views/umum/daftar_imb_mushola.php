
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="mx-auto">
                    <div class="page-title">
                        <div class="title_right">
                            <h3>Layanan Permohonan Rekomendasi Ijin Mendirikan IMB Mushola</h3>
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
                                <?php echo form_open_multipart('umum/tambah_imb_mushola'); ?>
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
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Alamat Masjid/Mushola</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control" class='text' type="text" name="alamat" required='required'></div>
                                        </div><br><br>
                                        <span class="section">Dokumen Persyaratan (Dalam Bentuk PDF)</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"> <h6>Surat Permohonan ditujukan kepada Kepala Kantor Kemenag Kota Balikpapan</h6> <span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="surat_permohonan" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Profil Masjid/Mushola</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="profil_masjid" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Susunan Kepengurusan/Pembangunan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="susunan_kepengurusan" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Berita Acara Kesepakatan Untuk mendirikan Masjid/ Mushalla</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="berita_acara" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Tanda tangan Warga setempat 90 Orang</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="ttd_warga" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Foto KTP 60 Orang</h6><span class="required"></span></label>
                                            <div class="col-md- col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="fc_ktp" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Foto Surat Status Tanah (Sertifikat / Akta Ikrar Wakaf dari KUA)</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                                <input class="form-control left" class='file' type="file" name="surat_tanah" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Denah Lokasi</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="denah_lokasi" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Gambar Rencana bangunan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="rencana_bangunan" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat keterangan Domisili dari LURAH</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="keterangan_domisili" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Rekomendasi dari DMI (Dewan Masjid Indonesia) Kecamatan</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="rekomendasi_dmi" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Rekomendasi dari FKUB (Forum Kerukunan Umat Beragama)</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="rekomendasi_fkub" required='required'></div>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Surat Pengantar dari KUA (Kantor Urusan Agama)</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="pengantar_kua" required='required'></div>>
                                        </div><br>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 mx-5"><h6>Anggaran Dasar/ Anggaran Rumah Tangga</h6><span class="required"></span></label>
                                            <div class="col-md-8 col-sm-6">
                                            <input class="form-control left" class='file' type="file" name="anggaran" required='required'></div>>
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

            