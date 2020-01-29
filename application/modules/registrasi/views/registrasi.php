<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_home/header");
    ?>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/css/main.css">
    <!--===============================================================================================-->
</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    ?>
    <!--header start here -->
    <header class="navbar fixed-top navbar-expand-md subMenu sticky_header" style="position: fixed;">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="<?php echo base_url() ?>assets/evento/assets/img/logo.png" alt="Evento" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-text-align-right"></span>
            </button>
            <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
                <ul class="nav navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url() ?>/home">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--header end here-->

    <div class="container-contact100 pt100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    REGISTRASI
                </span>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                    <span class="label-input100">FULL NAME *</span>
                    <input class="input100" type="text" name="name" placeholder="Enter Your Name">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
                    <span class="label-input100">Email *</span>
                    <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Phone</span>
                    <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
                </div>

                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Needed Services *</span>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please chooses</option>
                            <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="w-full dis-none js-show-service">
                    <div class="wrap-contact100-form-radio">
                        <span class="label-input100">What type of products do you sell?</span>

                        <div class="contact100-form-radio m-t-15">
                            <input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
                            <label class="label-radio100" for="radio1">
                                Phycical Products
                            </label>
                        </div>

                        <div class="contact100-form-radio">
                            <input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
                            <label class="label-radio100" for="radio2">
                                Digital Products
                            </label>
                        </div>

                        <div class="contact100-form-radio">
                            <input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
                            <label class="label-radio100" for="radio3">
                                Services Consulting
                            </label>
                        </div>
                    </div>

                    <div class="wrap-contact100-form-range">
                        <span class="label-input100">Budget *</span>

                        <div class="contact100-form-range-value">
                            $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                            <input type="text" name="from-value">
                            <input type="text" name="to-value">
                        </div>

                        <div class="contact100-form-range-bar">
                            <div id="filter-bar"></div>
                        </div>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                    <span class="label-input100">Message</span>
                    <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/form/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function() {
                $(this).on('select2:close', function(e) {
                    if ($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    } else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/form/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [1500, 3900],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function(values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/js/main.js"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>