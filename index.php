<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="AppLora App Landing Page">
    <meta name="author" content="Alaa Ahmed">
    <title>AppLora - App Landing Page</title>
    <?php
		include("metalinks.php");
	?>
</head>

<body>
    <header id="home" class="home bg-image bigTriangle">
        <div class="overlay">
			<?php
				include("header.php");
			?>
            <div class="container">
                <div class="row">
                    <!-- Start Text Header -->
                    <div class="col-md-7 col-sm-6">
                        <div class="header-inner">
                            <div class="header-content">
                                <h1 class="home-title word word--magneto wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">AI-NETWORK</h1>
                                <h4 class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">Find the information you've crossed paths with</h4>
                                <div class="bttn-head">
                                    <a href="#video-app" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                        <i class="icon-control-play"></i>
                                        <span>Demo Video</span>
                                    </a>
                                    <a href="#contact-us" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                                        <i class="icon-call-out"></i>
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Text Header -->
                    <!-- Start Photo Here -->
                    <div class="col-md-5 col-sm-6">
                        <div class="photo-header">
                            <img src="images/phone-header.png" alt="Applora Screen" class="img-responsive wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
                        </div>
                    </div>
                    <!-- End Photo Here -->
                </div>
            </div>
            <!-- End Container -->
        </div>
        <!-- End Overlay -->
    </header>
    <!-- End Header -->

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="mobile-features">
                    <!-- Start Mobile Slider -->
                    <div class="col-md-4">
                        <div class="features-slider owl-carousel owl-theme wow fadeInLeft" data-wow-duration="1s">
                            <div class="item">
                                <div class="single-feat-img">
                                    <img src="images/slider03.jpg" alt="Applora" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-feat-img">
                                    <img src="images/slider02.jpg" alt="Applora" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-feat-img">
                                    <img src="images/slider01.jpg" alt="Applora" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-feat-img">
                                    <img src="images/slider03.jpg" alt="Applora" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-feat-img">
                                    <img src="images/slider01.jpg" alt="Applora" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mobile Slider -->
                    <!-- Start Mobile Slider Content -->
                    <div class="col-md-8">
                        <!-- Start Slider Links -->
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active-icon" data-owl-item="0"><a href="#tab_a" data-toggle="pill"><i class="fa fa-commenting-o"></i></a></li>
                            <li data-owl-item="1"><a href="#tab_b" data-toggle="pill"><i class="fa fa-user"></i></a></li>
                            <li data-owl-item="2"><a href="#tab_c" data-toggle="pill"><i class="fa fa-shopping-bag"></i></a></li>
                            <li data-owl-item="3"><a href="#tab_d" data-toggle="pill"><i class="fa fa-users"></i></a></li>
                            <li data-owl-item="4"><a href="#tab_e" data-toggle="pill"><i class="fa fa-map-marker"></i></a></li>
                        </ul>
                        <!-- End Slider Links -->
                        <div class="tab-content">
                            <!-- Start Single One -->
                            <div class="tab-pane active" id="tab_a" data-owl-item="0">
                                <h4>1-to-1 Chat</h4>
                                <p>When your crush accepts request, then you can start the conversation. The people you don't like will never be able to send you any messages.</p>
                            </div>
                            <!-- End Single One -->
                            <!-- Start Single One -->
                            <div class="tab-pane" id="tab_b" data-owl-item="1">
                                <h4>Discover people nearby</h4>
                                <p>Like to talk with strangers. Discover people who are present in your locality. You can check their profile at any time when they are near you.</p>
                            </div>
                            <!-- End Single One -->
                            <!-- Start Single One -->
                            <div class="tab-pane" id="tab_c" data-owl-item="2">
                                <h4>Find local business</h4>
                                <p>Having difficulty in finding any material ? This app will help you to find the material just from the businesses nearby. Just visit the business page from the app and contact them.</p>
                            </div>
                            <!-- End Single One -->
                            <!-- Start Single One -->
                            <div class="tab-pane" id="tab_d" data-owl-item="3">
                                <h4><span>Feeling alone?</span> Want someone to be with you?</h4>
                                <p>Find the people nearby who are feeling the same from the timeline. Get connected with them and enjoy your day. </p>
                            </div>
                            <!-- End Single One -->
                            <!-- Start Single One -->
                            <div class="tab-pane" id="tab_e" data-owl-item="4">
                                <h4><span>Visiting any place for the first time?</span> want someone to guide you ?</h4>
                                <p>Post your issue on the timeline and get connected with the people who are ready to guide you.</p>
                            </div>
                            <!-- End Single One -->
                            <!-- Start Single One -->
                        </div>
                        <!-- End tab content -->
                    </div>
                    <!-- End Mobile Slider Content -->
                </div>
                <!-- End mobile-features -->
            </div>
            <!-- End row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End About -->

    <!--
        End About Section
        ==================================== -->

    <!--
        Start Features Section
        ==================================== -->

    <section id="features" class="features">
        <div class="container">
            <div class="all-features">
                <div class="row">

                    <!-- Start Left Features -->
                    <div class="col-md-4 feat-width">
                        <div class="feat-left wow fadeInRight" data-wow-duration="1s">
                            <!-- Start Single Item -->
                            <div class="single-feat first-feat">
                                <div class="icon-place">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <div class="feat-text">
                                    <h4>Facebook Connect</h4>
                                    <p>Facebook login is used just for preventing the fake profiles and to show the common friends</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Start Single Item -->
                            <div class="single-feat">
                                <div class="icon-place">
                                    <i class="fa fa-ban"></i>
                                </div>
                                <div class="feat-text">
                                    <h4>Block any user</h4>
                                    <p>You can block any user or report against them for any unwanted behaviour at any time</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <!-- End Left Features -->

                    <!-- Start Center Features [Photo] -->
                    <div class="col-md-4 feat-width">
                        <div class="feat-center">
                            <img src="images/feat.png" alt="Applora" class="img-responsive">
                        </div>
                    </div>
                    <!-- End Center Features [Photo] -->

                    <!-- Start Right Features -->
                    <div class="col-md-4 feat-width">
                        <div class="feat-right wow fadeInLeft" data-wow-duration="1s">
                            <!-- Start Single Item -->
                            <div class="single-feat first-feat">
                                <div class="icon-place">
                                    <i class="fa fa-compass"></i>
                                </div>
                                <div class="feat-text">
                                    <h4>Location is safe</h4>
                                    <p>The location of a user remains completely invisible to the other users. It only records the location of your movements.</p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Start Single Item -->
                            <div class="single-feat">
                                <div class="icon-place">
                                    <i class="fa fa-facebook-square"></i>
                                </div>
                                <div class="feat-text">
                                    <h4>No post on Facebook</h4>
                                    <p>Sociolust will never post anything on the Facebook walls of its users.</p>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                    </div>
                    <!-- End Right Features -->

                </div>
                <!-- End row -->
            </div>
            <!-- End all-features -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End features -->

    <!--
        End Features Section
        ==================================== -->

    <!--
        Start Random Features
        ==================================== -->

    <section id="feat-one" class="feat-one">
        <div class="container">
            <!-- Start Single One -->
            <div class="row">
                <!-- Start Photo -->
                <div class="col-md-6 col-md-push-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="feat-one-img">
                        <img src="images/random-right-post.png" alt="Applora" class="img-responsive">
                    </div>
                </div>
                <!-- End Photo -->
                <!-- Start Text -->
                <div class="col-md-6 col-md-pull-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="feat-one-text">
                        <h2>Start Private Conversation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque praesentium harum iure eos. Quas sequi repudiandae nostrum, saepe excepturi maiores, modi.</p>
                        <div class="feat-butt">
                            <a href="#" class="bttn-applora-gradient">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Text -->
            </div>

            <!-- End Single One -->
        </div>
        <!-- end container -->
    </section>
    <!-- End feat-one -->

    <section id="download" class="download">
        <div class="overlay">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <h2>Built for everyone</h2>
                            <span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <div class="download-content">
                    <div class="text-download wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <p><i>"The best thing to hold onto in life is each other!"</i></p>
                    </div>
                    <!-- Start Store Button -->
                    <div class="store-butt">
                        <a href="#" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <i class="fa fa-apple"></i>
                            <span>App Store</span>
                        </a>
                        <a href="#" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                            <i class="fa fa-android"></i>
                            <span>Google Play</span>
                        </a>
                        <a href="#" class="bttn-applora-gradient wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                            <i class="fa fa-windows"></i>
                            <span>Windows Store</span>
                        </a>
                    </div>
                    <!-- End Store Button -->
                    <!-- Start Image Download -->
                    <div class="image-download">
                        <img src="images/veritcal-app.png" alt="Download Image" class="img-responsive">
                    </div>
                    <!-- End Image Download -->
                </div>
                <!-- End download-content -->
            </div>
            <!-- End container -->
        </div>
        <!-- end overlay -->
    </section>
    <!-- End download -->


    <!--
        Start Faqs App
        ==================================== -->

    <section id="faqs" class="faqs">
        <div class="container">
            <!-- Start Section Title -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                        <h2>Frequently Asked Questions</h2>
                        <span class="title-underline wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s"><i class="fa fa-circle"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Section Title -->
            <div class="row">
                <!-- Start Faqs Photo -->
                <div class="col-md-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="faqs-img">
                        <img src="images/random-left-post.png" alt="Applora" class="img-responsive">
                    </div>
                </div>
                <!-- End Faqs Photo -->
                <!-- Start Faqs Content -->
                <div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-duration="1s">
                    <div class="faq-content-wrapper">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <!-- Start Single Faq -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">1. How can I signup on Sociolust?</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>You need to login to facebook in your device. And then open this app and click on the Sign Up button. You will be registered automatically.<br/>[Note: Your device must allow cookies.]</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Faq -->
                            <!-- Start Single Faq -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="collapsed">2. How can I find someone on Sociolust?</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>All the people who are present nearby, will be automatically shown on the 'People' section of the app. And the posts that they are sharing will be visible in the 'Timeline' section of the app.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Faq -->
                            <!-- Start Single Faq -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="collapsed">3. Why facebook login is required?</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Facebook login is required just to prevent the fake profiles. We only access your profile picture, age and sex from your facebook account.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Faq -->
                            <!-- Start Single Faq -->
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="collapsed">4. I have blocked or declined a profile, can I unblock them?</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>You have access to the list of users you've blocked or declined. All you have to do is go into the "Blocked" tab in "Settings". You can change that list at any time by unblocking or accepting a profile you have blocked or declined.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Faq -->
                        </div>
                        <!-- end panel-group -->
                    </div>
                    <!-- end faq-content-wrapper -->
                </div>
                <!-- End Faqs Content -->

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End faqs -->

    <!--
        End Faqs App
        ==================================== -->

    <?php
		include("footer.php");
	?>
</body>

</html>