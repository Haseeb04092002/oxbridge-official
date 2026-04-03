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
                <!-- Portfolio  -->
                <div class="section-area section-sp1 gallery-bx">
                    <div class="container">
                        <div class="feature-filters clearfix center m-b40">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active">
                                    <input type="radio">
                                    <a href="#"><span>All</span></a>
                                </li>
                                <li data-filter="book" class="btn">
                                    <input type="radio">
                                    <a href="#"><span>Book</span></a>
                                </li>
                                <li data-filter="courses" class="btn">
                                    <input type="radio">
                                    <a href="#"><span>Courses</span></a>
                                </li>
                                <li data-filter="education" class="btn">
                                    <input type="radio">
                                    <a href="#"><span>Education</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_1.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_1.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_2.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_2.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_3.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_3.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 book education">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_4.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_4.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_5.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_5.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_6.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_6.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_7.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_7.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_8.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_8.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 education courses">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_9.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_9.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_10.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_10.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 courses">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_11.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_11.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                                    <div class="ttr-box portfolio-bx">
                                        <div class="ttr-media media-ov2 media-effect">
                                            <a href="javascript:void(0);">
                                                <img src="<?= base_url('assets/images/portfolio/image_12.jpg') ?>" alt="">
                                            </a>
                                            <div class="ov-box">
                                                <div class="overlay-icon align-m">
                                                    <a href="assets/images/portfolio/image_12.jpg" class="magnific-anchor" title="Title Come Here">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-info-bx bg-primary">
                                                    <h4><a href="#">Soft skills</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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