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
			<!-- inner page banner -->
			<div class="pt-4 page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white">Blogs and Articles</h1>
					</div>
				</div>
			</div>
			<div class="content-block">
				<div class="section-area section-sp1">
					<div class="container">
						<div class="row">
							<!-- left part start -->
							<div class="col-lg-8 col-xl-8 col-md-7">
								<!-- blog grid -->
								<div id="masonry" class="ttr-blog-grid-3 row">
									<?php foreach ($blogs as $blog): ?>

										<div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
											<div class="recent-news">

												<!-- FEATURED IMAGE (FIRST IMAGE FROM MEDIA) -->
												<div class="action-box">
													<?php
													$first_image = '';

													if (!empty($blog->media)) {
														foreach ($blog->media as $m) {
															if ($m->media_file_type == 'image') {
																$first_image = base_url($m->media_file_path . $m->media_file_name);
																break;
															}
														}
													}
													?>

													<?php if ($first_image != ''): ?>
														<img src="<?= $first_image ?>" alt="">
													<?php else: ?>
														<img src="<?= base_url('uploads/no-image.png') ?>" class="img-fluid w-100" style="height:150px; object-fit:cover;" alt="">
													<?php endif; ?>
												</div>

												<div class="info-bx">

													<!-- DATE -->
													<ul class="media-post">
														<li>
															<a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>">
																<i class="fa fa-calendar"></i>
																<?= date('d M Y', strtotime($blog->added_on)) ?>
															</a>
														</li>
													</ul>

													<!-- TITLE -->
													<h5 class="post-title">
														<a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>">
															<?= $blog->title ?>
														</a>
													</h5>

													<!-- SHORT DESCRIPTION -->
													<p>
														<?= substr(strip_tags($blog->short_desc), 0, 120) ?>...
													</p>

													<!-- EXTRA -->
													<div class="post-extra">
														<a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>" class="btn-link">
															READ MORE
														</a>
													</div>

												</div>

											</div>
										</div>

									<?php endforeach; ?>
								</div>
								<!-- blog grid END -->

							</div>
							<!-- left part END -->
							<!-- Side bar start -->
							<div class="col-lg-4 col-xl-4 col-md-5 sticky-top">
								<aside class="side-bar sticky-top">
									<div class="widget">
										<h6 class="widget-title">Search</h6>
										<div class="search-bx style-1">
											<form role="search" method="post">
												<div class="input-group">
													<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
													<span class="input-group-btn">
														<button type="submit" class="fa fa-search text-primary"></button>
													</span>
												</div>
											</form>
										</div>
									</div>
									<div class="widget recent-posts-entry">
										<h6 class="widget-title">Recent Posts</h6>
										<div class="widget-post-bx">

											<?php foreach ($blogs as $blog): ?>

												<div class="widget-post clearfix">
													<div class="ttr-post-media">
														<?php
														$first_image = '';

														if (!empty($blog->media)) {
															foreach ($blog->media as $m) {
																if ($m->media_file_type == 'image') {
																	$first_image = base_url($m->media_file_path . $m->media_file_name);
																	break;
																}
															}
														}
														?>

														<?php if ($first_image != ''): ?>
															<img src="<?= $first_image ?>" alt="">
														<?php else: ?>
															<img src="<?= base_url('uploads/no-image.png') ?>" width="200" height="143" alt="">
														<?php endif; ?>
													</div>
													<div class="ttr-post-info">
														<div class="ttr-post-header">
															<h6 class="post-title"><a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>"><?= $blog->title ?></a></h6>
														</div>
														<ul class="media-post">
															<li><a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>"><i class="fa fa-calendar"></i><?= date('d M Y', strtotime($blog->added_on)) ?></a></li>
														</ul>
													</div>
												</div>

											<?php endforeach; ?>

										</div>
									</div>
									<div class="widget widget-newslatter">
										<h6 class="widget-title">Newsletter</h6>
										<div class="news-box">
											<p>Contact Us on Whatsapp.</p>
											+92 314 5310786
										</div>
									</div>
									<!-- <div class="widget widget_gallery gallery-grid-4">
										<h6 class="widget-title">Our Gallery</h6>
										<ul>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic2.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic1.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic5.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic7.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic8.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic9.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic3.jpg') ?>" alt=""></a></div>
											</li>
											<li>
												<div><a href="#"><img src="<?= base_url('assets/images/gallery/pic4.jpg') ?>" alt=""></a></div>
											</li>
										</ul>
									</div> -->
									<div class="widget widget_tag_cloud">
										<h6 class="widget-title">Tags</h6>
										<div class="tagcloud">
											<a href="#">Design</a>
											<a href="#">User interface</a>
											<a href="#">SEO</a>
											<a href="#">WordPress</a>
											<a href="#">Development</a>
											<a href="#">Joomla</a>
											<a href="#">Design</a>
											<a href="#">User interface</a>
											<a href="#">SEO</a>
											<a href="#">WordPress</a>
											<a href="#">Development</a>
											<a href="#">Joomla</a>
											<a href="#">Design</a>
											<a href="#">User interface</a>
											<a href="#">SEO</a>
											<a href="#">WordPress</a>
											<a href="#">Development</a>
											<a href="#">Joomla</a>
										</div>
									</div>
								</aside>
							</div>
							<!-- Side bar END -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Left & right section END -->
		<!-- Content END-->
		<?php
		$this->load->view('commons/footer');
		?>
	</div>

</body>

</html>