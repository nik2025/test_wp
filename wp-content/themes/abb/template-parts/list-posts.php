<?php $i=1; foreach($args['posts'] as $post): $i++?>
<div class="list-post-item">
    <div class="row">
        <?php if ($i % 2 == 1): ?>
        <div class="col-xs-12 col-lg-4">
            <?php if (get_the_post_thumbnail($post->ID)): ?>
                <img src="<?= get_the_post_thumbnail_url($post->ID)?>" />
            <?php else: ?>
                <img src="https://via.placeholder.com/150" />
            <?php endif; ?>
        </div>
        <div class="col-lg-8 col-xs-12">
            <div class="row">
                <div class="section-title">
                    <span class="title-border-block"></span>
                    <p><?= $post->post_title; ?></p>
                </div>
            </div>
            <div class="row">
                <div>
                    <?= get_the_excerpt($post->ID); ?>
                </div>
                <div class="list-post-readmore">
                    <button><?= __('Mehr erfahren' , 'abb'); ?></button>
                </div>
            </div>
        </div>
        <?php else: ?>
            <div class="col-lg-8 col-xs-12">
                <div class="row">
                    <div class="section-title">
                        <span class="title-border-block"></span>
                        <p><?= $post->post_title; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <?= get_the_excerpt($post->ID); ?>
                    </div>
                    <div class="list-post-readmore">
                        <button><?= __('Mehr erfahren' , 'abb'); ?></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4">
                <?php if (get_the_post_thumbnail($post->ID)): ?>
                    <img src="<?= get_the_post_thumbnail_url($post->ID)?>" />
                <?php else: ?>
                    <img src="https://via.placeholder.com/150" />
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>


