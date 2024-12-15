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
          <h2>Wanna get in touch?</h2>
          <form
            id="form"
            action="submit"
            method="post">
            <div class="contact-icon-wrapper">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="50"
                height="50"
                viewBox="0 0 50 50"
                fill="rgb(45, 63, 102)">
                <path
                  d="M 25 3 C 12.861562 3 3 12.861562 3 25 C 3 36.019135 11.127533 45.138355 21.712891 46.728516 L 22.861328 46.902344 L 22.861328 29.566406 L 17.664062 29.566406 L 17.664062 26.046875 L 22.861328 26.046875 L 22.861328 21.373047 C 22.861328 18.494965 23.551973 16.599417 24.695312 15.410156 C 25.838652 14.220896 27.528004 13.621094 29.878906 13.621094 C 31.758714 13.621094 32.490022 13.734993 33.185547 13.820312 L 33.185547 16.701172 L 30.738281 16.701172 C 29.349697 16.701172 28.210449 17.475903 27.619141 18.507812 C 27.027832 19.539724 26.84375 20.771816 26.84375 22.027344 L 26.84375 26.044922 L 32.966797 26.044922 L 32.421875 29.564453 L 26.84375 29.564453 L 26.84375 46.929688 L 27.978516 46.775391 C 38.71434 45.319366 47 36.126845 47 25 C 47 12.861562 37.138438 3 25 3 z M 25 5 C 36.057562 5 45 13.942438 45 25 C 45 34.729791 38.035799 42.731796 28.84375 44.533203 L 28.84375 31.564453 L 34.136719 31.564453 L 35.298828 24.044922 L 28.84375 24.044922 L 28.84375 22.027344 C 28.84375 20.989871 29.033574 20.060293 29.353516 19.501953 C 29.673457 18.943614 29.981865 18.701172 30.738281 18.701172 L 35.185547 18.701172 L 35.185547 12.009766 L 34.318359 11.892578 C 33.718567 11.811418 32.349197 11.621094 29.878906 11.621094 C 27.175808 11.621094 24.855567 12.357448 23.253906 14.023438 C 21.652246 15.689426 20.861328 18.170128 20.861328 21.373047 L 20.861328 24.046875 L 15.664062 24.046875 L 15.664062 31.566406 L 20.861328 31.566406 L 20.861328 44.470703 C 11.816995 42.554813 5 34.624447 5 25 C 5 13.942438 13.942438 5 25 5 z"></path>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="50"
                height="50"
                viewBox="0 0 50 50"
                fill="rgb(45, 63, 102)">
                <path
                  d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="50"
                height="50"
                viewBox="0 0 50 50"
                fill="rgb(45, 63, 102)">
                <path
                  d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z"></path>
              </svg>
            </div>
            <div class="form-input-container">
              <div class="input-wrapper">
                <label for="topic">Choose your topic:</label>
                <select
                  name="topic"
                  id="topic"
                  required>
                  <option
                    value=""
                    disabled
                    selected>
                    -- Please choose an option --
                  </option>
                  <option value="say-hi">I want to say hi</option>
                  <option value="ask-question">I have a question</option>
                  <option value="hire-you">I want to hire you</option>
                </select>
              </div>
              <div class="input-wrapper">
                <label for="user-email">Email</label>
                <input
                  type="email"
                  id="user-email"
                  placeholder="Type your email"
                  required />
              </div>
              <div class="input-wrapper">
                <label for="message">Write your message</label>
                <textarea
                  id="message"
                  placeholder="Type your message here..."
                  required></textarea>
              </div>
              <div class="send-button-wrapper">
                <input
                  class="send-button"
                  type="submit"
                  value="Send" />
              </div>
            </div>
          </form>
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