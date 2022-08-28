<?php
 
get_header();

?>
<section class="full-width">
   <div class="container-global-wide">
      <h2>I'm the Front Page</h2>
      <h2>Miraki Theme</h2>
      
      <p>Icons from Font awesome!</p>
      <i class="fa-solid fa-cubes"></i>
      <i class="fa-solid fa-person-biking"></i>
      <?php get_template_part('template-parts/content', 'test'); ?>
      <?php do_action("action_test"); ?>
   </div>
</section>

<?php
 
while(have_posts()){
   the_post(); ?>
   <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
   <?php the_content(); ?>
   <?php
}
get_footer();