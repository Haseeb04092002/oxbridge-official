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
        <div class="page-content bg-white">
            <!-- inner page banner END -->
            <div class="content-block">
                <!-- About Us -->
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row d-flex flex-row-reverse">
                            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                                <div class="course-detail-bx">
                                    <div class="course-price">
                                        <h4 class=""><?= $price; ?></h4>
                                    </div>
                                    <div class="course-buy-now text-center">
                                        <a href="#" class="btn radius-xl text-uppercase">Enroll Now</a>
                                    </div>
                                    <div class="teacher-bx">
                                        <div class="teacher-info">
                                            <div class="teacher-thumb">
                                                <img src="<?= base_url('assets/images/testimonials/pic1.jpg') ?>" alt="" />
                                            </div>
                                            <div class="teacher-name">
                                                <h5><?= $teacher ?></h5>
                                                <span>Teacher</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Months</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price categories">
                                            <span>Categories</span>
                                            <h5 class="text-primary">Frontend</h5>
                                        </div>
                                    </div> -->
                                    <div class="course-info-list scroll-page">
                                        <h6 class="px-3">You Will Be able To Make These Projects:</h6>
                                        <ul class="navbar">
                                            <?php foreach ($projects as $project) : ?>
                                                <li><a class="nav-link py-0 my-0" href="#"><i class="bi bi-check"></i><?= $project ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <div class="courses-post">
                                    <div class="ttr-post-media media-effect">
                                        <a href="#"><img style="max-height: 250px;" src="<?= base_url('assets/images/blog/default/thum1.jpg') ?>" alt=""></a>
                                    </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-title ">
                                            <h2 class="post-title"><?= $title; ?></h2>
                                        </div>
                                        <div class="ttr-post-text">
                                            <p><?= $short_description ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courese-overview" id="overview">
                                    <h4>Overview</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <ul class="course-features">
                                                <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value"><?= $lectures ?></span></li>
                                                <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value"><?= $quizzes ?></span></li>
                                                <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value"><?= $duration ?></span></li>
                                                <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value"><?= $difficulty ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-8">
                                            <h5 class="m-b5">Course Description</h5>
                                            <p><?= $long_description ?></p>
                                            <h5 class="m-b5">Learning Outcomes</h5>
                                            <ul class="list-checked primary">
                                                <?php foreach ($outcomes as $outcome) : ?>
                                                    <li><?= $outcome ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-b30" id="curriculum">
                                    <h4>Curriculum</h4>
                                    <div class="row">
                                        <?php
                                        $count = 1; 
                                        foreach ($curriculum as $curriculum_item):
                                        ?>
                                            <div class="col-md-6">
                                                <ul class="curriculum-list">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <div class="curriculum-list-box">
                                                                    <span>Lesson <?= $count ?>.</span> <?= $curriculum_item ?>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php
                                        $count++;
                                        endforeach;
                                        ?>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <ul class="curriculum-list">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 1.</span> Introduction to UI Design
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> User Research and Design
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating User Interfaces Part 1
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="curriculum-list">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 1.</span> Introduction to UI Design
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> User Research and Design
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating User Interfaces Part 1
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>

                            </div>





                            <div style="display: none;" class="" id="instructor">
                                <h4>Instructor</h4>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="<?= base_url('assets/images/testimonials/pic2.jpg') ?>" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>Keny White </h6>
                                        <span>Professor</span>
                                        <ul class="list-inline m-tb10">
                                            <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="<?= base_url('assets/images/testimonials/pic2.jpg') ?>" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>Keny White </h6>
                                        <span>Professor</span>
                                        <ul class="list-inline m-tb10">
                                            <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" class="" id="reviews">
                                <h4>Reviews</h4>

                                <div class="review-bx">
                                    <div class="all-review">
                                        <h2 class="rating-type">3</h2>
                                        <ul class="cours-star">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>3 Rating</span>
                                    </div>
                                    <div class="review-bar">
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>5 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:90%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>150</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>4 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:70%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>140</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>3 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:50%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>120</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>2 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:40%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>110</div>
                                            </div>
                                        </div>
                                        <div class="bar-bx">
                                            <div class="side">
                                                <div>1 star</div>
                                            </div>
                                            <div class="middle">
                                                <div class="bar-container">
                                                    <div class="bar-5" style="width:20%;"></div>
                                                </div>
                                            </div>
                                            <div class="side right">
                                                <div>80</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

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