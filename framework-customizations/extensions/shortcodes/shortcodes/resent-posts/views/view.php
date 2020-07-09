<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$num = abs((int)$atts['posts_number']) ? $atts['posts_number'] : 1;
?>

<?
$query = new WP_Query(array(
        'post_type' => 'post',
	'post_per_page' => $num
));
?>

<div class="fw-row">
    <?if($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
        <div class="col-lg-4 col-md-4">
            <div class="fh5co-blog animate-box">
                <a href="<? the_permalink(); ?>">
                    <? if(has_post_thumbnail()) {
                        $img_url = get_the_post_thumbnail_url();
                    } else {
                        $img_url = 'http://picsum.photos/800/570';
                    }?>
                    <img src="<?=$img_url ?>" alt="">
                </a>
                <div class="blog-text">
                    <span class="posted_on"><? the_time('j M'); ?></span>
                    <span class="comment"><a href=""><?=get_comments_number() ?><i class="icon-speech-bubble"></i></a></span>
                    <h3><a href="<? the_permalink(); ?>"><? the_title(); ?>n</a></h3>
                    <p><? the_content(''); ?></p>
                    <a href="<? the_permalink(); ?>" class="btn btn-primary"><? _e('Read More', 'law'); ?></a>
                </div>
            </div>
        </div>
    <?endwhile;?>
    <?endif;?>
    <? wp_reset_postdata(); ?>
</div>

