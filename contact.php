<?php $page = 'contact' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | SCSS</title>
    <?php include 'include/header-analytics.php';?>
</head>

<body>
    <div class="page_wraper">

        <?php include 'include/header.php';?>

        <!-- Contact Us Section - Start
        ================================================== -->
        <section class="section contact_us_section">
            <div class="container-fluid">
                <div class="contact_main mt-70">
                    <div class="contact-links widget" data-aos="fade-up" data-aos-duration="1000">
                        <div class="widget-title">
                            <h5>Contact Us</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-3">
                                <div class="location widget" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                    <h6>Location:</h6>
                                    <p>
                                        <a href="#!">
                                            <i class="fa-light fa-location-dot"></i>
                                            Mumbai, Maharashtra, India
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="Number widget" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <h6>Mobile No:</h6>
                                    <p>
                                        <a href="tel:8806903871">
                                            <i class="fa-light fa-phone"></i>
                                            +91 8806903871
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="eamil widget" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <h6>Email Address:</h6>
                                    <p>
                                        <a href="mailto:sushshirke96@gmail.com">
                                            <i class="fa-light fa-envelope"></i>
                                            sushshirke96@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="links widget" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                    <h6>social Links:</h6>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="#!" class="widget mb-lg-4" method="post" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="widget-title" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <h5 class="mb-1"> Leave a Reply</h5>
                                    <p>Feel free to contact any time.</p>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                        <input type="text" required="" name="name" id="name" class="form-control" placeholder="Your Name*">
                                    </div>
                                
                                    <div class="form-group col-lg-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                        <input type="email" required="" name="email" id="email" class="form-control" placeholder="Your Email*">
                                    </div>
                                
                                    <div class="form-group col-lg-6" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                        <input type="text" required="" name="number" id="subject" class="form-control" placeholder="Your Number*">
                                    </div>
                                    <div class="form-group col-lg-12" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message*" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="text-center" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                                    <button type="submit" name="submit" class="custom-btn"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="google-map mb-0" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60823.73282228827!2d73.97706122632923!3d17.674614746812992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239be08d96bbd%3A0x5f4adf559fb4b19a!2sSatara%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1710325367430!5m2!1sen!2sin" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Contact Us Section - End
        ================================================== -->

        <?php include 'include/footer.php';?>

    </div>

    <?php include 'include/footer-analytics.php';?>

</body>

</html>