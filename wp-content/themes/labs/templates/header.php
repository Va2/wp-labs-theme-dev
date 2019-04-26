<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2><?= $slug = ucfirst(wp_title('')); ?></h2>
            <div class="page-links">
                <a href="/?page_id=<?= get_page_by_title('home')->ID ?>">Home</a>
                <span><?= $slug = ucfirst(wp_title('')); ?></span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->