<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

			
<!-- on the left -->
			<div class="footer-contact footer-columns">
				<h3>Contact Us</h3>
				<p> Headmaster: <?php echo get_field('headmaster','options') ; ?> </p>
				<p> Address: <?php echo get_field('address','options') ; ?> </p>
				<a  class="" href="tel:07814343602"> T: <?php echo get_field('phone_number','options') ; ?> </a>
				<p> Email: <?php echo get_field('email_us','options') ; ?> </p>

				<h3><a href="<?php	echo get_field('get_directions','options')['url']; ?>"> </a>
				</h3>
				
			</div>	
							<!--Middle bit  -->

			<div class="footer-columns padding">			
				<h3 class="footer-contact"> Quick Links </h3>
				<nav role="navigation"> 
					<!-- What is role? -->
					<?php wp_nav_menu(array(
					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
					'menu_class' => 'nav footer-nav ',            // adding custom nav class
					'theme_location' => 'footer-links',             // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
				</nav>
			
				<!-- end of Footer-columns -->
			</div>
			<!-- on the right -->
			
			<div class="footer-columns">
				<h3>Map</h3>
				
				<img src=" <?php echo get_field('footer_map_img','options'); ?>" alt="google map">	   
			<!-- make a custom field for map-footer -->
				<a class= "footer-map-directions more-padding" href = "<?php echo get_field('get_directions','options')['url']; ?>"> 
					<?php echo get_field('get_directions','options')['title'];
					 ?></a>
			</div>
		</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		
	</body>
</html> <!-- end of site. what a ride! -->
