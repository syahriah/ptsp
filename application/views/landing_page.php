<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pelayanan Terpadu Satu Pintu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>dist/image/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url() ?>dist/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container mx-auto">
                <a class="navbar-brand" href="https://balikpapankota.kemenag.go.id/"><img src="<?php echo base_url() ?>dist/image/img/navbar-logo.png" alt="..." /> PTSP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Persyaratan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Contact</a></li>
                        <li class="nav-item text border"><a class="nav-link" href="<?php echo base_url ('auth/login') ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di Pelayanan Terpadu Satu Pintu</div>
                <div class="masthead-heading text-uppercase">Kementerian Agama Kota Balikpapan</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo base_url ('auth/login') ?>">Daftar Sekarang</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="tentang">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-success">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">apa itu Pelayanan Terpadu Satu Pintu?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fa-solid fa-lightbulb fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Definisi</h4>
                        <p class="text-muted">Pelayanan Terpadu Satu Pintu, yang selanjutnya disingkat PTSP adalah pelayanan secara terintegrasi dalam satu kesatuan proses dimulai dari tahap awal sampai dengan tahap penyelesaian produk pelayanan pengadilan melalui satu pintu.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fa-solid fa-list-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Tujuan</h4>
                        <p class="text-muted">Tujuan dari Penyelenggaraan Pelayanan Terpadu Satu Pintu adalah meningkatkan kualitas layanan publik, memberikan akses yang lebih luas kepada masyarakat untuk memperoleh pelayanan publik.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fa-solid fa-people-carry-box fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manfaat</h4>
                        <p class="text-muted">Mendekatkan pelayanan Kementerian Agama RI kepada masyarakat. Kemudahan dalam mengkoordinasikan pelayanan kepada masyarakat. Meningkatkan standar kerja dan kinerja. Mempercepat waktu layanan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section" id="layanan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-success">Layanan</h2>
                    <h3 class="section-subheading text-muted">Pelayanan Terpadu Satu Pintu</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan rohaniawan</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan pindah sekolah atau melanjutkan sekolah</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan rekomendasi hibah atau bantuan masjid</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/5.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Pembuatan rekomendasi paspor umrah</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/6.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan rekomendasi hibah atau bantuan masjid</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/7.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan pengembalian setoran BPH batal (Pembatalan haji)</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url() ?>dist/image/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="text-success">Layanan</h4>
                                <h4 class="subheading">Permohonan legalisir ijazah atau raport</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-success">Persyaratan Layanan</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan pindah sekolah atau melanjutkan sekolah</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan rekomendasi hibah atau bantuan masjid</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Pembuatan rekomendasi paspor umrah</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan pengembalian setoran BPH batal (Pembatalan haji)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan legalisir ijazah atau raport</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/7.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Permohonan rohaniawan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/8.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url() ?>dist/image/img/portfolio/9.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Layanan</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Team-->
