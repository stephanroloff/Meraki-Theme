<?php
get_header();
?>

<h2>I'm the Blog Page</h2>

<?php
 
while(have_posts()){
   the_post(); ?>
   <div><a href="<?php the_permalink()?>"><?php the_title(); ?></a></div>
   <div><?php the_content(); ?></div>
   <hr>
<?php
}
 
get_footer();