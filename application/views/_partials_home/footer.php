<!--footer start -->
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="<?php echo base_url() ?>assets/evento/assets/img/logo.png" alt="evento">
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>assets/evento/assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            Lokasi Event
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="email" class="form-control" placeholder="E-Mail here">
                            <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end -->

<!-- jquery -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>

<script>
    var BASE_URL = '<?php echo base_url(); ?>index.php/';
    /* ---------------------------- SMOOTH SCROLLING ----------------------------------- */
    $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                });
            } // End if
        });

        $('.logout').click(function(event) {
                event.preventDefault();
                nav = $(this).data("val");
                // console.log("update", BASE_URL + nav);

                swal({
                    title: "Apakah anda yakin ?",
                    text: "Anda akan meninggalkan laman ini !",
                    icon: "warning",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    }
                }).then(function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: "POST",
                            url: BASE_URL + nav,
                            cache: false,
                            success: function(data) {
                                var str = data.replace(/\"/g, "");
                                swal(str, {
                                    title: "Berhasil",
                                    buttons: false,
                                    timer: 1000,
                                    icon: "success",
                                });
                                window.location.href = BASE_URL + "home";
                                // console.log("success", data);
                            },
                            error: function(data) {
                                console.log("error", data);
                            }
                        });
                    } else {
                        swal("Logout dibatalkan", {
                            title: "Cancelled",
                            buttons: false,
                            timer: 1000,
                            icon: "error",
                        });
                    }
                })
            });
    })

</script>
