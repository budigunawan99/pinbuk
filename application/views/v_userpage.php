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
    $this->load->view("_partials_userpage/content");
    ?>

    <?php
    $this->load->view("_partials_home/footer");
    ?>
    <script>
        function update(z) {
            nav = z;
            // console.log("update", BASE_URL + z);

            $.ajax({
                type: "POST",
                url: BASE_URL + z,
                cache: false,
                success: process,
                error: function(data) {
                    console.log("error", data);

                }
            });
        }

        function process(htmlfile) {
            console.log("success", htmlfile);
            $("#container-content").html(htmlfile);
        }

        $(document).ready(function() {

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
                        $('.loader').show();
                        $.ajax({
                            type: "POST",
                            url: BASE_URL + nav,
                            cache: false,
                            success: function(data) {
                                var str = data.replace(/\"/g, "");
                                $('.loader').hide();
                                swal("Berhasil", str, "success");
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
        });
    </script>

</body>

</html>