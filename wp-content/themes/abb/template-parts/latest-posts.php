<div class="row">
    <?php foreach($args['posts'] as $post): ?>
    <div class="col-xs-12 col-sm-12 col-lg-4">
        <div class="latest-post">
            <div class="post-image">
                <?php if (get_the_post_thumbnail($post->ID)): ?>
                    <img src="<?= get_the_post_thumbnail_url($post->ID)?>" />
                <?php else: ?>
                    <img src="https://via.placeholder.com/150" />
                <?php endif; ?>
            </div>
            <div class="latest-post-title">
                <span><?= $post->post_title; ?></span>
            </div>
            <div class="post-excerpt">
                <?= get_the_excerpt($post->ID); ?>
            </div>
            <div class="latest-post-readmore">
                <button><?= __('Weiterlesen' , 'abb'); ?></button>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>
