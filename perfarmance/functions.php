
<?php
if ( function_exists('register_sidebars') )
    register_sidebars(3);
/* //////////////////////////////////add thumbnails///////////////////////////////////// */
add_theme_support('post-thumbnails');
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );



//------------CATEGORY  Performance-----------


register_post_type('performance',
    array(
        'labels' => array(
            'name' => __('Performance item', 'doc'),
            'singular_name' => __('Performance', 'doc'),
            'menu_name' => __('Performance', 'doc'),
            'add_new' => __('Add New Performance Item', 'doc'),
            'add_new_item' => __('Add New Performance Item', 'doc'),
            'edit_item' => __('Edit Performance item', 'doc'),
            'new_item' => __('New Performance Item', 'doc'),
            'view_item' => __('View Performance item', 'doc'),
            'search_items' => __('Search Performance Items', 'doc'),
            'not_found' => __('No Performance item found', 'doc'),
            'not_found_in_trash' => __('No About Performance found in Trash', 'doc'),

        ),
        'public' => true,
        'rewrite' => array('slug' => 'performance', 'with_front' => true),
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        //'menu_icon' => '/wp-content/themes/doc/admin/images/icons/faculty.png'
    ));
register_taxonomy('performance-category',
    array('performance'),
    array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Performances Categories', 'doc'),
            'singular_name' => __('Performances Category', 'doc'),
            'search_items' => __('Search Performances Category', 'doc'),
            'all_items' => __('All Performances Categories', 'doc'),
            'parent_item' => __('Parent Performances Category', 'doc'),
            'parent_item_colon' => __('Parent Performances Category:', 'doc'),
            'edit_item' => __('Edit Performances Category', 'doc'),
            'update_item' => __('Refresh Performances Category', 'doc'),
            'add_new_item' => __('Add new Performances Category', 'doc'),
            'new_item_name' => __('New Performances Category', 'doc')
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'performance-category' ),
    )
);
//----------------------------CATEGORY   Gallery-------------------------

register_post_type('gallery',
    array(
        'labels' => array(
            'name' => __('Gallery item', 'doc'),
            'singular_name' => __('Gallery', 'doc'),
            'menu_name' => __('Gallery', 'doc'),
            'add_new' => __('Add New Gallery Item', 'doc'),
            'add_new_item' => __('Add New Gallery Item', 'doc'),
            'edit_item' => __('Edit Gallery item', 'doc'),
            'new_item' => __('New Gallery Item', 'doc'),
            'view_item' => __('View Gallery item', 'doc'),
            'search_items' => __('Search Gallery Items', 'doc'),
            'not_found' => __('No Gallery item found', 'doc'),
            'not_found_in_trash' => __('No About Gallery found in Trash', 'doc'),

        ),
        'public' => true,
        'rewrite' => array('slug' => 'gallery', 'with_front' => true),
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        //'menu_icon' => '/wp-content/themes/doc/admin/images/icons/faculty.png'
    ));
register_taxonomy('gallery-category',
    array('gallery'),
    array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Gallerys Categories', 'doc'),
            'singular_name' => __('Gallerys Category', 'doc'),
            'search_items' => __('Search Gallerys Category', 'doc'),
            'all_items' => __('All Gallerys Categories', 'doc'),
            'parent_item' => __('Parent Gallerys Category', 'doc'),
            'parent_item_colon' => __('Parent Gallerys Category:', 'doc'),
            'edit_item' => __('Edit Gallerys Category', 'doc'),
            'update_item' => __('Refresh Gallerys Category', 'doc'),
            'add_new_item' => __('Add new Gallerys Category', 'doc'),
            'new_item_name' => __('New Gallerys Category', 'doc')
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'gallery-category' ),
    )
);
//------------Category Media-------------

register_post_type('media',
    array(
        'labels' => array(
            'name' => __('Media item', 'doc'),
            'singular_name' => __('Media', 'doc'),
            'menu_name' => __('Media', 'doc'),
            'add_new' => __('Add New Media Item', 'doc'),
            'add_new_item' => __('Add New Media Item', 'doc'),
            'edit_item' => __('Edit Media item', 'doc'),
            'new_item' => __('New Media Item', 'doc'),
            'view_item' => __('View Media item', 'doc'),
            'search_items' => __('Search Media Items', 'doc'),
            'not_found' => __('No Media item found', 'doc'),
            'not_found_in_trash' => __('No About Media found in Trash', 'doc'),

        ),
        'public' => true,
        'rewrite' => array('slug' => 'media', 'with_front' => true),
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        //'menu_icon' => '/wp-content/themes/doc/admin/images/icons/faculty.png'
    ));
