<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_admin/header");
    ?>
</head>

<body>

    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_admin/navbar");
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php
        $this->load->view("_partials_admin/leftnav");
        ?>
         <div class="main-panel">
            <div class="content-wrapper">
                <?php
                $this->load->view("_partials_admin/content");
                ?>
                <?php
                $this->load->view("_partials_admin/footer");
                ?>
            </div>
        </div>
    </div>

</body>

</html>