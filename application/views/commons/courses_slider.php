<!-- Popular Courses -->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Popular <span>Courses</span> (10+)</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
            </div>
        </div>
        <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$basic_web_coding['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/basic_web_coding') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/basic_web_coding') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/basic_web_coding') ?>"><?= $basic_web_coding['title']; ?></a></h5>
                        <?php foreach ($basic_web_coding['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/basic_web_coding') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$basic_web_non_coding['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/basic_web_non_coding') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/basic_web_non_coding') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/basic_web_non_coding') ?>"><?= $basic_web_non_coding['title']; ?></a></h5>
                        <?php foreach ($basic_web_non_coding['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/basic_web_non_coding') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$ms_office['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/ms_office') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/ms_office') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/ms_office') ?>"><?= $ms_office['title']; ?></a></h5>
                        <?php foreach ($ms_office['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/ms_office') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$full_stack['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/full_stack') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/full_stack') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/full_stack') ?>"><?= $full_stack['title']; ?></a></h5>
                        <?php foreach ($full_stack['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$seo['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/seo') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/seo') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/seo') ?>"><?= $seo['title']; ?></a></h5>
                        <?php foreach ($seo['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/seo') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$mobile_app['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/mobile_app') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/mobile_app') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/mobile_app') ?>"><?= $mobile_app['title']; ?></a></h5>
                        <?php foreach ($mobile_app['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/mobile_app') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$digital_marketing['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/digital_marketing') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/digital_marketing') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/digital_marketing') ?>"><?= $digital_marketing['title']; ?></a></h5>
                        <?php foreach ($digital_marketing['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/digital_marketing') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$daraz_seller['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/daraz_seller') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/daraz_seller') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/daraz_seller') ?>"><?= $daraz_seller['title']; ?></a></h5>
                        <?php foreach ($daraz_seller['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/daraz_seller') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="recent-news">
                    <div class="action-box">
                        <img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/').$graphic_design['course_card_image'] ?>" alt="">
                    </div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="<?= base_url('Home/course_details/graphic_design') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
                            <li><a href="<?= base_url('Home/course_details/graphic_design') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
                        </ul>
                        <h5 class="post-title"><a href="<?= base_url('Home/course_details/graphic_design') ?>"><?= $graphic_design['title']; ?></a></h5>
                        <?php foreach ($graphic_design['short_content'] as $topic) : ?>
                            <p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
                        <?php endforeach; ?>
                        <div class="post-extra">
                            <a href="<?= base_url('Home/course_details/graphic_design') ?>" class="btn-link">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 mx-auto justify-content-center text-center">
        <button class="btn btn-primary">Explore all courses</button>
    </div>
</div>
<!-- Popular Courses End -->