<?php
//  $menus= $this->db->where('parentId', 0)->order_by('id', 'DESC')->get('menu')->result();    
//  foreach ($menus as $key => $value) {
//      $menus[$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'DESC')->get('menu')->result();
//  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome 5 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    <!-- bootstrap css cdn link  frontend_design -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('frontend_design/assets/css/bootstrap.min.css'); ?>">

    <!-- slick slide css -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <link rel="stylesheet" href="<?php echo base_url('frontend_design/assets/css/style.css'); ?>">
    <link rel="icon" href="<?php echo base_url('frontend_design/assets/images/Mizan Logo.png" type="image/x-icon'); ?>">

    <title>E-commerce Shop</title>
</head>

<body>
    <header class="">
        <!-- nav Start -->
        <nav class="navbar navbar-expand-md position_fixed">
            <div class="container-fluid container ">
                <a class="navbar-brand navLogo" href="./index.html">
                    <img src="<?php echo base_url('frontend_design/assets/images/Mizan Logo.png'); ?>" alt="logo"></a>

                <button class="navbar-toggler" style="border-color: gray;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-secondary"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end bg-white" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link  text-md-left fw-bold" aria-current="page" href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  text-md-left fw-bold" aria-current="page" href="#">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#"> PRODUCTS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#">SERVICES </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-md-left fw-bold" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#">HELP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#"><i class="fas fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-md-left fw-bold" href="#"><i class="fas fa-cart-plus"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav end -->
    </header>


    <main class="Body">
        <?php echo $subview ?>
    </main>

    <!-- footer -->
    <?php
$this->db->order_by('id', 'desc');
    $catFooterTitle = $this->db->get_where('footer', array('type' => 'category'), 1)->result_array();
    $catFooter = $this->db->get_where('footer', array('type' => 'category'), 5)->result_array();
    $this->db->order_by('id', 'DESC');
    $laptopFooterTitle = $this->db->get_where('footer', array('type' => 'laptop'), 1)->result_array();
    $laptopFooter = $this->db->get_where('footer', array('type' => 'laptop'), 5)->result_array();
    $this->db->order_by('id', 'DESC');
    $mobileFooterTitle = $this->db->get_where('footer', array('type' => 'mobile'), 1)->result_array();
    $mobileFooter = $this->db->get_where('footer', array('type' => 'mobile'), 5)->result_array();
    $this->db->order_by('id', 'DESC');
    $noteFooterTitle = $this->db->get_where('footer', array('type' => 'notebook'), 1)->result_array();
    $noteFooter = $this->db->get_where('footer', array('type' => 'notebook'), 5)->result_array();
    $this->db->order_by('id', 'DESC');
    $addressFooter = $this->db->get_where('footer', array('type' => 'address'), 1)->result_array();
    // return $data;
    ?>

    <footer id="footer" class="">
        <div class="allBorder border_top_0">
            <div class="Footer pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <?php
                                    foreach ($catFooterTitle as $value) {
                                    ?>
                                        <P class="text-muted fw-bold"><?php echo $value['category_heading'] ?></P>
                                    <?php  } ?>
                                    <?php
                                    foreach ($catFooter as $value) {
                                    ?>
                                        <p><a href="<?php echo $value['category_link'] ?>"><?php echo $value['category_name'] ?></a></p>
                                    <?php  } ?>
                                </div>

                                <div class="col-md-3">
                                    <?php
                                    foreach ($laptopFooterTitle as $value) {
                                    ?>
                                        <P class="text-muted fw-bold"><?php echo $value['laptop_brand'] ?></P>
                                    <?php  } ?>
                                    <?php
                                    foreach ($laptopFooter as $value) {
                                    ?>
                                        <p> <a href="<?php echo $value['laptop_brand_link'] ?>"><?php echo $value['laptop_brand_name'] ?></a> </p>
                                    <?php  } ?>

                                </div>
                                <div class="col-md-3">
                                    <?php
                                    foreach ($mobileFooterTitle as $value) {
                                    ?>
                                        <P class="text-muted fw-bold"><?php echo $value['mobile_brand'] ?></P>
                                    <?php  } ?>
                                    <?php
                                    foreach ($mobileFooter as $value) {
                                    ?>
                                        <p><a href="<?php echo $value['mobile_brand_link'] ?>"><?php echo $value['mobile_brand_name'] ?></a> </p>
                                    <?php  } ?>

                                </div>
                                <div class="col-md-3">
                                    <?php
                                    foreach ($noteFooterTitle as $value) {
                                    ?>
                                        <P class="text-muted fw-bold"><?php echo $value['notebook_brand'] ?></P>
                                    <?php  } ?>
                                    <?php
                                    foreach ($noteFooter as $value) {
                                    ?>
                                        <p> <a href="<?php echo $value['notebook_brand_link'] ?>"><?php echo $value['notebook_brand_name'] ?></a> </p>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php
                            foreach ($addressFooter as $value) {
                            ?>
                                <P class="text-muted fw-bold">GET IN TOUCH</P>
                                <h5 class="fw-bold"><?php echo $value['phone_no'] ?></h5>
                                <div class="footerAddress mt-2 text-muted">
                                    <div class="footSupport d-flex  align-items-center">
                                        <p class="footIcon"><i class="fas fa-map-marker-alt"></i></p>
                                        <p class=""><?php echo $value['location'] ?></p>
                                    </div>
                                    <div class="footSupport d-flex  align-items-center">
                                        <p class="footIcon"><i class="fas fa-envelope"></i></p>
                                        <p class=""><?php echo $value['gmail'] ?></p>
                                    </div>
                                </div>
                                <div class="footer_icon mt-5">
                                    <div class="line mb-2"></div>
                                    <div class="icon">
                                        <a href="<?php echo $value['fb_icon_link'] ?>" <i class="<?php echo $value['fb_icon'] ?> toHov"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="<?php echo $value['twit_icon_link'] ?>" <i class="<?php echo $value['twit_icon'] ?> toHov"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="<?php echo $value['insta_icon_link'] ?>" <i class="<?php echo $value['insta_icon'] ?> toHov"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="<?php echo $value['ytube_icon_link'] ?>" <i class="<?php echo $value['ytube_icon'] ?> toHov"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container d-flex">
        <div class="p-3 margin_Right ">
            <small>&copy;Copyright 2022 by Refsnes Data. All Rights Reserved.</small>
        </div>
        <div class="p-3">
            <small>powered by <i class="fab fa-magento"></i> Mizan </small>
        </div>
    </div>



    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- bootstrap js cdn link -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url('frontend_design/assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- slick slide cdn -->
    <script type="text/javDESCript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- slick slide cdn -->
    <script src="<?php echo base_url('frontend_design/assets/js/main.js'); ?>"></script>
</body>

</html>