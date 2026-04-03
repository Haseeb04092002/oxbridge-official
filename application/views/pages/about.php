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

		<div class="content-block mt-5">
			<div class="section-area bg-gray section-sp1">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-7 col-md-12 heading-bx">
							<h2 class="m-b10">Mr. Zohaib Ibrar</h2>
							<h5 class="badge bg-primary text-light" style="font-size: 15px;">Founder & CEO</h5>
							<p>At Oxbridge Educational Services (OES), we provide professional, high-quality, and fully customized design solutions tailored specifically for schools, academies, and educational institutions. Our mission is to empower educational organizations with creative services that enhance their identity, communication, and engagement, ensuring every project reflects excellence, innovation, and professionalism.</p>
						</div>
						<div class="text-center col-lg-5 col-md-12 heading-bx p-lr">
							<img class="text-center " style="border: 5px solid #084fcd; border-radius: 10px; padding: 15px;" src="<?= base_url('assets/images/zohaib.png') ?>" alt="">
						</div>
					</div>
				</div>
			</div>

			<!-- Team Section -->
			<section class="team-section py-5">
				<div class="container">
					<h2 class="text-center mb-5">Meet Our Team</h2>
					<div class="row g-4">
						<!-- Team Member 1 -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="team-card">
								<div class="team-img">
									<img src="<?= base_url('assets/images/usman.png') ?>" alt="Team Member 1">
								</div>
								<div class="team-info text-center">
									<h5>Jane Doe</h5>
									<p>CEO</p>
								</div>
							</div>
						</div>
						<!-- Team Member 2 -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="team-card">
								<div class="team-img">
									<img src="<?= base_url('assets/images/usman.png') ?>" alt="Team Member 2">
								</div>
								<div class="team-info text-center">
									<h5>John Smith</h5>
									<p>Creative Director</p>
								</div>
							</div>
						</div>
						<!-- Team Member 3 -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="team-card">
								<div class="team-img">
									<img src="<?= base_url('assets/images/usman.png') ?>" alt="Team Member 3">
								</div>
								<div class="team-info text-center">
									<h5>Emily Johnson</h5>
									<p>Designer</p>
								</div>
							</div>
						</div>
						<!-- Team Member 4 -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="team-card">
								<div class="team-img">
									<img src="<?= base_url('assets/images/usman.png') ?>" alt="Team Member 4">
								</div>
								<div class="team-info text-center">
									<h5>Michael Lee</h5>
									<p>Developer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Custom CSS -->
			<style>
				.team-card {
					background: #fff;
					border-radius: 12px;
					box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
					overflow: hidden;
					transition: transform 0.3s, box-shadow 0.3s;
				}

				.team-card:hover {
					transform: translateY(-10px);
					box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
				}

				.team-img img {
					width: 100%;
					height: auto;
					display: block;
				}

				.team-info h5 {
					margin-top: 15px;
					font-size: 1.2rem;
					font-weight: 600;
				}

				.team-info p {
					font-size: 0.95rem;
					color: #555;
				}

				@media (max-width: 767px) {
					.team-info h5 {
						font-size: 1.1rem;
					}

					.team-info p {
						font-size: 0.9rem;
					}
				}
			</style>

			<!-- About Us ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon1.png') ?>" alt="" /></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Professionalism</h5>
									<p>We maintain the highest standards in every project, ensuring quality, reliability, and consistent excellence in service delivery.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon2.png') ?>" alt="" /></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Innovation</h5>
									<p>We embrace creativity and technology to deliver unique solutions that drive progress and set new industry benchmarks.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon3.png') ?>" alt="" /></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Integrity</h5>
									<p>We uphold honesty, transparency, and ethical practices in every interaction, building trust with clients and partners alike.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="<?= base_url('assets/images/icon/icon4.png') ?>" alt="" /></a>
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Excellence</h5>
									<p>We strive for exceptional results in every endeavor, continuously improving to exceed expectations and deliver outstanding outcomes.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- About Us END ==== -->
			<!-- Our Story ==== -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx">
							<h2 class="m-b10">Oxbridge Educational Services</h2>
							<h5 class="fw4">Your School’s Complete Creative Partner</h5>
							<p>At Oxbridge Educational Services (OES), we provide professional, high-quality, and fully customized design solutions tailored specifically for schools, academies, and educational institutions. Our mission is to empower educational organizations with creative services that enhance their identity, communication, and engagement, ensuring every project reflects excellence, innovation, and professionalism.</p>
							<a href="#" class="btn">Contact Us</a>
						</div>
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<!-- <img src="<?= base_url('assets/images/about/pic1.jpg') ?>" alt="" />
								<a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i class="fa fa-play"></i></a> -->
								<video controls width="600">
									<source src="<?= base_url('assets/videos/oes-intro.mp4') ?>" type="video/mp4">
									<source src="<?= base_url('assets/videos/oes-intro.mp4') ?>" type="video/webm">
									Your browser does not support the video tag.
								</video>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Story END ==== -->
			<!-- Our Status ==== -->
			<div class="section-area content-inner section-sp1">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">3000</span><span>+</span>
									</div>
									<span class="counter-text">Completed Projects</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">2500</span><span>+</span>
									</div>
									<span class="counter-text">Happy Clients</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">1500</span><span>+</span>
									</div>
									<span class="counter-text">Questions Answered</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">1000</span><span>+</span>
									</div>
									<span class="counter-text">Ordered Coffee's</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Status END ==== -->
			<!-- About Content ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/images/background/bg1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h2>Learn a new skill online on <br /> your time</h2>
								<h4><span class="counter">57,000 </span> Online Courses</h4>
								<a href="#" class="btn button-md">Join Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Content END ==== -->

			<!-- Testimonials -->
			<?php
			$this->load->view('commons/testimonial_slider');
			?>
			<!-- Testimonials END -->

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