<?php
/* Template Name: Homepage */
get_header();
$page_data = get_field('homepage_tabs');
?>

<div class="homepage-header">
    <div class="backgeound-section" style="background-image: url('<?= $page_data['header_image']; ?>')">
        <div class="container">
            <div class="homepage-header-text">
                <span class="title-border-block"></span>
                <p><?= $page_data['header_description']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="homepage-content">
    <div class="container">
        <div class="page-content">
            <?= get_the_content(); ?>
        </div>
    </div>
</div>

<div class="homepage-product-section">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <span class="title-border-block"></span>
                <p><?= $page_data['product_titel']; ?></p>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="product-image">
                    <img src="<?= $page_data['product_image']; ?>" alt="" />
                </div>
            </div>
            <div class="col-xs-12 col-lg-8">
                <div class="product_description">
                    <?= $page_data['product_description']; ?>
                </div>
                <div class="product-button">
                    <button data-link="<?= $page_data['product_link']; ?>"><?= __('Jetzt herunterladen' , 'abb'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-page-articles-section">
    <div class="container">
        <div class="row">
            <div class="col-12 section-title">
                <span class="title-border-block"></span>
                <p><?= $page_data['latest_posts_title']; ?></p>
            </div>
        </div>
        <?php do_action('latest_posts'); ?>
    </div>
</div>

<div class="home-page-articles-section">
    <div class="container">
        <?php do_action('list_posts' , ['count' => $page_data['post_count']]); ?>
    </div>
</div>

<?php get_footer(); ?>
