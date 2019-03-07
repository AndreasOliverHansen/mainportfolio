<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fino
 */
 get_header(); 
if(get_header_image()){
    $fino_overlay = "banner";
 }
 else{
    $fino_overlay = "nobanner";
 }
?>

<section class="<?php echo esc_attr($fino_overlay);?>" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="<?php echo esc_attr($fino_overlay);?>-heading">
                       <?php if (is_home() || is_front_page()) { ?>						
							<h2><?php echo esc_html__('Blog', 'fino') ?></h2>
						<?php } else { ?>
							<h2><?php wp_title(''); ?></h2>							
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>


 <div class="bg-w sp-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row blog-isotope">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <article class="col-md-3 col-lg-3 col-sm-6 blog-wrap blog-iso-item">
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                   <?php get_template_part('content-parts/content', get_post_format()); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    
                    <?php else : 
                  get_template_part( 'content-parts/content', 'none' );
                endif; ?>
                </div>
				<div class="col-md-12">
					<div class="fino-pagination">
					   <?php the_posts_pagination(
								array(
								'prev_text' => esc_html__('&lt;','fino'),
								'next_text' => esc_html__('&gt;','fino')
								)
							); ?>
					</div>
				</div>
            </div>
           
        </div>
    </div>
</div>

<?php get_footer(); ?>