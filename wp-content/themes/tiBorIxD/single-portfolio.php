<?php get_header(); ?>
<section class="entry-content">
    
    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <div class="projectMeta">
                    
                        <div class="tiSlide">
                            
                            <div class="content">
                                <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
                                
                                <br/>                            
                                
                                <?php edit_post_link('<i class="fa fa-pencil"></i>'); ?>
                                <div class="scrollable">
                                    <p><?php the_content(); ?></p>                            
                                    
                                    <br/>                            
                                    
                                    <h4>Type: <?php the_field('project_type'); ?></h4>
                                    <h4>Skills: <?php the_field('skills'); ?></h4>
                                    <h4>Customer: <?php the_field('klant'); ?></h4>
                                    <h4>Date: 
                                        <?php $date = DateTime::createFromFormat('Ymd', get_field('jaar'));
                                        echo $date->format('d-m-Y'); ?></h4>
                                    
                                    <br/>
                                    
                                    <!--<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>-->
                                </div>
                                    
                            </div>
                            
                            <img src="<?php the_field('slide_1'); ?>" alt="caption" width="100%" />
                            
                            <?php $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                            
                            <!-- MORE SLIDES -->
                            <?php for ($x = 2; $x <= 5; $x++) {
                                
                                $value = get_field( "slide_".$x."" );
                                
                                
                                if( $value ) {
                                    echo '<img src="'.$value.'" alt="'.$alt.'" width="100%" />';
                                } else {
                                    echo ''; 
                                }
                            }?>
                            <!-- END MORE SLIDES -->
                            
                            
                            <div class="cycle-overlay"></div>
                            <div class="cycle-pager"></div>

                            <div class="slide-control">
                                <div class="slide-prev"><i class="fa fa-angle-left easeInOut"></i></div>
                                <div class="slide-next"><i class="fa fa-angle-right easeInOut"></i></div>
                            </div>
                            
                        </div>
                    </div>	
                </header>    
            
            </article>

            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>

        <?php endwhile; endif; ?>
        
        <aside class="aside">
            <?php get_template_part( 'nav', 'below-single' ); ?>
        </aside>
        
    </section>
    
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>