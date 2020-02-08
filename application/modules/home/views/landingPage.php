<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_home/header");
    ?>
</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_home/menuAfterLogin");
    ?>

    <!--cover section slider -->
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item" style="background: url('<?php echo base_url() ?>assets/evento/assets/img/bg/bgnew.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Seminar dan Workshop
                                </h2>
                                <strong class="cover-xl-text">NASIONAL</strong>
                                <p class="cover-date">
                                  Tema: "Pemberdayaan Sosial Ekonomi"
                                </p>
                                <p class="cover-date">
                                (Tanggal Acara)
                                </p>
                                <a href="#" class=" btn btn-primary btn-rounded">
                                    Registrasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('<?php echo base_url() ?>assets/evento/assets/img/bg/bgnew.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Seminar
                                </h2>
                                <strong class="cover-xl-text">Nasional</strong>
                                <p class="cover-date">
                                    INKLUSI KEUANGAN  MELALUI PENGEMBANGAN BMT BERBASIS RUMAH IBADAH DAN KELURAHAN  UNTUK PENGENTASAN KEMISKINAN
                                </p>
                                <p class="cover-date">
                                  (Tanggal Acara)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('<?php echo base_url() ?>assets/evento/assets/img/bg/bgnew.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Workshop
                                </h2>
                                <strong class="cover-xl-text">Nasional</strong>
                                <p class="cover-date">
                                    INKLUSI KEUANGAN  MELALUI PENGEMBANGAN BMT BERBASIS RUMAH IBADAH DAN KELURAHAN  UNTUK PENGENTASAN KEMISKINAN
                                </p>
                                <p class="cover-date">
                                  (Tanggal Acara)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_nav">
            <ul class="cover_dots">
                <li class="active" data="0"><span>1</span></li>
                <li data="1"><span>2</span></li>
                <li data="2"><span>3</span></li>
            </ul>
        </div>
    </section>
    <!--cover section slider end -->

    <!--event countdown -->
    <section class="bg-img pt70 pb70" style="background-image: url('<?php echo base_url() ?>assets/evento/assets/img/bg/bgnew.png');">
        <div class="overlay_dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <h4 class="mb30 text-center color-light">Counter until the big event</h4>
                    <div class="countdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!--event count down end-->


    <!--about the event -->
    <section id="s2" class="pt100">
        <div class="container">
            <div class="section_title">
                <h3 class="title">
                    About the event
                </h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        In rhoncus massa nec sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                    </p>
                </div>
            </div>

            <!--event features-->
            <div class="row justify-content-center mt30">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-mic"></i>
                        <div class="content">
                            <h4>9 Speakers</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-rocket"></i>
                        <div class="content">
                            <h4>8 hrs Marathon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-bullhorn"></i>
                        <div class="content">
                            <h4>Live Broadcast</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-clock"></i>
                        <div class="content">
                            <h4>Early Bird</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--event features end-->
        </div>
    </section>
    <!--about the event end -->


    <!--speaker section-->
    <section class="pt100">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title">
                    Speakers
                </h3>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s1.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Patricia Stone</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s2.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">James Oliver</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s3.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Carla Banks</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s4.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">William Smith</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s5.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Jessica Black</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s6.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Patricia Stone</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s7.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Duncan Stan</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="speaker_box">
                    <div class="speaker_img">
                        <img src="<?php echo base_url() ?>assets/evento/assets/img/speakers/s8.png" alt="speaker name">
                        <div class="info_box">
                            <h5 class="name">Patricia Stone</h5>
                            <p class="position">CEO Company</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--speaker section end -->

    <!--Price section-->
    <section id="s3" class="pt100">
        <div class="container">
            <div class="section_title mb50">
                <h3 class="title">
                    Timeline Acara
                </h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 col-12">
                    <div class="price_box active">
                        <div class="price_highlight">
                            recommended
                        </div>
                        <div class="price_header">
                            <h4>
                                Early Bird
                            </h4>
                            <h6>
                                For the fast ones
                            </h6>
                        </div>
                        <div class="price_tag">
                            65 <sup>$</sup>
                        </div>
                        <div class="price_features">
                            <ul>
                                <li>
                                    Early Entrance
                                </li>
                                <li>
                                    Front seat
                                </li>
                                <li>
                                    Complementary Drinks
                                </li>
                                <li>
                                    Promo Gift
                                </li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="price_box">
                        <div class="price_header">
                            <h4>
                                Start up
                            </h4>
                            <h6>
                                For the begginers
                            </h6>
                        </div>
                        <div class="price_tag">
                            85 <sup>$</sup>
                        </div>
                        <div class="price_features">
                            <ul>
                                <li>
                                    Early Entrance
                                </li>
                                <li>
                                    Front seat
                                </li>
                                <li>
                                    Complementary Drinks
                                </li>
                                <li>
                                    Promo Gift
                                </li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="price_box">
                        <div class="price_header">
                            <h4>
                                Corporate
                            </h4>
                            <h6>
                                For the business
                            </h6>
                        </div>
                        <div class="price_tag">
                            95 <sup>$</sup>
                        </div>
                        <div class="price_features">
                            <ul>
                                <li>
                                    Early Entrance
                                </li>
                                <li>
                                    Front seat
                                </li>
                                <li>
                                    Complementary Drinks
                                </li>
                                <li>
                                    Promo Gift
                                </li>
                            </ul>
                        </div>
                        <div class="price_footer">
                            <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--price section end -->


    <!--brands section -->
    <section class="bg-gray pt50 pb100">
        <div class="container">
            <div class="section_title mb100">
                <h3 class="title">
                    our partners
                </h3>
            </div>
            <div class="brand_carousel owl-carousel">
                <div class="brand_item text-center">
                    <img src="<?php echo base_url() ?>assets/evento/assets/img/brands/b1.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="<?php echo base_url() ?>assets/evento/assets/img/brands/b2.png" alt="brand">
                </div>

                <div class="brand_item text-center">
                    <img src="<?php echo base_url() ?>assets/evento/assets/img/brands/b3.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="<?php echo base_url() ?>assets/evento/assets/img/brands/b4.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="<?php echo base_url() ?>assets/evento/assets/img/brands/b5.png" alt="brand">
                </div>
            </div>
        </div>
    </section>
    <!--brands section end-->

    <!--get tickets section -->
    <section id="s4" class="bg-img pt100 pb100" style="background-image: url('<?php echo base_url() ?>assets/evento/assets/img/bg/tickets.png');">
        <div class="container">
            <div class="section_title mb30">
                <h3 class="title color-light">
                    Panduan Acara
                </h3>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9 text-md-left text-center color-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </div>
                <div class="col-md-3 text-md-right text-center">
                    <a href="#" class="btn btn-primary btn-rounded mt30">Lihat Panduan Acara</a>
                </div>
            </div>
        </div>
    </section>
    <!--get tickets section end-->

    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>
