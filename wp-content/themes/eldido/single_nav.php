<?php 
$prevPost = get_previous_post();
$prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
$prevTitle= get_the_title( $prevPost->ID );
$prevLink= get_post_permalink( $prevPost->ID );
$prevThumbnailUrl= get_the_post_thumbnail_url($prevPost->ID);

$nextPost = get_next_post();
$nextThumbnail = get_the_post_thumbnail( $nextPost->ID );
$nextTitle= get_the_title( $nextPost->ID );
$nextLink= get_post_permalink( $nextPost->ID );
$nextThumbnailUrl= get_the_post_thumbnail_url($nextPost->ID);
?>
<section>
<div class="single-nav">
    <?php if($prevPost): ?>
    <a href="<?php echo $prevLink; ?>" class="single-nav-btn prev">
        <img src="<?php echo $prevThumbnailUrl; ?>" alt="" class="item-image">
        <div class="item-content">
            <div class="valign">
                <div class="valign-content">
                    <div class="item-title">
                        <?php echo $prevTitle; ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="item-arrow"></div>
    </a>
    <?php endif; ?>
    <?php if($nextPost): ?>
    <a href="<?php echo $nextLink; ?>" class="single-nav-btn next">
        <img src="<?php echo $nextThumbnailUrl; ?>"" alt="" class="item-image">
        <div class="item-content">
            <div class="valign">
                <div class="valign-content">
                   
                    <div class="item-title">
                        <?php echo $nextTitle; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-arrow"></div>
    </a>
    <?php endif; ?>
</div>
</section>