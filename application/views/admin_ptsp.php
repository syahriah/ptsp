

     
       
       
       <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="title">
            <div class="title_right text-center pt-5"> 

              <h5><br>Total Permohonan Layanan Pada Website Pelayanan Terpadu Satu Pintu</h5>
              
        <div class="container">
          <div class="row col-12" style="display: inline-block; " >
          <div class="tile_count justify-content-md-center">
            <div class="col-md-1 col-sm-4 tile_stats_count">
            <span class="count_top text center"><i class="fa fa-clock-o"></i> Layanan IMB Mushola</span>
              <div class="count text-center"><?php echo $pemohon1 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Layanan Bantuan Masjid</span>
              <div class="count text-center"><?php echo $pemohon2 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Registrasi Masjid</span>
              <div class="count text-center"><?php echo $pemohon3 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Status Mushola</span>
              <div class="count text-center"><?php echo $pemohon4 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Mutasi Sekolah</span>
              <div class="count text-center"><?php echo $pemohon5 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Pembatalan Haji</span>
              <div class="count text-center"><?php echo $pemohon6 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Rumah Ibadat</span>
              <div class="count text-center"><?php echo $pemohon7 ?></div>
            </div>
            <div class="col-md-1 col-sm-4 mx-3 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Pindah Agama</span>
              <div class="count text-center"><?php echo $pemohon8 ?></div>
            </div>
            <div class="col-md-1 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Layanan Rohaniawan</span>
              <div class="count text-center"><?php echo $pemohon9 ?></div>
            </div>
            </div>
          </div>
          </div>
         </div>
        </div>
        <br> <br> <br>

        <div class="title">
            <div class="title_right text-center">
              <h5>Pesan Pengguna Umum</h5>
            </div>
          </div>  
          <br>

          <!-- content start -->
          <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>id</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                    <?php $no=1;
                                    foreach ($pesan_umum as $psn) : ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $psn->nama ?></td>
                                    <td><?php echo $psn->email ?></td>
                                    <td><?php echo $psn->nomor_hp ?></td>
                                    <td><?php echo $psn->isi_pesan ?></td>
                                    <td><div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody> 
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
          <!-- content end -->
