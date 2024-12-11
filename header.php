<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title>The Girls Portfolio</title>
    <!-- Favicons displayed based on prefered color scheme mode-->
    <link
      rel="icon"
      type="image/ico"
      href="imgs/favicon-black.ico"
      media="(prefers-color-scheme: light)" />
    <link
      rel="icon"
      type="image/ico"
      href="imgs/favicon-white.ico"
      media="(prefers-color-scheme: dark)" />
    <link
      href="styles.css"
      rel="stylesheet" />
    <!--stylesheet linked-->
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com" />
    <!--fonts linked-->
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet" />
    <!--icons set link-->
    <script
      src="https://kit.fontawesome.com/87c69e0790.js"
      crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
      <nav>
        <!--navigation menu, on the left (mobile on top)-->
        <!--navigation links-->
        <input
          type="checkbox"
          id="toggle" />
        <!--menu icon for mobile-->
        <label
          for="toggle"
          class="menu-icons">
          <svg
            class="hamburger"
            aria-controls="menu"
            aria-expanded="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            height="32"
            width="32">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg
            class="close-icon"
            aria-controls="menu"
            aria-expanded="false"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            height="32"
            width="32">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18 18 6M6 6l12 12" />
          </svg>
        </label>
        <ul
          id="menu"
          class="menu">
          <li>
            <a href="#team"
              ><i
                class="fa-regular fa-circle-user"
                style="font-size: 30px; color: rgb(37, 56, 41)"></i
            ></a>
          </li>
          <li>
            <a href="#portfolio"
              ><i
                class="fa-regular fa-image"
                style="font-size: 30px; color: rgb(37, 56, 41)"></i
            ></a>
          </li>
          <li>
            <a href="#contact"
              ><i
                class="fa-regular fa-address-card"
                style="font-size: 30px; color: rgb(37, 56, 41)"></i
            ></a>
          </li>
        </ul>
      </nav>
  </header>