        <!-- tabel start -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Layanan <small>Pengembalian Setoran BPIH Batal (Pembatalan Haji)</small></h3>
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

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Permohonan Layanan<small>Layanan</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
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
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <?php $no=1;
                                        foreach ($batal_haji as $btl) : ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $btl->nama ?></td>
                                    <td><?php echo $btl->email ?></td>
                                    <td><?php echo $btl->nomor_hp ?></td>
                                    <td><?php echo $btl->tanggal ?></td>
                                    <td><?php echo anchor('departemen/detail_batal_haji/'.$btl->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody> 
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- tabel end -->