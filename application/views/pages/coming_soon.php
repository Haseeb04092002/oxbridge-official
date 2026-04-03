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

        <div class="container my-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-lg border-0 overflow-hidden">
                        <div class="row g-0 align-items-center">

                            <!-- Left Icon / Image -->
                            <div class="col-md-4 bg-primary bg-gradient text-white text-center py-5">
                                <i class="bi bi-rocket-takeoff fs-1 mb-3"></i>
                                <h5 class="fw-bold">Coming Soon</h5>
                            </div>

                            <!-- Right Content -->
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h4 class="card-title fw-bold">
                                        We’re Building Something Amazing
                                    </h4>
                                    <p class="card-text text-muted mb-3">
                                        Our new feature is under development and will be launched soon.
                                        Stay connected for updates.
                                    </p>

                                    <!-- <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                        Launching Shortly
                                    </span>

                                    <div class="mt-4">
                                        <a href="#" class="btn btn-primary">
                                            Notify Me
                                        </a>
                                        <a href="#" class="btn btn-outline-secondary ms-2">
                                            Learn More
                                        </a>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


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