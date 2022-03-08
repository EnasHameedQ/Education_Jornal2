// Check if function exist.
if ( ! function_exists( 'sb_the_related_posts_thumbnail' ) ) {

 /**
  * sb_the_related_posts_thumbnail Display related posts with thumbnail.
  *
  * @author Said El Bakkali
  *
  * @global object $post
  *
  * @param  bool $echo
  *
  * @return string $output
  */
 function sb_the_related_posts_thumbnail( $echo = true ) {

 if ( is_singular( 'post' ) ) {

 $output = null;
 global $post;
 $tags = wp_get_post_tags( $post->ID );
 if ( $tags ) {
 foreach ( $tags as $tag ) {
 $tagID[] = $tag->term_id;
 }

 // If is mobil show 3 posts is not show 5.
 $poststoshow = wp_is_mobile() ? 4 : 6;

 // WP_Query argements.
 $args = array(
 'posts_per_page'      => $poststoshow,
 'no_found_rows'       => true,
 'tag__in'             => $tagID,
 'post__not_in'        => array( $post->ID ),
 'ignore_sticky_posts' => true,
 'orderby'             => 'rand',
 );

 // Start loop.
 $tags_query = new WP_Query( $args );
 if ( $tags_query->have_posts() ) {
   $output .= '<div class="sb-related-posts-container">
   <h3 class="sb-related-posts-header">' . __( 'Other posts that you can interested...', 'basata-related-post' ) . '</h3>
   <ul class=sb-related-posts-wrap>';
 while ( $tags_query->have_posts() ) {
   $tags_query->the_post();

   $the_permalink = esc_url( get_the_permalink() );
   $the_title     = esc_attr( get_the_title() );

   $output .= '<li class="sb-relatd-post-item">' . sprintf( '<a rel="bookmark" href="%s" title="%s">', $the_permalink, $the_title );
   $output .= has_post_thumbnail() ? get_the_post_thumbnail( null, 'thumbnail', array( 'class' => 'sb-related-post-thumbnail' ) ) : get_the_post_thumbnail( '3698', 'thumbnail', array( 'class' => 'sb-related-post-thumbnail' ) );
   $output .= $the_title;
   $output .= '</a></li>';
 }
 $output .= '</ul></div>';
 }
 wp_reset_postdata();
 } // End if $tags.
 if ( $echo ) {
 echo $output;
 } else {
 return $output;
 }
 } // End if is_singular('post').
 }

 // Create a shortcode to display related posts anywhere on the website.
 add_shortcode( 'sb_related_posts_thumbnail', 'sb_the_related_posts_thumbnail' );
}
