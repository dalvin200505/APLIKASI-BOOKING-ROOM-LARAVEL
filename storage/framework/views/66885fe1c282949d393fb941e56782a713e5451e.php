<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SMK FARMAKO | Book Ruangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset('assets/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/lib/nivo-slider/css/nivo-slider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/owlcarousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/owlcarousel/owl.transitions.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/venobox/venobox.css')); ?>" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="<?php echo e(asset('assets/css/nivo-slider-theme.css')); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12">

                <!-- Navigation -->
                <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                    <h1><span>Room</span>Moro</h1>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#room">Room</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://www.radarbogor.id/" target="_blank">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <a class="page-scroll" href="<?php echo e(route('login')); ?>"><span class="btn btn-primary">Login</span></a>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(Route::has('dashboard')): ?>
                            <a class="page-scroll" href="<?php echo e(route('dashboard')); ?>"><span class="btn btn-primary">Dashboard</span></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    </li>
                    </ul>
                </div>
                <!-- navbar-collapse -->
                </nav>
                <!-- END: Navigation -->
            </div>
            </div>
        </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="<?php echo e(asset('assets/img/slider/fmk.jpg')); ?>" alt="" title="#slider-direction-1" />
            <img src="<?php echo e(asset('assets/img/slider/fmk (2).jpg')); ?>" alt="" title="#slider-direction-2" />
            <img src="<?php echo e(asset('assets/img/slider/fmk (3).jpg')); ?>" alt="" title="#slider-direction-3" />

        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Aplikasi Booking Room </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">Roomoro</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Aplikasi Booking Room </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">Roomoro</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Aplikasi Booking Room </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">RoomMoro</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>SMK FARMAKO MEDIKA PLUS</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
                <div class="single-well">
                <a href="#">
                    <img src="<?php echo e(asset('assets/img/slider/fmk (3).jpg')); ?>" alt="" style="width: 500px;">
                </a>
                </div>
            </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
                <div class="single-well">
                <p>
                    SMK Farmako Medika PLUS merupakan sekolah kejuruan pada jenjang pendidikan menengah
                setaraf sekolah menengah umum dengan keahlian di bidang farmasi dan Perawat kesehatan.
                Pendirian Sekolah ini bertujuan mendukung Program Pemerintah Jawa Barat Sehat 2010 dan
                Indonesia Sehat 2010. Lapangan kerja bagi lulusan sangat terbuka luas terutama untuk Pedagang
                Besar Farmasi (PBF), Toko obat, Industri Farmasi, Industri Makanan dan Minuman, Rumah Sakit,
                Puskesmas , Laboratorium Kesehatan dan lain-lain.
                    <br>
                    <br>
                      SMK Farmako Medika PLUS yang terletak di Kabupaten Bogor, diharapkan mampu menghasilkan
                    tenaga farmasi dan perawat Kngkat menengah (Asisten Apoteker) yang mampu bekerja dalam dalam
                    sistem pelayanan kesehatan khususnya dibidang farmasi dan Perawat kesehatan.
                    Setelah menyelesaikan pendidikannya, para lulusannya diharapkan mampu bekerja sebagai tenaga
                    farmasi dan perawat Kngkat menengah di bidang apotek, industri obat, kosmeKka, rumah sakit,
                    pemerintah serta membantu kegiatan administrasi, pengawasan dan penyuluhan kepada
                    masyarakat, dan khusus untuk perawat kesehatan dapat bekerja di klinik dokter, rumah sakit,
                    fasilitas-fasilitas pelayanan kesehatan, home care, dan lain sebagainya.
                    <br>
                    <br>
                    Tujuan pendirian sekolah ini adalah untuk
                    memenuhi kebutuhan tenaga Asisten Apoteker dan Perawat kesehatan pada unit-unit pelayanan kesehatan di insKtusi pemerintah
                     maupun masyarakat
                </p>
                </div>
            </div>
            </div>
            <!-- End col-->
        </div>
        </div>
    </div>
    <!-- End About area -->

    <!-- Start room Area -->
    <div id="room" class="portfolio-area area-padding fix">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>Ruangan Kami</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Portfolio -page -->

            <div class="awesome-project-content">
            <!-- single-awesome-project start -->
            <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                <div class="awesome-img">
                    <a href="#"><img src="<?php echo e(url('Image/Ruangan/'.$item->foto_room)); ?>" alt="" /></a>
                    <div class="add-actions text-center">
                    <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="<?php echo e(url('Image/Ruangan/'.$item->foto_room)); ?>">
                        <h4><?php echo e($item->nm_room); ?></h4>
                        <span><?php echo e($item->lokasi); ?></span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- single-awesome-project end -->
            </div>
        </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->

    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                <h2>Contact us</h2>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-mobile"></i>
                    <p>
                    Call: 0251-8244421
                    <br>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=6285771018820&text=Hello, more information!">
                            0857-7101-8820 (Kepala Tata Usaha)
                        </a>
                        </span>
                    <br>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=6287870500058&text=Hello, more information!">
                            0878-7050-0058 (Kepala Sekolah)
                        </a>
                        <br>
                        <span>
                            <a href="https://api.whatsapp.com/send?phone=6281617698837&text=Hello, more information!">
                                0816-1769-8837 (Admin Booking)
                            </a>
                            </span>
                        <br>

                    </span>
                    </p>
                </div>
                </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-envelope-o"></i>
                    <p>
                    Email Tu School: adam22syam@gmail.com<br>
                    <span>Web: almuchtari.sch.id</span><br>
                    Admin Booking: dalvinkandiyas@gmail.com
                    </p>
                </div>
                </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-map-marker"></i>
                    <p>
                    Location: Yayasan Al-Muchtari,
                    Jl Raya Sukabumi KM.15 HE.Sukma Talang 2 Cimande Desa Lemah Duhur,
                    <br>
                    <span>Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730​</span>
                    </p>
                </div>
                </div>
            </div>
            </div>
            <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Nama yang Booking</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Berakhir</th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php $no=1;
                        $data = DB::table('tb_rebook as a')
                        ->select('a.id','b.nm_room as nama_ruangan', 'nama_rebook', 'no_hp_rebook', 'waktu_mulai', 'waktu_berakhir')
                        ->leftJoin('tb_room as b', 'b.id', '=', 'a.id_room')
                        ->orderByDesc('waktu_mulai')
                        ->paginate(5);


                        // return view('booking.index', compact('data'));
                        ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($item->nama_ruangan); ?></td>
                            <td><?php echo e($item->nama_rebook); ?></td>
                            <td><?php echo e($item->waktu_mulai); ?></td>
                            <td><?php echo e($item->waktu_berakhir); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
                <?php echo e($data->links()); ?>

                <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                <h3>Booking Ruangan</h3>
                <?php if(Session::get('error')): ?>
                    <?php echo e(Session::get('error')); ?>

                <?php endif; ?>
                <?php if(Session::get('message')): ?>
                    <?php echo e(Session::get('message')); ?>

                <?php endif; ?>
                <form action="<?php echo e(route('booking')); ?>" id="book_ruangan" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="form-group">
                    <select name="id_room" id="" class="form-control" id="name" placeholder="Ruangan" >
                        <option value="">--Pilih Ruangan--</option>
                        <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nm_room); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="nama_rebook" class="form-control" id="name" placeholder="Your Name" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="no_hp_rebook" class="form-control" id="no_hp_rebook" placeholder="Nomor Handphone" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="datetime-local" name="waktu_mulai" class="form-control" id="waktu_mulai" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <label for="waktu_berakhir">Waktu Berakhir</label>
                    <input type="datetime-local" name="waktu_berakhir" class="form-control" id="waktu_berakhir" />
                    <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Booking</button></div>
                </form>
                </div>
            </div>
            <!-- End Left contact -->
            </div>
        </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                <div class="footer-head">
                    <div class="footer-logo">
                    <h2><span>Room</span>Moro</h2>
                    </div>

                    <p>Please visit our company's official social media pages to stay updated on the latest news and updates!</p>
                    <div class="footer-icons">
                    <ul>
                        <li>
                        <a href="https://www.facebook.com/profile.php?id=100086537310582" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                        <a href="https://www.tiktok.com/@smk.farmakomedikaplus?_t=8psBCtM5cAs&_r=1" target="_blank"><i class="fa fa-music"></i></a>
                        </li>
                        <li>
                        <a href="https://www.instagram.com/smkfarmakomedikaplus?igsh=MWlkczBuaHQzY2xkYg==" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="https://youtube.com/@smkfarmakomedikaplus6903?si=KwHov7JRvrasuK0s" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                <div class="footer-head">
                    <h4>information</h4>
                    <p>
                        Our company's email account is the primary channel for professional communication. Please utilize it for any work-related correspondence!
                    </p>
                    <div class="footer-contacts">
                    <p><span>Tel:</span>  0251-8244421</p>
                    <p><span>Web: <a href="mailto:redaksi [at] radar-bogor.com.com">almuchtari.sch.id</a></span></p>
                    <p><span>Email Admin Booking: <a href="dalvinkandiyas@gmail.com">dalvinkandiyas@gmail.com</a></span></p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="copyright text-center">
                <p>
                    &copy; Copyright <strong>SMK FARMAKO MEDIKA PLUS</strong>. All Rights Reserved
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <script src="<?php echo e(asset('assets/lib/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/knob/jquery.knob.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/parallax/parallax.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/nivo-slider/js/jquery.nivo.slider.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/lib/appear/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/isotope/isotope.pkgd.min.js')); ?>"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?php echo e(asset('assets/contactform/contactform.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\radar-bogor-booking\resources\views/welcome.blade.php ENDPATH**/ ?>