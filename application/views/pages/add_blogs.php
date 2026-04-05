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

			<div class="content-block pt-5">
				<!-- <div class="section-area section-sp1"> -->
				<div class="mt-5 card container shadow">


					<div class="card-body">
						<h3 class="mb-5">Add New Blog / Article</h3>

						<form method="post" action="<?= site_url('Home/save_blog') ?>" enctype="multipart/form-data">

							<div class="row mb-3">
								<div class="col-md-12">
									<label class="form-label">Title</label>
									<input type="text" name="title" class="form-control" required>
								</div>
							</div>

							<input type="hidden" type="text" name="added_on" value="<?= date('Y-m-d H:i:s') ?>">

							<!-- CATEGORY + TAGS -->
							<div class="row mb-3">
								<div class="col-md-6">
									<label class="form-label">Category</label>
									<input type="text" name="category" class="form-control" placeholder="Technology, Business, Education">

								</div>

								<div class="col-md-6">
									<label class="form-label">Tags (comma separated)</label>
									<input type="text" name="tags" class="form-control" placeholder="Technology, Business, Education">
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6">
									<label class="form-label">Featured Image</label>
									<input type="file" name="image" class="form-control" required accept="image/*">
								</div>

								<!-- MULTIPLE IMAGES -->
								<div class="col-md-6">
									<label class="form-label">Gallery Images (Multiple)</label>
									<input type="file" name="gallery_images[]" class="form-control" multiple accept="image/*">
								</div>

							</div>
							<div class="row mb-3">

								<!-- MULTIPLE VIDEOS -->
								<div class="col-md-6">
									<label class="form-label">Upload Videos (Multiple)</label>
									<input type="file" name="videos[]" class="form-control" multiple accept="video/*">
								</div>

								<div class="col-md-6">
									<label class="form-label">Author</label>
									<input type="text" name="author" class="form-control">
								</div>
							</div>

							<!-- SHORT DESCRIPTION -->
							<div class="mb-3">
								<label class="form-label">Short Description</label>
								<textarea name="short_desc" class="form-control" rows="3" required></textarea>
							</div>

							<!-- CONTENT -->
							<div class="mb-3">
								<label class="form-label">Full Content</label>
								<textarea name="content" class="form-control" rows="6" required></textarea>
							</div>

							<!-- BUTTONS -->
							<div class="text-end">
								<button type="reset" class="btn btn-secondary">Reset</button>
								<button type="submit" class="btn btn-primary">Save Blog</button>
							</div>

						</form>

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