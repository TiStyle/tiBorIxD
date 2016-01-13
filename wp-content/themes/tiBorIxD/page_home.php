<?php
/**
 * Template Name: Home Full Width Page
 *
 * @package WordPress
 * @subpackage tiBorIxD
 * @since tiBorIxD 1.0
 */
get_header(); ?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="content" role="main">

        <header class="header">
            <!--<h1 class="entry-title"><?php the_title(); ?></h1>-->
        </header>

        <section class="entry-content">
            <?php edit_post_link('<i class="fa fa-pencil"></i>'); ?>
                   
            <!--<?php the_content(); ?>-->
            
            <?php $args = array(
					'posts_per_page'   => 20,
					'offset'           => 0,
					'category'         => '',
					'category_name'    => '',
					'orderby'          => 'date_create',
					'order'            => 'ASC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'portfolio',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
			 
				$catquery = new WP_Query( $args);
					while($catquery->have_posts()) : $catquery->the_post();
				?>
                            <section class="item easeInOut">
                                <div class="image easeInOut">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php } else { ?>
                                        <?php echo '<i class="fa fa-camera"></i>'; ?>
                                    <?php } ?>
                                </div>
                                
                                <div class="content">
                                    <h3 class="itemTitle"><?php the_title(); ?></h3>
                                    <?php truncate_post(220); ?>
                                    <a href="<?php the_permalink() ?>"><i class="fa fa-link easeInOut"></i></a>
                                </div>
                            </section>
                <?php endwhile; ?>
        </section>

    </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>