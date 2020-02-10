<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_admin/header");
    ?>
</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_admin/content");
    ?>


    <?php
    $this->load->view("_partials_admin/footer");
    ?>
</body>

</html>