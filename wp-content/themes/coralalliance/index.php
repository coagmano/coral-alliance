<?php get_header(); ?>
	<?php 
	/**
	 * 
	 * 
	 * if (have_posts()) : ?>
	 * 	<?php while(have_posts()) : the_post(); ?>
	 *
	 *	<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
	 *	<?php the_content(); ?>
     *
	 *	<?php endwhile; ?>
	 * <?php else: ?>
	 *
	 *	<p>Sorry, there doesn't seem to be any content for this page!</p>
	 *
	 * <?php endif; ?>
	 */
	?>

	<div class="header-bg">
	  <div class="container">
	    <header>
	      <img src="<?php bloginfo('template_directory'); ?>/assets/coral-alliance-logo.png">
	      <hr>
	      <h1>The Great Barrier Reef<br> is under threat</h1>
	      <p>Help us save this wonder of the world.</p>
	      <a href="#petition"><button class="primary">Sign the petition</button></a>
	      <p> or </p>
	      <p>
	        <a href="#more">Find out more<br>
	          <img src="<?php bloginfo('template_directory'); ?>/assets/arrow-down-gray.png"></a>
	      </p>
	      <hr>

	    </header>
	  </div>
	</div>
	<div class="container">
		<article id="more">
		<?php
			$my_id = 17;
			$post_id_17 = get_page($my_id);
			$content = $post_id_17->post_content;
			$content = apply_filters('the_content',$content);
			$content = str_replace(']]>', ']]', $content);
			$title   = $post_id_17->post_title; 
			echo '
			<h2>' . $title . '</h2>
			'. $content;
		?>
		<?php
			$my_id = 20;
			$post_id_20 = get_page($my_id);
			$content = $post_id_20->post_content;
			$content = apply_filters('the_content',$content);
			$content = str_replace(']]>', ']]', $content);
			$title   = $post_id_20->post_title; 
			echo '
			<h3>' . $title . '</h3>
			'. $content;
		?>
		</article>
		<aside>
		<?php
			$my_id = 22;
			$post_id_22 = get_page($my_id);
			$content = $post_id_22->post_content;
			$content = apply_filters('the_content',$content);
			$content = str_replace(']]>', ']]', $content);
			$title   = $post_id_22->post_title; 
			echo '
			<h2>' . $title . '</h2>
			'. $content;
		?>
		</aside></div>
		<div class="intermission nemo"></div>
		<div id="petition" class="secondary-bg">
		<?php
			$my_id = 24;
			$post_id_24 = get_page($my_id);
			$content = $post_id_24->post_content;
			$content = apply_filters('the_content',$content);
			$content = str_replace(']]>', ']]', $content);
			$title   = $post_id_24->post_title; 
			echo '
			'. $content;
		?>
		</div>
		<div class="intermission turtle"></div>
	
	<?php echo str_replace('<a', '<a class="button"', get_previous_posts_link('&laquo; Previous posts')); ?>
	<?php echo str_replace('<a', '<a class="button"', get_next_posts_link('More posts &raquo;')); ?>

<?php get_footer(); ?>
