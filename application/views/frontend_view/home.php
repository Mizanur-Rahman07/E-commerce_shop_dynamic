<main class="mainBody">
    <div class="allBorder border_bottom_0">
        <div id="carouselExampleControls" class="carousel slide panda_slide " data-bs-ride="carousel">
            <div class="carousel-inner ">
                <?php
                $i = 1;
                foreach ($slideSection as $value) {
                    $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item';
                ?>
                    <div class="<?php echo $item_class ?>">
                        <div class="row d-flex  align-items-center p-5">
                            <div class="col-md-6 fw-bold ">
                                <h1 class="fw-bold"><?php echo $value['slide_heading'] ?></h1>
                                <p><?php echo $value['slide_sub_heading'] ?>
                                <p>
                                <h2 class="fw-bold"><?php echo $value['slide_price'] ?></h2>
                                <a <button href="<?php echo $value['slide_btn_link'] ?>" class="btn btn-warning text-white"><?php echo $value['slide_btn'] ?></button> </a>
                                <!-- <button class="btn btn-warning text-white">Buy Now</button> -->
                            </div>
                            <div class="col-md-6">
                                <img class="d-block slideImg" src="<?php echo base_url('backend_design/uploads/' . $value['slide_img']) ?>" alt="...">
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <section>
        <div class="product ">
            <div class="container overflow-hidden pt-5 pb-5">
                <div class="row g-5">
                    <?php
                    foreach ($celSection as $value) {
                    ?>
                        <div class="col_5_change">
                            <div class="p-3   d-flex align-items-center  box_image">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['product_img']) ?>" alt="">
                                <div class="hints">
                                    <h3 class="fw-bold"><?php echo $value['product_rate'] ?></h3>
                                    <p class=""><?php echo $value['product_title'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="Shoes" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="container">
                <div class="row pt-5">
                    <?php
                    foreach ($shoes as $value) {
                    ?>
                        <div class="col-md-6">
                            <div class="banner_border mt-4">
                                <div class="row">
                                    <div class="col-md-5 bannerText">
                                        <div class="card-body careBody_height">
                                            <a <button href="<?php echo $value['sale_button_link'] ?>" class=" btn btn-danger"><?php echo $value['sale_button'] ?></button> </a>
                                            <h2 class="fw-bold "><?php echo $value['sale_title'] ?></h2>
                                        </div>
                                        <div class="card-footer footer_border_change">
                                            <p class="priceForm"><?php echo $value['sale_sub_title'] ?></p>
                                            <h2 class="fw-bold">$ <?php echo $value['sale_rate'] ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img class="bannerImg" src="<?php echo base_url('backend_design/uploads/' . $value['sale_img']) ?>" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="Backpack" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="backPack pt-5">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link subNave  fw-bold" aria-current="page" href="#">TREND</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link subNave fw-bold" href="#"> POPULAR </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link subNave fw-bold" href="#News">NEWS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link subNave fw-bold" href="#">SALE </a>
                        </li>
                    </ul>

                    <div class="row">
                        <?php
                        foreach ($bags as $value) {
                        ?>
                            <div class="col-md-3 mt-4">
                                <div class="items card_border_change ">
                                    <div class="card-body">
                                        <p class="priceForm"><?php echo $value['bag_sub_title'] ?></p>
                                        <h2 class="fw-bold"><?php echo $value['bag_title'] ?></h2>
                                    </div>

                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['bag_img']) ?>" class="card-img-top" alt="...">

                                    <div class="card-footer footer_border_change mt-5">
                                        <h2 class="fw-bold">$<?php echo $value['bag_rate'] ?></h2>
                                        <a <button href="<?php echo $value['bag_button_link'] ?>" class="btn btn-warning text-white"><?php echo $value['bag_button'] ?></button> </a>
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Backpack" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="watchPack pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <?php
                        foreach ($watchSec as $value) {
                        ?>
                            <div class="col-md-3 mt-4">
                                <div class="items card_border_change ">
                                    <div class="card-body">
                                        <p class="priceForm"><?php echo $value['watch_sub_title'] ?></p>
                                        <h2 class="fw-bold"><?php echo $value['watch_title'] ?></h2>
                                    </div>
                                    <div class="watchImg">
                                        <img src="<?php echo base_url('backend_design/uploads/' . $value['watch_img']) ?>" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-footer footer_border_change mt-5">
                                        <h2 class="fw-bold">$ <?php echo $value['watch_rate'] ?></h2>
                                        <a <button href="<?php echo $value['watch_button_link'] ?>" class="btn btn-warning text-white"><?php echo $value['watch_button'] ?></button> </a>
                                        <!-- <button class="btn btn-warning text-white">Buy Now >></button> -->
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="aboutUs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="fw-bold mt-5">ABOUT</h2>

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators about_Dot">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <!-- <div class="carousel-item active"> -->
                                    <?php
                                    $i = 1;
                                    foreach ($aboutSlide as $value) {
                                        $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item';
                                    ?>
                                        <div class="<?php echo $item_class ?>">
                                            <div class="customer mt-5">
                                                <div class="row">
                                                    <h6 class="fw-bold"><?php echo $value['about_title'] ?></h6>
                                                    <div class="col-md-6">
                                                        <div class="custSupport d-flex ">
                                                            <p class="custIcon"><i class="<?php echo $value['about_icon'] ?>"></i></p>
                                                            <p class=""><?php echo $value['about_contant'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custSupport d-flex ">
                                                            <p class="custIcon"><i class="<?php echo $value['last_icon'] ?>"></i>
                                                            </p>
                                                            <p class=""><?php echo $value['last_contant'] ?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++;
                                    } ?>


                                </div>
                                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button> -->
                            </div>
                        </div>
                        <?php
                        foreach ($aboutImg as $value) {
                        ?>
                            <div class="col-md-6">
                                <div class="aboutImg">
                                    <img src="<?php echo base_url('backend_design/uploads/' . $value['about_img']) ?>" class="" alt="...">
                                </div>
                            </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="News" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="newsForm pt-5 pb-5">
                <div class="container">
                    <h2 class="fw-bold padding_Left">NEWS</h2>

                    <div id="carouselExampleInterval" class="carousel slide news-active" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active" data-bs-interval="10000"> -->
                            <?php
                            $i = 1;
                            foreach ($newsbd as $value) {
                                $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item';
                            ?>
                                <div class="<?php echo $item_class ?>">
                                    <div class="row">
                                        <div class="col-md-6 mt-5">
                                            <div class="newsBorder">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p class="text-muted"><?php echo $value['news_sub_title'] ?></p>
                                                            <h5 class="fw-bold"><?php echo $value['news_title'] ?></h5>
                                                        </div>
                                                        <div class=" card-footer mt_change">
                                                            <div class="fText d-flex">
                                                                <div class="readMore">
                                                                    <a href="<?php echo $value['news_button_link'] ?>" class="text-primary text-start"><?php echo $value['news_button'] ?>
                                                                    </a>
                                                                </div>
                                                                <div class="comments">
                                                                    <a href="#" class="text-primary p_left"><?php echo $value['comments'] ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <img class="d-block newsSlideImg" src="<?php echo base_url('backend_design/uploads/' . $value['news_img']) ?>" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-5">
                                            <div class="newsBorder">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <p class="text-muted"><?php echo $value['news_sub_title'] ?></p>
                                                            <h5 class="fw-bold"><?php echo $value['news_title'] ?></h5>
                                                        </div>
                                                        <div class=" card-footer mt_change">
                                                            <div class="fText d-flex">
                                                                <div class="readMore">
                                                                    <a href="<?php echo $value['news_button_link'] ?>" class="text-primary text-start"><?php echo $value['news_button'] ?>
                                                                </div>
                                                                <div class="comments">
                                                                    <a href="#" class="text-primary p_left"><?php echo $value['comments'] ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <img class="d-block newsSlideImg" src="<?php echo base_url('backend_design/uploads/' . $value['news_img']) ?>" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++;
                            } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <i class="fas fa-angle-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <i class="fas fa-angle-right"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bankAccount">
        <div class="product">
            <div class="container overflow-hidden">
                <div class="row g-5 p-5">
                    <?php
                    foreach ($cards as $value) {
                    ?>
                        <div class="col_5_change">
                            <div class="card_image text-center">
                                <img src="<?php echo base_url('backend_design/uploads/' . $value['credit_card_img']) ?>" alt="">
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </section>
</main>