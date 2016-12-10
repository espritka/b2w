<?php
$video_feature_title = get_field('video_feature_title');
$video_feature_link = get_field('video_feature_link');
?>

<!-- VIDEO FEATURES -->
<section id="featurette" data-type="background" data-speed="5">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $video_feature_title; ?></h2>
        <iframe width="100%" height="415" src="<?php echo $video_feature_link; ?>" frameborder="0" allowfullscreen></iframe>
      </div> <!-- end div -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- featurette -->
