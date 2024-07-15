<?php $page = 'landing' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing | SCSS</title>
    <?php include 'include/header-analytics.php';?>

</head>

<body>
    <div class="page_wraper">

        <!-- Heading SVG - Start
        ================================================== -->

        <svg id="stroke" class="d-none" xmlns="http://www.w3.org/2000/svg" width="0" height="0">
            <defs>
                <path id="line" d="M2 2c49.7 2.6 100 3.1 150 1.7-46.5 2-93 4.4-139.2 7.3 45.2-1.5 90.6-1.8 135.8-.6"
                    fill="none" stroke-linecap="round" stroke-linejoin="round" vector-effect="non-scaling-stroke" />
            </defs>
        </svg>

        <!-- Heading SVG - End
        ================================================== -->

        <!-- Pre Loader - Start
        ================================================== -->
        <div class="loading">
            <div class="loader"></div>
        </div>
        <!-- Pre Loader - End
        ================================================== -->

        <!-- Header Area - Start
        ================================================== -->
        <header class="header fixed-top" data-aos="fade-down" data-aos-duration="3000">
            <nav class="navbar navbar-expand-lg p-lg-0">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#!">
                        <img src="assets/img/logo/logo-dark.png" alt="logo">
                    </a>
                    <button class="navbar-toggler navbar-small-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-sharp fa-thin fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse span3 wow swing center" id="navbarTogglerDemo02" data-wow-iteration="2">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home" >Home</a>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallerys">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <div class="social_links">
                            <ul class="list-inline social-icons">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank" class="color-facebook" rel="noopener noreferrer">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank" class="color-instagram" rel="noopener noreferrer">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank" class="color-twitter" rel="noopener noreferrer">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank" class="color-youtube" rel="noopener noreferrer">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </nav>
        </header>
        <!-- Header Area - End
        ================================================== -->

        <!-- Swiper Slider - Start
        ================================================== -->
        <div class="swiper-container" id="home" data-aos="fade-up" data-aos-duration="3000">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide slide_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-8 m-auto">
                                <div class="swiper-item" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="swiper-heading">
                                        5 Effective Ways I’m Finding Focus in a Busy Season of Life
                                    </h1>
                                    <p class="swiper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide2 -->
                <div class="swiper-slide slide_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-8 m-auto">
                                <div class="swiper-item" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="swiper-heading">
                                        5 Effective Ways I’m Finding Focus in a Busy Season of Life
                                    </h1>
                                    <p class="swiper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide3 -->
                <div class="swiper-slide slide_3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-8 m-auto">
                                <div class="swiper-item" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="swiper-heading">
                                        5 Effective Ways I’m Finding Focus in a Busy Season of Life
                                    </h1>
                                    <p class="swiper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide4 -->
                <div class="swiper-slide slide_4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-8 m-auto">
                                <div class="swiper-item" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="swiper-heading">
                                        5 Effective Ways I’m Finding Focus in a Busy Season of Life
                                    </h1>
                                    <p class="swiper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide5 -->
                <div class="swiper-slide slide_5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-8 m-auto">
                                <div class="swiper-item" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="swiper-heading">
                                        5 Effective Ways I’m Finding Focus in a Busy Season of Life
                                    </h1>
                                    <p class="swiper-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- Swiper Slider - End
        ================================================== -->

        <!-- About Us Section - Start
        ================================================== -->
        <section class="section about_us_section pt-80" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about clearfix">
                            <div class="about_img float-end mb-3 mb-md-0 ps-lg-4" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <img src="assets/img/about/1.png" alt="about" class="img-fluid">                                
                            </div>
                            <div class="section_heading" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="heading_subtitle">
                                    <span class="double_icon">
                                        <i class="fa-solid fa-square"></i>
                                        <i class="fa-solid fa-square"></i>
                                    </span>
                                    <span>About Us </span>
                                </div>
                                <h3 class="heading_title">
                                    Welcome to NoonPost
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                </h3>
                            </div>
                            <div class="description" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <p>
                                    In May 2018, my wife Shalini and I visited our son Rahul when he was 
                                    studying at Tufts University, Boston. We had the opportunity to meet 
                                    <strong>Dr. Kevin Oye</strong>, the Executive Director of the Tufts Gordon Institute 
                                    and Director, M.S. of the Innovation and Management Program at Tufts.
                                </p>
                                <p>His humility and energy swept us off our feet. Here was a man with 
                                    more than 35 years of experience in leading product development, 
                                    corporate strategy, and merger and acquisition teams. 
                                </p>
                                <p>As a board 
                                    member, company officer, executive, and engineer, Kevin has led 
                                    initiatives where new products and technologies have driven industry 
                                    transformations in both startups and large corporations.
                                </p>
                            </div>
                            <div class="buttons"  data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="#!" class="custom-btn">
                                    <span>Know More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section - End
        ================================================== -->

        <!-- Services Section - Start
        ================================================== -->
        <section class="services_section section" id="service">
            <div class="container-fluid">
                <div class="p-lg-30">
                    <div class="row mb-20">
                        <div class="col-lg-6 col-xl-6">
                            <div class="section_heading" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="heading_subtitle">
                                    <span class="double_icon">
                                        <i class="fa-solid fa-square"></i>
                                        <i class="fa-solid fa-square"></i>
                                    </span>
                                    <span>Services </span>
                                </div>
                                <h3 class="heading_title mb-0">
                                    Our Services
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="buttons mt-3 mt-lg-0 text-lg-end"  data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="#!" class="custom-btn">
                                    <span>More Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/4.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">Food</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/5.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">Travel</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/7.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">interior</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/8.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">fashion</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-down" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/5.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">Travel</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="post-card">
                                <div class="post_card_img mb-30">
                                    <a href="#!">
                                        <img src="assets/img/services/7.jpg" alt="Service_1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a href="#!" class="categorie">interior</a>
                                    </div>
                                    <h5 class="entry-title">
                                        <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                    </h5>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                    </div>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img">
                                            <a href="#!">
                                                <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="#!">
                                                Sushant Shirke
                                            </a>
                                        </li>
                                        <li class="post-date">
                                            <span class="dot"></span>
                                            February 10, 2022
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="pagination">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#!" class="active">1</a>
                                    </li>
                                    <li>
                                        <a href="#!">2</a>
                                    </li>
                                    <li>
                                        <a href="#!">3</a>
                                    </li>
                                    <li>
                                        <a href="#!">4</a>
                                    </li>
                                    <li>
                                        <a href="#!">5</a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="fas fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section - End
        ================================================== -->

        <!-- Services Section - Start
        ================================================== -->
        <section class="blog_section section" id="blog">
            <div class="container-fluid">
                <div class="p-lg-30">
                    <div class="row mb-20">
                        <div class="col-lg-6 col-xl-6">
                            <div class="section_heading" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="heading_subtitle">
                                    <span class="double_icon">
                                        <i class="fa-solid fa-square"></i>
                                        <i class="fa-solid fa-square"></i>
                                    </span>
                                    <span>Blogs </span>
                                </div>
                                <h3 class="heading_title mb-0">
                                    Our Blogs
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="buttons mt-3 mt-lg-0 text-lg-end"  data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="#!" class="custom-btn">
                                    <span>More Blogs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <!-- card 1 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/4.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">Food</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- card 2 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/5.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">Travel</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- card 3 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/7.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">interior</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- card 4 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/8.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">fashion</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- card 5 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/5.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">Travel</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- card 6 -->
                        <div class="post-card">
                            <div class="post_card_img mb-30">
                                <a href="#!">
                                    <img src="assets/img/services/7.jpg" alt="Service_1" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="entry-cat">
                                    <a href="#!" class="categorie">interior</a>
                                </div>
                                <h5 class="entry-title">
                                    <a href="#!">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <div class="entry-desc">
                                    <p>Lorem ipsum dolor sit amet et consectetur adipisicing elit. Odit sunt distinctio consectetur adipisicing elit. Odit sunt distinctio... </p>
                                </div>
                                <ul class="entry-meta list-inline">
                                    <li class="post-author-img">
                                        <a href="#!">
                                            <img src="assets/img/services/1.jpg" alt="author" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="post-author">
                                        <a href="#!">
                                            Sushant Shirke
                                        </a>
                                    </li>
                                    <li class="post-date">
                                        <span class="dot"></span>
                                        February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section - End
        ================================================== -->

        <!-- Gallery Section - Start
        ================================================== -->
        <section class="section gallery_section" id="gallerys">
            <div class="container-fluid">
                <div class="p-lg-30">
                    <div class="row mb-20">
                        <div class="col-lg-6 col-xl-6">
                            <div class="section_heading" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="heading_subtitle">
                                    <span class="double_icon">
                                        <i class="fa-solid fa-square"></i>
                                        <i class="fa-solid fa-square"></i>
                                    </span>
                                    <span>Gallery </span>
                                </div>
                                <h3 class="heading_title mb-0">
                                    Our Gallery
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                    <svg class="button-stroke" viewBox="0 0 154 13">
                                        <use href="#line"></use>
                                    </svg>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="buttons mt-3 mt-lg-0 text-lg-end"  data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <a href="#!" class="custom-btn">
                                    <span>More Photos</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-images">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="img">
                                    <a href="assets/img/gallery/3.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/3.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="img">
                                    <a href="assets/img/gallery/4.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/4.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="img">
                                    <a href="assets/img/gallery/6.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/6.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="img">
                                    <a href="assets/img/gallery/7.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/7.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="img">
                                    <a href="assets/img/gallery/5.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/5.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="img">
                                    <a href="assets/img/gallery/8.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/8.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <div class="img">
                                    <a href="assets/img/gallery/9.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/9.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="img">
                                    <a href="assets/img/gallery/3.jpg" data-fancybox="gallery">
                                        <img src="assets/img/gallery/3.jpg" alt="gallery_image" class="img-fluid"/>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section - End
        ================================================== -->

        <?php include 'include/footer.php';?>

    </div>

    <?php include 'include/footer-analytics.php';?>

</body>

</html>