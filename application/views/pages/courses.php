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

		<div class="py-5 my-5">
			<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active"
							id="home-tab"
							data-bs-toggle="tab"
							data-bs-target="#home"
							type="button"
							role="tab"
							aria-controls="home"
							aria-selected="false">
							Basic Courses
						</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link"
							id="profile-tab"
							data-bs-toggle="tab"
							data-bs-target="#profile"
							type="button"
							role="tab"
							aria-controls="profile"
							aria-selected="false">
							Advance Courses
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link"
							id="contact-tab"
							data-bs-toggle="tab"
							data-bs-target="#contact"
							type="button"
							role="tab"
							aria-controls="contact"
							aria-selected="true">
							AI Courses For Kids
						</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">

					<!-- basic courses -->
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row">

							<!-- basic_web_coding -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $basic_web_coding['course_card_image'] ?>" alt="">
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
							</div>

							<!-- basic_web_non_coding -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $basic_web_non_coding['course_card_image'] ?>" alt="">
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
							</div>

							<!-- ms_office -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $ms_office['course_card_image'] ?>" alt="">
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
							</div>

							<!-- digital_marketing -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $digital_marketing['course_card_image'] ?>" alt="">
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
							</div>

							<!-- graphic_design -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $graphic_design['course_card_image'] ?>" alt="">
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
					</div>

					<!-- advance courses -->
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row">

							<!-- full_stack -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $full_stack['course_card_image'] ?>" alt="">
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
							</div>

							<!-- seo -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">

								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $seo['course_card_image'] ?>" alt="">
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
							</div>

							<!-- mobile_app -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $mobile_app['course_card_image'] ?>" alt="">
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
							</div>

							<!-- daraz_seller -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $daraz_seller['course_card_image'] ?>" alt="">
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
							</div>
						</div>
					</div>

					<!-- ai for kids courses -->
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

						<div class="row">

							<!-- ai_kids -->
							<div class="col-lg-4 col-md-4 col-sm-6 p-3">
								<div class="item">
									<div class="recent-news">
										<div class="action-box">
											<img style="max-height: 230px; min-height: 230px;" src="<?= base_url('assets/images/new/') . $ai_kids['course_card_image'] ?>" alt="">
										</div>
										<div class="info-bx">
											<ul class="media-post">
												<li><a href="<?= base_url('Home/course_details/ai_kids') ?>"><i class="fa fa-calendar"></i>Admission Open</a></li>
												<li><a href="<?= base_url('Home/course_details/ai_kids') ?>"><i class="fa fa-user"></i>By OES Skills Academy</a></li>
											</ul>
											<h5 class="post-title"><a href="<?= base_url('Home/course_details/ai_kids') ?>"><?= $ai_kids['title']; ?></a></h5>
											<?php foreach ($ai_kids['short_content'] as $topic) : ?>
												<p class="my-0 py-0"><i class="bi bi-check-circle"></i> <?= $topic; ?></p>
											<?php endforeach; ?>
											<div class="post-extra">
												<a href="<?= base_url('Home/course_details/ai_kids') ?>" class="btn-link">READ MORE</a>
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