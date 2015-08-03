<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post clearfix"); ?>>

	<h1 class="post-title"><?php if (is_category() || !is_home()) { ?>
	  <a href="<?php the_permalink()?>"><?php } ?>
        <?php the_title(); ?>
	  <?php if (is_category() || is_home()) { ?></a><?php } ?>
	</h1>

	<?php
	  the_content();
	?>

</article>
<!-- /.post -->
