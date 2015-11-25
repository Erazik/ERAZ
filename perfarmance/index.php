<?php
/**
* Template name: Home
**/
?>

<?php get_header(); ?>


<div class="content">
    <div id="performance" class="group1">
        <div class="group3Title">
            <div class="left_line3"></div>
            <div class="group3_title"><p>Performance</p></div>
            <div class="right_line3"></div>
        </div>
        <div class="group1_bottom" >
            <?php
            $args = array(
                'post_type'        =>'performance',
                'posts_per_page'   => 3,
                'order'            =>'ASC',
                'suppress_filters' => 0,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'performance-category',
                        'field' => 'id',
                        'terms' => 9 // Where term_id of Term 1 is "1".
                    )),
                'post_status'       => 'publish'
            );
            $posts = query_posts( $args );
            foreach($posts as $item) {
                $id = $item->ID
                 ?>
            <div class="group1_bottom_post">
                <a href="<?php echo get_the_permalink($id); ?>">
                    <div class="group1_bottom_postTitle">
                        <?php echo get_the_title($id);
                            $content_post = get_post($id);
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                        ?>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <div data-postType='performance' data-taxonomy="performance-category" data-cat-id="9" class="btn_more"><p>more</p></div>
    </div>
</div>
<div class="piano">
    <?php
    $args = array(
        'post_type'        =>'performance',
        'tax_query' => array(
            array(
                'taxonomy' => 'performance-category',
                'field' => 'id',
                'terms' => 12 // Where term_id of Term 1 is "1".
            )),
        'posts_per_page'   => 1,
        'order'            =>'ASC',
        'suppress_filters' => 0,
        'post_status'      =>'feature'
    );
    $posts = query_posts( $args );
    foreach($posts as $item){
        $id = $item->ID
     ?>

        <?php echo get_the_title($id);
        $content_post = get_post($id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>

<?php } ?>







</div>

<div class="time">
    <div class="time_left">
        <p>Starting in:</p>
    </div>
    <div class="time_right">
        <?php echo do_shortcode('[fergcorp_cdt]') ?>
    </div>

</div>
<div id="events" class="group2">
    <div class="group3Title">
        <div class="left_line3"></div>
        <div class="group3_title"><p>Events & News</p></div>
        <div class="right_line3"></div>
    </div>
    <div class="events_cat">
        <?php
        $args = array(
            'post_type'        =>'performance',
            'tax_query' => array(
                array(
                    'taxonomy' => 'performance-category',
                    'field' => 'id',
                    'terms' => 12 // Where term_id of Term 1 is "1".
                )),
            'posts_per_page'   => 4,
            'order'            =>'ASC',
            'suppress_filters' => 0,
            'post_status'      =>'feature'
        );
        $posts = query_posts( $args );
        foreach($posts as $item){
            $id = $item->ID
            ?>
        <div class="events_post">
            <div class="events_postImg">
                <?php echo get_the_post_thumbnail($id); ?>
            </div>
            <div class="events_postTitle">
                <div class="one">
                    <p><?php if($cfs->get('address',$id)) echo $cfs->get('address',$id) ?></p>
                </div>
                <div class="two">
                    <p><?php echo get_the_title($id); ?></p>
                </div>
                <div class="three">
                    <p><?php if($cfs->get('price',$id)) echo $cfs->get('price',$id) ?></p>
                </div>
                <div class="four">
                    <p><?php if($cfs->get('ticket',$id)) echo $cfs->get('ticket',$id) ?></p>
                </div>
                <div class="five"><p><?php echo $item->post_date ?></p></div>

            </div>
        </div>
           <?php } ?>
    </div>
</div>
<div id="gallery" class="group3">
    <div class="group3Title">
        <div class="left_line3"></div>
        <div class="group3_title"><p>Gallery</p></div>
        <div class="right_line3"></div>
    </div>
    <div class="Collage">

        <?php
        $content_post = get_post(249);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
       <?php
         // if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'test1', 'slug' ); }
      // echo photo_gallery(7);

       ?>
<!--       <div class="galItem">-->
<!--           <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal1.jpg"/>-->
<!--           <div></div>-->
<!--       </div>-->
<!--        <div class="galItem">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal2.jpg"/>-->
<!--        </div>-->
<!--        <div class="galItem">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal3.jpg"/>-->
<!--        </div>-->
<!--        <div class="galItem">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal4.jpg"/>-->
<!--        </div>-->
<!--        <div class="galItem">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal5.jpg"/>-->
<!--        </div>-->
<!--        <div class="galItem">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/gal6.jpg"/>-->
<!--        </div>-->
    </div>
<!--    <div class="btn_more">more</div>-->
</div>
<div id="media" class="group4">
    <div class="group3Title">
        <div class="left_line3"></div>
        <div class="group3_title"><p>Media</p></div>
        <div class="right_line3"></div>
    </div>
    <div class="media_cat">
        <?php
        $args = array(
            'post_type'        =>'media',
            'posts_per_page'   => 3,
            'order'            =>'ASC',
            'suppress_filters' => 0
        );
        $posts = query_posts( $args );
        foreach($posts as $item){
            $id = $item->ID
            ?>

                    <div class="media_post">
                            <div class="media_post_left">
                                <a href="#"><div class="data"><?php if($cfs->get('date',$id)) echo $cfs->get('date',$id) ?></div>
                                <div class="link"><?php if($cfs->get('link',$id)) echo $cfs->get('link',$id) ?></div>
                                <div class="title"><?php echo get_the_title($id);?></div>
                                <div class="cont">
                                    <?php
                                        $content_post = get_post($id);
                                        $content = $content_post->post_content;
                                        $content = apply_filters('the_content', $content);
                                        $content = str_replace(']]>', ']]&gt;', $content);
                                        echo $content;
                                    ?>
                                </div></a>
                                <div class="btn_link">
                                    <a href="#">Visit The Site</a>
                                </div>
                            </div>
                            <div class="media_postImg">
                                <a href="#"><?php echo get_the_post_thumbnail($id); ?></a>
                            </div>

                    </div>
        <?php } ?>
    </div>
    <div data-postType="media" data-taxonomy="media-category" data-cat-id="16" class="btn_more"><p>more</p></div>
</div>
<div id="project" class="group5">
    <div class="group3Title">
        <div class="left_line3"></div>
        <div class="group3_title"><p>Educational Projects</p></div>
        <div class="right_line3"></div>
    </div>
    <div class="edProject">
         <?php
            $args = array(
                'post_type'        =>'project',
                'posts_per_page'   => 3,
                'order'            =>'ASC',
                'suppress_filters' => 0
            );
            $posts = query_posts( $args );
            foreach($posts as $item){
                $id = $item->ID
                ?>
        <div class="edProject_post">
            <div class="edProjectImg">
                <a href="<?php echo get_the_permalink($id); ?>"><?php echo get_the_post_thumbnail($id); ?></a>
            </div>
            <div class="edProject_content">
                <a href="<?php echo get_the_permalink($id); ?>">
                    <div class="edProject_title">
                        <?php echo get_the_title($id);?>
                    </div>
                    <div class="edProject_excerpt">
                        <?php echo($item->post_excerpt); ?>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
    <div data-postType='project' data-taxonomy="project-category" data-cat-id="17" class="btn_more"><p>more</p></div>

</div>
<div id="awards" class="group6">
    <div class="group3Title">
        <div class="left_line3"></div>
        <div class="group3_title"><p>Awards</p></div>
        <div class="right_line3"></div>
    </div>
   <div class="awards-gallery">
       <div class="awardsImg_div">
           <?php echo photo_gallery(6); ?>
   <!--         <div class="awardsImg"><img src="<?php bloginfo('template_url'); ?>/images/gnahat3.jpg"/></div>
            <div class="awardsImg"><img src="<?php bloginfo('template_url'); ?>/images/gnahat2.jpg"/></div>
            <div class="awardsImg"><img src="<?php bloginfo('template_url'); ?>/images/gnahat3.jpg"/></div>
            <div class="awardsImg"><img src="<?php bloginfo('template_url'); ?>/images/gnahat4.jpg"/></div>-->
        </div>

    </div>


</div>



<?php get_footer(); ?>