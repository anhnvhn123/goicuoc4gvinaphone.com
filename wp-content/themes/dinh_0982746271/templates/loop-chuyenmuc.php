<article id="post-<?php echo get_the_ID();?>" class="post-item-chuyenmuc">
    <div class="featured-image">
        <a href="<?php echo get_permalink(); ?>">
            <img width="260" height="160" src="<?= the_post_thumbnail_url('category-thumb');?>" class="attachment-glob-thumbnail-medium size-glob-thumbnail-medium wp-post-image inview" alt="">
        </a>    
    </div>
    <div class="post-right">
        <div class="entry-header">
            <div class="entry-meta">
                <?php if(show_author){
            ?>
                <span class="author vcard">
                    <?php the_author(); ?>
                </span>
            <?php
                } ?>
                <?php 
                if (show_date) {
            ?>
                <span class="posted-on">
                    <time class="entry-date published updated"><?php the_date('d/m/Y'); ?></time>
                </span>
            <?php
                }
                ?>              
            </div>
            <h2 class="entry-title">
                <a href="https://demos.famethemes.com/glob/office-365-for-business-is-here-good-luck-figuring-out-what-itll-cost-you/" rel="bookmark">Office 365 For Business Is Here Good Luck Figuring Out</a>
            </h2>            
        </div>
        <div class="entry-excerpt">
            <?php echo get_excerpt(get_the_ID()); ?>
        </div>
    </div>
</article>