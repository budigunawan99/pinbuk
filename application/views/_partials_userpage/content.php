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
             <ul id="grupmenu" class="nav navbar-nav menu">
                 <li class="nav-item">
                     <a class="nav-link active" href="<?php echo site_url() ?>/home">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link " data-val="Account/registrasi_view" >Registrasi</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link logout" data-val="Account/logout">Logout</a>
                 </li>
             </ul>
         </div>
     </div>
 </header>
 <!--header end here-->
 <div id="container-content">
     <?php echo $content ?>
 </div>