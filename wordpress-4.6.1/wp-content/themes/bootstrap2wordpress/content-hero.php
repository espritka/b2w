<?php
//Custom Fields
$prelaunch_price  = get_post_meta( 7, 'prelaunch_price', true );
$launch_price     = get_post_meta( 7, 'launch_price', true );
$final_price      = get_post_meta( 7, 'final_price', true );
$course_url       = get_post_meta( 7, 'course_url', true );
$button_text      = get_post_meta( 7, 'button_text', true );
$optin_text       = get_post_meta( 7, 'optin_text', true );
$optin_button_text = get_post_meta( 7, 'optin_button_text', true );
?>

<!-- HERO -->
<section id="hero" data-type="background" data-speed="5"><!-- hero bedzie na cala strone, bedzie full-width -->
  <article>
    <div class="container clearfix"><!-- container = zawsze ma fixed-width czesto sie go uzywa, tam gdzie mamy strone full-width i chcemy cos miec na srodku zeby bylo responsywne, bo domyslnie ustawia sie na srodku strony -->
      <div class="row">
        <div class="col-sm-5">
          <img class="logo" src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress">
        </div><!-- col-sm-5 -->
        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name'); ?></h1>
          <p class="lead"><?php bloginfo('description'); ?></p>

          <div id="price-timeline">
            <div class="price active">
              <h4>Pre-Launch Price <small>End soon!</small></h4>
              <span><?php echo $prelaunch_price; ?></span>
            </div><!-- price -->
            <div class="price">
              <h4>Launch Price <small>Coming soon!</small></h4>
              <span><?php echo $launch_price; ?></span>
            </div><!-- price -->
            <div class="price ">
              <h4>Final Price <small>Coming soon!</small></h4>
              <span><?php echo $final_price; ?></span>
            </div><!-- price -->
          </div><!-- price-timeline -->
          <p>
            <a class="btn btn-lg btn-danger"href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?></a>
          </p>
        </div><!-- col 7 -->
      </div><!-- row -->
    </div><!-- container -->
  </article>
</section><!-- hero -->
