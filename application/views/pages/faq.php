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
            <!-- contact area -->
            <div class="content-block">
                <!-- Your Faq -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-bx left">
                                    <h2 class="m-b10 title-head">Frequently Asked <span> Questions</span></h2>
                                </div>
                                <!-- <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p> -->
                                <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1">
                                                    What services does OES provide? </a>
                                            </h6>
                                        </div>
                                        <div id="faq1" class="acod-body collapse">
                                            <div class="acod-content">OES provides professional, high-quality, and fully customized design solutions for schools, academies, and educational institutions, including branding, marketing materials, and creative communication tools.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2">
                                                    Who can benefit from OES services?</a>
                                            </h6>
                                        </div>
                                        <div id="faq2" class="acod-body collapse">
                                            <div class="acod-content">Our services are designed for schools, academies, and educational institutions looking to enhance their identity, communication, and engagement through professional creative solutions.</div>
                                        </div>
                                    </div>
                                    <!-- Here’s the FAQ data for your company, Oxbridge Educational Services (OES):

                                    1. **What services does OES provide?**
                                    OES provides professional, high-quality, and fully customized design solutions for schools, academies, and educational institutions, including branding, marketing materials, and creative communication tools.

                                    2. **Who can benefit from OES services?**
                                    Our services are designed for schools, academies, and educational institutions looking to enhance their identity, communication, and engagement through professional creative solutions.

                                    3. **How does OES ensure quality in its projects?**
                                    We follow a thorough creative process, from understanding client needs to delivering polished solutions, ensuring every project reflects excellence, innovation, and professionalism.

                                    4. **Can OES handle custom requests?**
                                    Yes! OES specializes in fully customized creative solutions tailored to the specific needs and vision of each educational organization.

                                    5. **How can we get started with OES?**
                                    Getting started is easy! You can contact OES through our website or email, discuss your requirements, and we’ll create a customized plan to meet your school’s creative needs. -->


                                    <div class="panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#faq3" class="collapsed" data-parent="#faq3">
                                                    How does OES ensure quality in its projects? </a>
                                            </h6>
                                        </div>
                                        <div id="faq3" class="acod-body collapse">
                                            <div class="acod-content">We follow a thorough creative process, from understanding client needs to delivering polished solutions, ensuring every project reflects excellence, innovation, and professionalism.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#faq4" class="collapsed" data-parent="#faq4">
                                                    Can OES handle custom requests? </a>
                                            </h6>
                                        </div>
                                        <div id="faq4" class="acod-body collapse">
                                            <div class="acod-content">Yes! OES specializes in fully customized creative solutions tailored to the specific needs and vision of each educational organization.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#faq5" class="collapsed" data-parent="#faq5">
                                                    How can we get started with OES? </a>
                                            </h6>
                                        </div>
                                        <div id="faq5" class="acod-body collapse">
                                            <div class="acod-content"> Getting started is easy! You can contact OES through our website or email, discuss your requirements, and we’ll create a customized plan to meet your school’s creative needs. --></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                        <div class="feature-container">
                                            <div class="feature-md text-white m-b20">
                                                <a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon1.png') ?>" alt=""></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="ttr-tilte">Our Philosophy</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                        <div class="feature-container">
                                            <div class="feature-md text-white m-b20">
                                                <a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon2.png') ?>" alt=""></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="ttr-tilte">Kingster's Principle</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                        <div class="feature-container">
                                            <div class="feature-md text-white m-b20">
                                                <a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon3.png') ?>" alt=""></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="ttr-tilte">Key Of Success</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                        <div class="feature-container">
                                            <div class="feature-md text-white m-b20">
                                                <a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon4.png') ?>" alt=""></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="ttr-tilte">Our Philosophy</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="col-lg-4 col-md-12">
                                <form class="contact-bx dzForm" action="http://educhamp.themetrades.com/demo/script/contact.php">
                                    <div class="dzFormMsg"></div>
                                    <div class="heading-bx left">
                                        <h2 class="title-head">Get In <span>Touch</span></h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                    </div>
                                    <div class="row placeani">
                                        <div class="col-lg-6 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Your Name</label>
                                                    <input name="dzName" type="text" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Your Email Address</label>
                                                    <input name="dzEmail" type="email" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Your Phone</label>
                                                    <input name="dzOther[Phone]" type="text" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Subject</label>
                                                    <input name="dzOther[Subject]" type="text" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Type Message</label>
                                                    <textarea name="dzMessage" rows="4" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                    <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>

                    </div>
                </div>
                <!-- Your Faq End -->
            </div>
            <!-- contact area END -->
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