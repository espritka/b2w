<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<?php wp_footer(); ?>

<!-- SIGN UP -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skilss to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div> <!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- signup -->

<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
		</div> <!-- end div -->
		<div class="col-sm-6">
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'footer',
					'container' 			=> 'nav',
					'menu_class'		 	=> 'list-unstyled list-inline'
				) );
			?>
		</div> <!-- end col -->
		<div class="col-sm-3">
			<p class="pull-right">&copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
		</div> <!-- end col -->
	</div><!-- container -->
</footer>

<!-- MODAL -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					<i class="fa fa-envelope"> Subscribe to our Mailing List</i>
				</h4>
			</div><!-- modal-header -->
			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em>
				</p>
				<form action="" class="form-inline" role="form">
					<div class="form-group">
						<label for="subscribe-name" class="sr-only">Your first name</label>
						<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
					</div>
				</form>
				<form action="" class="form-inline" role="form">
					<div class="form-group">
						<label for="subscribe-email" class="sr-only">and Your email</label>
						<input type="text" class="form-control" id="subscribe-email" placeholder="and Your email">
					</div>
					<input type="submit" class="btn btn-danger" value="Subscribe!">
				</form>
				<hr>
				<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. You may unsubscribe at any time.</small></p>
			</div><!-- modal body -->
		</div><!-- modal content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
