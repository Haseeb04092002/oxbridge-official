<div class="widget-post-bx" id="blogContainer"> <?php foreach ($blogs as $blog): ?>
        <div class="widget-post clearfix recent-post-item"
            data-title="<?= strtolower($blog->title ?? '') ?>"
            data-tags="<?= strtolower($blog->keywords ?? '') ?>">

            <div class="ttr-post-media">
            </div>
            <div class="ttr-post-info">
                <div class="ttr-post-header">
                    <h6 class="post-title">
                        <a href="<?= site_url('Home/blog_details/' . $blog->blog_id) ?>"><?= $blog->title ?></a>
                    </h6>
                </div>
                <ul class="media-post">
                    <li><i class="fa fa-calendar"></i><?= date('d M Y', strtotime($blog->added_on)) ?></li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
    <div id="noResults" style="display:none; padding: 20px; text-align: center;">No posts found.</div>
</div>


