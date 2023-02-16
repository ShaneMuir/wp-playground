<?php 
// Responsive Images - works in conjunction with /src/js/modules/lazy-load-images.js

/* Standard image, example usage with image array
<img <?php responsive_image($theimage['id'], 'medium', '460px'); ?> alt="<?php echo $theimage['alt']; ?>" /> 
*/
function responsive_image( $image_id, $image_size, $max_width ) {
    if ($image_id != '') {
        $image_src = wp_get_attachment_image_url( $image_id, $image_size );
        $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

        echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes=(max-width: '.$max_width.') 100vw, '.$max_width.'"';
    }
}

/* Lazy loading image 
<img <?php lazy_responsive_image($image1['id'], 'medium', '460px'); ?> alt="<?php echo $image1['alt']; ?>" /> 
*/
function lazy_responsive_image( $image_id, $image_size, $max_width ) {
    if ($image_id != '') {
        $image_src = wp_get_attachment_image_url( $image_id, $image_size );
        $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

        echo 'class="lazy" src="'.get_template_directory_uri().'/dist/assets/images/placeholder.png" data-src="'.$image_src.'" data-srcset="'.$image_srcset.'" data-sizes=(max-width: '.$max_width.') 100vw, '.$max_width.'"';
    }
}
?>