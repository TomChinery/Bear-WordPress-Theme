<?php
/** Header file */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<?php

  if (has_nav_menu('primary')) :
    wp_nav_menu(array( 'theme_location' => 'primary' ));
  endif;

?>
