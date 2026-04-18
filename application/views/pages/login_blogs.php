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

        <div class="mt-5 pt-5 page-content bg-white">

            <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 mx-auto justify-content-center">
                            <?php 
                            if(!empty($message) && isset($message)){
                            ?>
                            <h4 class="text-danger"><?= $message ?></h4>
                            <?php
                            } 
                            ?>
                            <form class="contact-bx"
                              method="post"
                              action="<?= base_url('Home/check_blog_login') ?>">

                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Enter Password To Add Blogs</h2>
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Password</label>
                                                <input name="password" type="text" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="btn button-md">Submit</button>
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