<?php
/*
 * Template Name: Home
 * Description: A custom template for the homepage.
 */
?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
    <main>
      <!--section with general info about us-->
      <h1 id="home"><?php echo get_field('page_h1') ?></h1>
      <section id="team">
        <div class="section-aboutus">
          <div class="about-card">
					  <?php echo wp_get_attachment_image( get_field('team:photo_1'), 'full', false, ["class" => "photo-with-tape"]);  ?>
            <div>
              <h2><?php echo get_field('team:header_1') ?></h2>
              <p>
                <?php echo get_field('team:des_1') ?>
              </p>
            </div>
          </div>
          <div class="about-card flex-reverse photo-to-right">
					<?php echo wp_get_attachment_image( get_field('team:photo_2'), 'full', false, ["class" => "photo-with-tape"]);  ?>
            <div>
            <h2><?php echo get_field('team:header_2') ?></h2>
              <p>
              <?php echo get_field('team:des_2') ?>
              </p>
            </div>
          </div>
          <div class="about-card">
					<?php echo wp_get_attachment_image( get_field('team:photo_3'), 'full', false, ["class" => "photo-with-tape"]);  ?>
            <div>
            <h2><?php echo get_field('team:header_3') ?></h2>
              <p>
              <?php echo get_field('team:des_3') ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--section with actual portfolio-->
      <section id="portfolio">
        <div class="section-projects">
          <div class="gallery">
            <?php echo wp_get_attachment_image(74, 'full', false, array( "class" => "portfolio", "alt" => "Girl" ) );  ?>
            <?php echo wp_get_attachment_image(73, 'full', false, array( "class" => "portfolio", "alt" => "Citrus" ) );  ?>
            <?php echo wp_get_attachment_image(75, 'full', false, array( "class" => "hand", "alt" => "Citrus" ) );  ?>
            <?php echo wp_get_attachment_image(79, 'full', false, array( "class" => "hand", "alt" => "Lamp" ) );  ?>
            <?php echo wp_get_attachment_image(82, 'full', false, array( "class" => "hand", "alt" => "Mountain" ) );  ?>
            <?php echo wp_get_attachment_image(77, 'full', false, array( "class" => "hand", "alt" => "Hersons" ) );  ?>
            <?php echo wp_get_attachment_image(84, 'full', false, array( "class" => "hand", "alt" => "Leaves" ) );  ?>
            <?php echo wp_get_attachment_image(81, 'full', false, array( "class" => "hand", "alt" => "Moon" ) );  ?>
            <?php echo wp_get_attachment_image(85, 'full', false, array( "class" => "hand", "alt" => "Woman" ) );  ?>
          </div>
        </div>
      </section>
      <!--section with contact info/form-->
      <section id="contact">
        <div class="section-contacts">
          <h2><?php echo get_field('contact:header_1') ?></h2>
          <!-- <?php echo do_shortcode( '[contact-form-7 id="b355487" title="Formularz 1"]') ?> -->
          <?php if(pll_current_language() === 'pl') {?>
            <?php echo do_shortcode( '[contact-form-7 id="6d3bfd9" title="Formularz PL"]') ?>
          <?php } else {?> <?php echo do_shortcode( '[contact-form-7 id="b355487" title="Formularz 1"]'); ?>
            <?php } ?>
        </div>
      </section>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>