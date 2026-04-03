<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view('commons/header_meta');
    $this->load->view('commons/css_links');
    ?>
</head>

<body id="bg">
    <?php
    $this->load->view('commons/js_links');
    ?>
    <div class="page-wraper">

        <?php
        $this->load->view('commons/header');
        ?>

        <!-- Content -->
        <div class="mt-5 pt-5 page-content bg-white">
            <!-- inner page banner -->
            <!-- <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white">Contact Us 1</h1>
                    </div>
                </div>
            </div> -->
            <!-- Breadcrumb row -->
            <!-- <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Contact Us 1</li>
                    </ul>
                </div>
            </div> -->
            <!-- Breadcrumb row END -->

            <!-- inner page banner -->
            <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 m-b30">
                            <div class="bg-primary text-white contact-info-bx">
                                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="widget widget_getintuch">
                                    <ul>
                                        <li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New York</li>
                                        <li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>
                                        <li><i class="ti-email"></i>info@example.com</li>
                                    </ul>
                                </div>
                                <h5 class="m-t0 m-b20">Follow Us</h5>
                                <ul class="list-inline contact-social-bx">
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <form class="contact-bx ajax-form" action="http://educhamp.themetrades.com/demo/assets/script/contact.php">
                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Get In <span>Touch</span></h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Name</label>
                                                <input name="name" type="text" required class="form-control valid-character">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Email Address</label>
                                                <input name="email" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Phone</label>
                                                <input name="phone" type="text" required class="form-control int-value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Subject</label>
                                                <input name="subject" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Type Message</label>
                                                <textarea name="message" rows="4" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
        </div>
        <!-- Content END-->

        <?php
        $this->load->view('commons/footer');
        ?>

    </div>


    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/vendors/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
</body>

</html>