register_taxonomy('media-category',
    array('media'),
    array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Medias Categories', 'doc'),
            'singular_name' => __('Medias Category', 'doc'),
            'search_items' => __('Search Medias Category', 'doc'),
            'all_items' => __('All Medias Categories', 'doc'),
            'parent_item' => __('Parent Medias Category', 'doc'),
            'parent_item_colon' => __('Parent Medias Category:', 'doc'),
            'edit_item' => __('Edit Medias Category', 'doc'),
            'update_item' => __('Refresh Medias Category', 'doc'),
            'add_new_item' => __('Add new Medias Category', 'doc'),
            'new_item_name' => __('New Medias Category', 'doc')
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'media-category' ),
    )
);




/*ajax test*/
function test(){
    $post_count = $_POST['post_count'];
    $post_type = $_POST['post_type'];
    $tax = $_POST['taxonomy'];
    $cat = $_POST['category'];

$args = array(
    'post_type'        =>$post_type,
    'posts_per_page'   => 3,
    'order'            =>'ASC',
    'suppress_filters' => 0,
    'tax_query' => array(
        array(
            'taxonomy' => $tax,
            'field' => 'id',
            'terms' => $cat
        )),
    'post_status'       => 'publish',
    'offset'            => $post_count
);
$posts = query_posts( $args );
foreach($posts as $item) {
    $id = $item->ID;
    global $cfs;
    if($post_type == 'performance'){
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
        <?php
    }elseif($post_type == 'media'){
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
        <?php
    }elseif($post_type == 'project'){
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
        <?php
    }

 }



    echo($post_count);
    exit;
}
add_action('wp_ajax_nopriv_test', 'test');
add_action('wp_ajax_test', 'test');


//--------------Educational Projects----------------


register_post_type('project',
    array(
        'labels' => array(
            'name' => __('Project item', 'doc'),
            'singular_name' => __('Project', 'doc'),
            'menu_name' => __('Project', 'doc'),
            'add_new' => __('Add New Project Item', 'doc'),
            'add_new_item' => __('Add New Project Item', 'doc'),
            'edit_item' => __('Edit Project item', 'doc'),
            'new_item' => __('New Project Item', 'doc'),
            'view_item' => __('View Project item', 'doc'),
            'search_items' => __('Search Project Items', 'doc'),
            'not_found' => __('No Project item found', 'doc'),
            'not_found_in_trash' => __('No About Project found in Trash', 'doc'),

        ),
        'public' => true,
        'rewrite' => array('slug' => 'project', 'with_front' => true),
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        //'menu_icon' => '/wp-content/themes/doc/admin/images/icons/faculty.png'
    ));
register_taxonomy('project-category',
    array('project'),
    array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Projects Categories', 'doc'),
            'singular_name' => __('Projects Category', 'doc'),
            'search_items' => __('Search Projects Category', 'doc'),
            'all_items' => __('All Projects Categories', 'doc'),
            'parent_item' => __('Parent Projects Category', 'doc'),
            'parent_item_colon' => __('Parent Projects Category:', 'doc'),
            'edit_item' => __('Edit Projects Category', 'doc'),
            'update_item' => __('Refresh Projects Category', 'doc'),
            'add_new_item' => __('Add new Projects Category', 'doc'),
            'new_item_name' => __('New Projects Category', 'doc')
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'project-category' ),
    )
);




?>

 <?php/**$cont = '';
$cont .= '<div class="group1_bottom_post">';
    $cont .=  '<div class="group1_bottom_postTitle">';
        $cont .= get_the_title($id);
        $content_post = get_post($id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        $cont .=   '</div>';
    $cont .=  '<div class="group1_bottom_postImg">';
        $cont .= get_the_post_thumbnail($id);
        $cont .= '</div>';
    $cont .= '</div>';

* */?>