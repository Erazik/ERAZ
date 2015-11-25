<?php get_header();
//$id = $post->ID;

?>
    <div class="performance">
        <div class="performance_title">
            <?php echo get_the_title($id);?>
        </div>
        <div class="performance_content">
             <?php
                $content_post = get_post($id);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
             ?>
        </div>
        </div>
    </div>
    <div class="clear"></div>
<?php get_footer(); ?>