<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-success">SOCIAL MEDIA</h2>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <a href="https://balikpapankota.kemenag.go.id/"><img class="mx-auto rounded-circle" src="<?php echo base_url() ?>dist/image/img/team/1.jpg" alt="..." /></a>
                            <h4>Website</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <a href="https://www.instagram.com/kemenagbpn/"><img class="mx-auto rounded-circle" src="<?php echo base_url() ?>dist/image/img/team/2.jpg" alt="..." /></a>
                            <h4>Instagram</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <a href="https://www.youtube.com/@kemenagbpn"><img class="mx-auto rounded-circle" src="<?php echo base_url() ?>dist/image/img/team/3.jpg" alt="..." /></a>
                            <h4>Youtube</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">	Alamat: Jl. D. I. Panjaitan No. 01 RT. 09 Gunung Samarinda	Balikpapan Tengah Kota Balikpapan Provinsi Kalimantan Timur (76125), Telp (0542) 424558 739579</p></div>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"><strong>Hubungi Kami!!</strong></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="<?php echo base_url('landing_page/tambah_pesan')?>">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                        <?php echo $this->session->flashdata('message');?>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" name="nama" type="text" placeholder="Nama Lengkap *" data-sb-validations="required" required="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email Aktif *" data-sb-validations="required,email" required="required" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="nomor_hp" type="tel" placeholder="No WhatsApp *" data-sb-validations="required" required="required"/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message"  name="isi_pesan" placeholder="Your Message *" data-sb-validations="required" required="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan :</h2>
                                        <br>
                                            <p>1. Surat Permohonan ditujukan kepada Kepala Kantor Kementerian Agama Kota Balikpapan</p>
                                            <p>2. Profil Masjid/Mushola</p>
                                            <p>3. Susunan Kepengurusan/Pembangunan</p>
                                            <p>4. Berita Acara Kesepakatan Untuk mendirikan Masjid/ Mushalla</p>
                                            <p>5. Tanda tangan Warga setempat 90 Orang</p>
                                            <p>6. Poto Copy KTP 60 Orang</p>
                                            <p>7. Fotocopy Surat Status Tanah (Sertifikat / Akta Ikrar Wakaf dari KUA)</p>
                                            <p>8. Denah Lokasi</p>
                                            <p>9. Gambar Rencana bangunan</p>
                                            <p>10. Surat keterangan Domisili dari LURAH</p>
                                            <p>11. Surat Rekomendasi dari DMI (Dewan Masjid Indonesia) Kecamatan</p>
                                            <p>12. Surat Rekomendasi dari FKUB (Forum Kerukunan Umat Beragama)</p>
                                            <p>13. Surat Pengantar dari KUA (Kantor Urusan Agama)</p>
                                            <p>11. Anggaran Dasar/ Anggaran Rumah Tangga</p>
                                            <p>11. Anggaran Dasar/ Anggaran Rumah Tangga</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                        </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1. Asli dan Fotocopy Surat pindah sekolah dari Madrasah asal / Surat keterangan lulus dari Madrasah asal (bagi yang melanjutkan)</p>
                                            <p>2. Raport asli</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h5>
                                        </h2>
                                        <br>
                                            <p>1. Mengajukan Surat Permohonan ditujukan kepada Kepala Kantor Kementerian Agama Kota Balikpapan</p>
                                            <p>2. Profil Masjid / Musholla / Organisasi</p>
                                            <p>3. Surat keterangan Domisili dari LURAH</p>
                                            <p>4. SK Kepengurusan dari DMI (Dewan Masjid Indonesia) Kecamatan</p>
                                            <p>5. RAB - Rencana Anggaran BIAYA</p>
                                            <p>6. Fotocopy KTP Ketua, Sekretaris, bendahara ( Leg. Capil )</p>
                                            <p>7. Fotocopy Surat Status TANAH ( SERTIFIKAT / AKTA IKRAR WAKAF DARI KUA )</p>
                                            <p>8. Fotocopy Buku Rekening a/n. Masjid / Musholla / Organisasi Lembaga</p>
                                            <p>9. Surat Rekomendasi dari KUA (Kantor Urusan Agama) Kecamatan</p>
                                            <p>10. Gambar Bangunan</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1. Surat Pengantar dari Travel / Penyelenggara Umrah Berijin</p>
                                            <p>2. Copy Surat Ijin Penyelenggara Ibadah Umrah (bila belum pernah mengajukan)</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br><br>
                                            <p>1. Surat Permohonan</p>
                                            <p>2. Asli Bukti Setoran Awal / Lunas</p>
                                            <p>3. Asli Nomor Porsi</p>
                                            <p>4. Asli Surat Pendaftaran Pergi Haji / SPPH</p>
                                            <p>5. Asli Aplikasi Transfer dari Bank</p>
                                            <p>6. Surat Pernyataan Ahli Waris</p>
                                            <p>7. Surat Kuasa Ahli Waris</p>
                                            <p>8. Surat Pernyataan Tanggung Jawab Mutlak (SPTJM)</p>
                                            <p>9. Foto copy rekening an. Kuasa Ahli Waris pada Bank Syariah yang sama dengan Bank Setoran Awal</p>
                                            <p>10. Foto copy KTP Kuasa Ali Waris</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Catatan :</strong>
                                            (Nomer 6 - 10 tambahan untuk Pembatalan karena Wafat)
                                            </li>
                                        <br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1. Ijazah/Raport Asli</p>
                                            <p>2. Permohonan pengesahan Ijazah FM-PI-01</p>
                                            <p>3. Permohonan pengesahan Ijazah FM-PI-02 jika yang mengurus bukan pemilik Ijazah</p>
                                            <p>4. Surat pernyataan tanggungjawab mutlak</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1.  Surat Permohonan</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1. Ijazah/Raport Asli</p>
                                            <p>2. Permohonan pengesahan Ijazah FM-PI-01</p>
                                            <p>3. Permohonan pengesahan Ijazah FM-PI-02 jika yang mengurus bukan pemilik Ijazah</p>
                                            <p>4. Surat pernyataan tanggungjawab mutlak</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                            </li>
                                        <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>Close
                                            </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>dist/image/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Layanan Permohonan rekomendasi ijin mendirikan bangunan IMB mushola</h3>
                                    <div class="model-text"><br>
                                        <h5 class="text-uppercase">Persyaratan Layanan</h2>
                                        <br>
                                            <p>1.  Surat Permohonan</p>
                                    </div>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Durasi Layanan:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Biaya :</strong>
                                            Tidak dipungut biaya (Gratis)
                                        </li> <br><br>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>Close
                                            </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url() ?>dist/js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
