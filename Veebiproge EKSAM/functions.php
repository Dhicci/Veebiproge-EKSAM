<?php
    	
    add_theme_support( 'post-thumbnails' );
    function myScripts() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    add_action( 'wp_enqueue_scripts', 'myScripts' );

    function getTheFirstImage() {
        $files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');
        if($files) :
            $keys = array_reverse(array_keys($files));
            $j=0; $num = $keys[$j];
            $image=wp_get_attachment_image_url($num, 'large', false);
            echo "<img src='$image' class='pic' />";
        endif;
    }
