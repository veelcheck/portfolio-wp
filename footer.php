	<?php wp_footer(); ?>
      <footer>
        <p>&copy;</p>
        <?php
          wp_nav_menu( array(
            'menu' => 'footer',
            'menu_class'      => 'footer',  // CSS class for styling the menu
            'container'       => false,   // Avoid adding extra <div> around the menu
          ));
        ?>
      </footer>
    </main>
  </body>
</html>