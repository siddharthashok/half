<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Half
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'half' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'half' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'half' ), 'half', '<a href="http://sidd.in" rel="designer">Siddharth Ashok</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script>
	$(document).foundation();
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script>
			(function() {

				function SVGMenu( el, options ) {
					this.el = el;
					this.init();
				}

				SVGMenu.prototype.init = function() {
					this.trigger = this.el.querySelector( 'button.menu__handle' );
					this.shapeEl = this.el.querySelector( 'div.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						open : this.shapeEl.getAttribute( 'data-morph-open' ),
						close : this.shapeEl.getAttribute( 'data-morph-close' )
					};

					this.isOpen = false;

					this.initEvents();
				};

				SVGMenu.prototype.initEvents = function() {
					this.trigger.addEventListener( 'click', this.toggle.bind(this) );
				};

				SVGMenu.prototype.toggle = function() {
					var self = this;

					if( this.isOpen ) {
						classie.remove( self.el, 'menu--anim' );
						setTimeout( function() { classie.remove( self.el, 'menu--open' );	}, 250 );

						this.pathEl.stop().animate( { 'path' : this.paths.close }, 350, mina.easeout, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
						} );
					}
					else {
						classie.add( self.el, 'menu--anim' );
						setTimeout( function() { classie.add( self.el, 'menu--open' );	}, 250 );

						this.pathEl.stop().animate( { 'path' : this.paths.open }, 350, mina.backin, function() {
							self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
						} );
					}
					this.isOpen = !this.isOpen;
				};

				new SVGMenu( document.getElementById( 'menu' ) );

			})();
		</script>

</body>
</html>
