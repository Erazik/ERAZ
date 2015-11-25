<?php
/**
 * Template name: Bio
 **/
?>
<?php get_header();


?>
     <div class="bio">
         <div class="group3Title">
             <div class="left_line3"></div>
             <div class="group3_title"><p>Bio</p></div>
             <div class="right_line3"></div>
         </div>
        <div class="bio_title">
            <?php echo get_the_title($id);?>
        </div>
         <div class="biography">
            <div class="bio_img">
                <?php echo get_the_post_thumbnail($id); ?>
            </div>
             <div class="bio_text">
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