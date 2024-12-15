	<?php wp_footer(); ?>
	<footer>
        <!-- <ul class="footer"> -->
          <p>&copy;</p>
          <?php
        wp_nav_menu( array(
            'menu' => 'footer',
            'menu_class'      => 'footer',  // CSS class for styling the menu
            'container'       => false,   // Avoid adding extra <div> around the menu
        ) );
        ?>
          <!-- <li>
            <a
              href="https://github.com/Hania846"
              target="_blank"
              >Hania</a
            >
          </li>
          <li>
            <a
              href="https://github.com/charldll"
              target="_blank"
              >Inga</a
            >
          </li>
          <li>
            <a
              href="https://github.com/veelcheck"
              target="_blank"
              >Agnieszka</a
            >
          </li> -->
        <!-- </ul> -->
      </footer>
    </main>
  </body>
</html>