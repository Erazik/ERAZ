<?php get_header();
//$id = $post->ID;

?>
<div class="bio">
    <div class="single_project_title">
        <?php echo get_the_title($id);?>
    </div>
    <div class="single_project">
        <div class="single_projectImg">
            <?php echo get_the_post_thumbnail($id); ?>
        </div>
        <div class="single_project_text">
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