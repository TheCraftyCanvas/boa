BOA admired-boa Theme README


In order to have banner logo responsive with theme, header.php must be overwritten in parent theme.

  Replace line 120 with:
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span id="header-link"><img id="logo-banner" src="http://bandofartists.org/images/band-of-artists-logo.png" alt="Band of Artists" /> </span></a>

For custom head inserts, edit header.php by adding just before the closing </head> tag:      
      <?php include('wp-content/themes/admired-boa/includes-pre.php'); ?>

For custom post body script inserts, edit footer.php by adding just after closing </body> tag:
      <?php include('wp-content/themes/admired-boa/includes-post.php'); ?>
