<?php
/**
 * Template Name: Contact Full Width Page
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
                   
            <div class="col50">
                
                <h2>Got questions? Give me a call!</h2>
                
                <?php the_content(); ?>
                
                <div class="hcenter contactInfo">
                    <h4><i class="fa fa-user"></i> <?php the_field('name'); ?></h4>
                    <h4><i class="fa fa-envelope"></i> <a href="mailto:mail@ti-bor.nl" class="easeInOut"> <?php the_field('e-mail'); ?> </a></h4>
                    <h4><i class="fa fa-phone"></i> <?php the_field('phone'); ?></h4>
                </div>
            </div>
            
            
            <div class="col50">            
            
                <div id="contact-form">
                    <form id="contact" action="<?php echo get_template_directory_uri(); ?>/tiborIxD-mailing.php" method="post">
                        <h2>Don't feel like calling? Send me a mail!</h2>
                        <fieldset>
                            <!--<label for="name">Naam (verplicht)</label><br>-->
                            <input name="name" required="" type="text" placeholder="(*required) Firstname Lastname"><br>
                            <!--<label for="mailtje">E-mail (verplicht)</label><br>-->
                            <input name="mailtje" required="" type="email" placeholder="(*required) email@mail.com"><br>
                            <!--<label for="phone">Telefoon</label><br>-->
                            <input name="phone" type="text" placeholder="Phonenumber"><br>
                            <!--<label for="website">Website</label><br>-->
                            <input name="url" type="url" placeholder="www.yoursite.com"><br>
                            <!--<label for="message">Uw vraag (verplicht)</label><br>-->
                            <textarea name="message" required="" placeholder="(*required) Your message..."></textarea><br>
                            <input id="submit" name="submit" type="submit" value="Send">
                        </fieldset>
                    </form>
                </div>
            
            </div>
            
        </section>

    </section>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>