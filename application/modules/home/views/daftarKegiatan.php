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
    $this->load->view("_partials_home/menu");
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



    <!--event calender-->
    <section class="pt100 pb100">
        <div class="container">
            <div class="table-responsive">
                <table class="event_calender table">
                    <thead class="event_title">
                        <tr>
                            <th>
                                <i class="ion-ios-calendar-outline"></i>
                                <span>Event Calendar</span>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c1.png" alt="event">
                            </td>
                            <td class="event_date">
                                14
                                <span>February</span>
                            </td>
                            <td>
                                <div class="event_place">
                                    <h5>Seminar Milad Pinbuk</h5>
                                    <h6>08 AM - 04 PM</h6>
                                    <p>Speaker: Daniel Hill</p>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-rounded">Selesai</a>
                            </td>
                            <td class="buy_link">
                                <a href="#">Unduh Modul</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c2.png" alt="event">
                            </td>
                            <td class="event_date">
                                18
                                <span>February</span>
                            </td>
                            <td>
                                <div class="event_place">
                                    <h5>Conference in Amsterdam</h5>
                                    <h6>08 AM - 04 PM</h6>
                                    <p>Speaker: Daniel Hill</p>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-rounded">Menunggu Konfirmasi</a>
                            </td>
                            <td class="buy_link">
                                <a href="#">Unduh Modul</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--event calender end -->


    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>
