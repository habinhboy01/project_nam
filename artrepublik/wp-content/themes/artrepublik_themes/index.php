<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<!-- Market & Review -->

	<div class="bg-market">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => 6,
							'orderby' => 'post_date',
			                'order' => 'date',
							
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						
						<div class="content-market">
							<a class="img-market" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<div class="content-market2">
								<h1 class="title-market2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="title-market3"><?php the_author(); ?></p>

								<div class="title-market4"><?php the_excerpt(); ?></div>

								<ul class="title-category2">
									<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>


				<div class="col-lg-5 col-12 bg-market2">
					<h1 class="title-market"><?php echo get_cat_name( $category_id = 6 );?></h1>

					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 3,
							'cat' => 6,
							'orderby' => 'post_date',
			                'order' => 'ASC',	
						);
					?>
					<?php $getposts = new WP_query($args); ?>

					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="row border-market">
							<ul class="title-category">
								<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

								<li><?php echo get_the_date(); ?></li>
							</ul>

							<div class="col-lg-5 col-md-5 col-5">
								<a class="img-market2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div>

							<div class="col-lg-7 col-md-7 col-7">
								<h1 class="text-market">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="text-market2"><?php the_author(); ?></p>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- Culture -->

	<div class="bg-market">
		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 1,
				'cat' => 4,
				'orderby' => 'post_date',
                'order' => 'date',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			
			<div class="content-culture">
				<a class="img-culture" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>

				<ul class="title-category title-culture">
					<li><?php the_author(); ?></li>

					<li><?php echo get_the_date(); ?></li>
				</ul>

				<div class="content-culture2">
					<p class="text-culture"><?php echo get_cat_name( $category_id = $args['cat'] );?></p>

					<h1 class="title-market2">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<div class="title-market4"><?php the_excerpt(); ?></div>
				</div>

			</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>


	<!-- PERSPECTIVE -->

	<div class="bg-perspective">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => 3,
							'orderby' => 'post_date',
			                'order' => 'date',
							
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						
						<div class="content-market">
							<a class="img-market" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<div class="content-market2">
								<h1 class="title-market2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="title-market3"><?php the_author(); ?></p>

								<div class="title-market4"><?php the_excerpt(); ?></div>

								<ul class="title-category2 title-perspective">
									<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>


				<div class="col-lg-5 col-12 bg-market2">
					<h1 class="title-market"><?php echo get_cat_name( $category_id = 3 );?></h1>

					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 3,
							'cat' => 3,
							'orderby' => 'post_date',
			                'order' => 'ASC',	
						);
					?>
					<?php $getposts = new WP_query($args); ?>

					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="row border-perspective">
							<ul class="title-category title-perspective2">
								<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

								<li><?php echo get_the_date(); ?></li>
							</ul>

							<div class="col-lg-5 col-md-5 col-5">
								<a class="img-market2 img-perspective" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div>

							<div class="col-lg-7 col-md-7 col-7">
								<h1 class="text-market title-perspective3">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="text-market2 title-perspective2"><?php the_author(); ?></p>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>

	<!-- News & Exhibition -->

	<div class="bg-exhibition">
		<div class="container-fluid">
			<h1 class="title-exhibition"><?php echo get_cat_name( $category_id = 2 );?></h1>

			<div class="owl-carousel owl-theme carousel_1">
				<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						// 'posts_per_page' => 3,
						'cat' => 2,
						'orderby' => 'post_date',
		                'order' => 'date',	
					);
				?>
				<?php $getposts = new WP_query($args); ?>

				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="item">
						<div class="content-exhibition">
							<a id="img-exhibition" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<div class="content-exhibition2">
								<div class="content-exhibition3">
									<h2 class="title-exhibition2">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>

									<p class="text-market2 text-exhibition"><?php the_author(); ?></p>
								</div>

								<ul class="title-category text-exhibition2">
									<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>


	<!-- life -->

	<div class="bg-market">
		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 1,
				'cat' => 5,
				'orderby' => 'post_date',
                'order' => 'date',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			
			<div class="content-culture">
				<a class="img-culture" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>

				<ul class="title-category title-culture">
					<li><?php the_author(); ?></li>

					<li><?php echo get_the_date(); ?></li>
				</ul>

				<div class="content-culture2">
					<p class="text-culture"><?php echo get_cat_name( $category_id = $args['cat'] );?></p>

					<h1 class="title-market2">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<div class="title-market4"><?php the_excerpt(); ?></div>
				</div>

			</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>


	<!-- Feature -->

	<div class="bg-market">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-12">
					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 1,
							'cat' => 8,
							'orderby' => 'post_date',
			                'order' => 'date',
							
						);
					?>
					<?php $getposts = new WP_query($args); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						
						<div class="content-market">
							<a class="img-market" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<div class="content-market2">
								<h1 class="title-market2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="title-market3"><?php the_author(); ?></p>

								<div class="title-market4"><?php the_excerpt(); ?></div>

								<ul class="title-category2 title-feature">
									<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>


				<div class="col-lg-5 col-12 bg-market2">
					<h1 class="title-market"><?php echo get_cat_name( $category_id = 8 );?></h1>

					<?php
						$args = array(	
							'post_status' => 'publish',
							'post_type' => 'post',
							'posts_per_page' => 3,
							'cat' => 8,
							'orderby' => 'post_date',
			                'order' => 'ASC',	
						);
					?>
					<?php $getposts = new WP_query($args); ?>

					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

						<div class="row border-feature">
							<ul class="title-category">
								<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

								<li><?php echo get_the_date(); ?></li>
							</ul>

							<div class="col-lg-5 col-md-5 col-5">
								<a class="img-market2" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div>

							<div class="col-lg-7 col-md-7 col-7">
								<h1 class="text-market">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<p class="text-market2"><?php the_author(); ?></p>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Art Space -->

	<div class="bg-market">
		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'posts_per_page' => 1,
				'cat' => 7,
				'orderby' => 'post_date',
                'order' => 'date',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			
			<div class="content-culture">
				<a class="img-culture" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>

				<ul class="title-category title-culture">
					<li><?php the_author(); ?></li>

					<li><?php echo get_the_date(); ?></li>
				</ul>

				<div class="content-culture2">
					<p class="text-culture"><?php echo get_cat_name( $category_id = $args['cat'] );?></p>

					<h1 class="title-market2">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<div class="title-market4"><?php the_excerpt(); ?></div>
				</div>

			</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>


	<!-- News & Exhibition -->

	<div class="bg-exhibition bg-demo">
		<div class="container-fluid">
			<h1 class="title-exhibition"><?php echo get_cat_name( $category_id = 2 );?></h1>

			<div class="owl-carousel owl-theme carousel_1">
				<?php
					$args = array(	
						'post_status' => 'publish',
						'post_type' => 'post',
						// 'posts_per_page' => 3,
						'cat' => 2,
						'orderby' => 'post_date',
		                'order' => 'date',	
					);
				?>
				<?php $getposts = new WP_query($args); ?>

				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

					<div class="item">
						<div class="content-exhibition">
							<a id="img-exhibition" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>

							<div class="content-exhibition2">
								<div class="content-exhibition3">
									<h2 class="title-exhibition2">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>

									<p class="text-market2 text-exhibition"><?php the_author(); ?></p>
								</div>

								<ul class="title-category text-exhibition2">
									<li><?php echo get_cat_name( $category_id = $args['cat'] );?></li>

									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>