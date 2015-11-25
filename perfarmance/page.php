<?php get_header(); ?>
<?php
    $id = $post->ID;
    get_the_title($id);
    $content_post = get_post($id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
    var_dump($id);

    ?>

<?php get_footer(); ?>