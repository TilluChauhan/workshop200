<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    //print_r($post);

    $attachment_id1 = get_field('image1');
    $attachment_id2 = get_field('image2');


?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="vhj pol">
              <img src="<?php echo $attachment_id1['url']; ?>" alt="" />  
            </div>  
          <div class="zvb" >
            <?php
            echo do_shortcode('[smartslider3 slider="1"]');
            ?>
            </div>
              
              <div class="vhj pol"><img src="<?php echo $attachment_id2['url']; ?>" alt="" /></div>
          </div>
        </div>
      </div>
    </section>
    <section class="rh">
      <div class="container">
        <div class="row">
        <div class="col-md-12 ">
          <div class="ankit">
            <p><?php the_content(); ?></p>
          </div>
        </div>
      </div>
  </div>
    </section>
<?php
  }
}
?>