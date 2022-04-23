
<?php echo do_shortcode('[wp_search_form]'); ?>

<h1 class="text-news2">Bài viết gần đây</h1>

<?php
	$args = array(
		'post_status' => 'publish',
		'post_type' => 'post',
		'posts_per_page' => 4,
		'order' => 'DSC',
	);
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<ul class="list-news">
	<li>
        <a href="<?php the_permalink(); ?>">
	    <?php the_post_thumbnail('full'); ?></a>
    </li>
    <li>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    </li>
</ul>
<?php endwhile; wp_reset_postdata(); ?>  