<li class="c-newsList">
	<div class="c-newsList__info">
		<div class="c-newsList__time">
			<time class="c-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
		</div><!-- time -->
		<div class="c-newsList__label">
			<?php
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			?>
			<span class="c-label"><?php echo esc_html($cat_name); ?></span>
		</div> <!-- /.label -->
	</div>
	<a href="<?php the_permalink(); ?>" class="c-newsList__text"><?php the_title(); ?> </a>
</li>
<picture>
<source media="(max-width: 767px)" srcset="">
<source media="(min-width: 768px)" srcset="">
<img src="" alt="">
</picture>