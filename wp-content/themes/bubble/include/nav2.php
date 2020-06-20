<header class="header2">
	<nav>
		<div class="x-container">
			<div class="header-flex">
				<div class="logo">
					<a href="<?php the_field('logo','options'); ?>">						
						<img src="<?php the_field('logo','options'); ?>">
					</a>
				</div>
				<div class="menu-header">
					<ul>
						<li>
							<a href="javascript:void(0)" class="presentations">
								Nuevos productos
							</a>
						</li>
						<li>
							<a href="#previene-y-protege">
								¿Qué es Bubble?
							</a>
						</li>
						<li>
							<a href="#testimoniales">
								Testimoniales
							</a>
						</li>
						<li>
							<a href="#contacto" class="contact">
								Pídelo ahora
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>

<div class="initfullContent" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	<div class="initfullContent__flex">
		<div class="initfullContent__left fullContent" data="#jabon">
			<img src="<?php the_field('imagen_rosa'); ?>">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="initfullContent__right fullContent" data="#gel">
			<img src="<?php the_field('gel_imagen_basic'); ?>">
			<h2><?php the_field('gel_title'); ?></h2>
		</div>
	</div>
</div>

<div class="fullContent_inside"> 
	<section id="jabon" class="fullheight d_banner d_bannerjs_jabon" style="display: none;">
		<article class="d_banner__article d_banner--about">
			<div class="x-container posRelative">
				<div class="d_banner__article__left">
					<h1><?php the_title(); ?></h1>
					<div class="content">
						<?php the_field('content_inicial'); ?>
					</div>
					<div class="true_fragancias">
						<ul>
							<?php 
								$fragancias = get_field('fragancias');
								foreach ($fragancias as $fr) {
									?>
							<li>
								<a href="#<?php echo $fr['id']; ?>" data="#img_<?php echo $fr['id']; ?>" style="background:<?php echo $fr['color']; ?>">
									<span><?php echo $fr['title']; ?></span>
								</a>
							</li>
									<?php
								}
							?>
						</ul>
					</div>

					<div class="social_r">
						<p>Síguenos:</p>
						<ul class="social-a">
							<?php
								$social = get_field('social','options');
								foreach ($social as $s) {
									?>
							<li>
								<a href="<?php echo $s['link']; ?>" target="_blank">
									<img src="<?php echo $s['img']; ?>">
								</a>
							</li>
									<?php
								}
							?>
						</ul>
					</div>
				</div>	
				<div class="d_banner__article__right">
					<img src="<?php the_field('imagen_rosa'); ?>" style="display: none;">
				</div>
			</div>
		</article>
		<article class="d_banner__article d_banner__insides">
			<div class="fragancias_inside">
				<?php 
					$fragancias = get_field('fragancias');
					foreach ($fragancias as $fr) {
						?>
						<div class="fragancias_hide" id="<?php echo $fr['id']; ?>">
							<div class="x-container posRelative">
								<div class="d_banner__flex">
									<div class="d_banner__article__left">
										<div class="height__left ">
											<div class="decorative1" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="midd_left">
												<a href="javascript:void(0)" class="back">Volver</a>
												<h2><i style="background:<?php echo $fr['color']; ?>"></i><?php echo $fr['title']; ?></h2>
												<div class="content">
													<?php echo $fr['content']; ?>
												</div>
												<div class="social_r">
													<p>Síguenos:</p>
													<ul class="social-dy">
														<?php
															$social = get_field('social','options');
															foreach ($social as $s) {
																?>
														<li>
															<a href="<?php echo $s['link']; ?>" target="_blank">
																<img src="<?php echo $s['img']; ?>">
															</a>
														</li>
																<?php
															}
														?>
													</ul>
												</div>
											</div>
										</div>
									</div>	
									<div class="d_banner__article__right">
										<img src="<?php echo $fr['img']; ?>" style="display: none;">
										<div class="decorative_image">
											<div class="decorative_image__1" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="decorative_image__2" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="decorative_image__3" style="background:<?php echo $fr['color']; ?>"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="decorative2" style="background:<?php echo $fr['color']; ?>"></div>
						</div>
						<?php
					}
				?>
			</div>
		</article>
		<div class="imagen_absolute">
			<img src="<?php the_field('imagen_rosa'); ?>" class="ress ress_fb ress_init">
			<?php 
				$fragancias = get_field('fragancias');
				foreach ($fragancias as $fr) {
					?>
					<img src="<?php echo $fr['img']; ?>" id="img_<?php echo $fr['id']; ?>" class="ress">
					<?php
				}
			?>
		</div>
	</section>
	<section id="gel" class="fullheight d_banner d_bannerjs_gel" style="display: none;">
		<article class="d_banner__article d_banner--about">
			<div class="x-container posRelative">
				<div class="d_banner__article__left">
					<h1><?php the_field('gel_title'); ?></h1>
					<div class="content">
						<?php the_field('gel_inicial'); ?>
					</div>
					<div class="true_fragancias">
						<ul>
							<?php 
								$fragancias = get_field('gel_fragancias');
								foreach ($fragancias as $fr) {
									?>
							<li>
								<a href="#get_<?php echo $fr['id']; ?>" data="#get_img_<?php echo $fr['id']; ?>" style="background:<?php echo $fr['color']; ?>">
									<span><?php echo $fr['title']; ?></span>
								</a>
							</li>
									<?php
								}
							?>
						</ul>
					</div>

					<div class="social_r">
						<p>Síguenos:</p>
						<ul class="social-a">
							<?php
								$social = get_field('social','options');
								foreach ($social as $s) {
									?>
							<li>
								<a href="<?php echo $s['link']; ?>" target="_blank">
									<img src="<?php echo $s['img']; ?>">
								</a>
							</li>
									<?php
								}
							?>
						</ul>
					</div>
				</div>	
				<div class="d_banner__article__right">
					<img src="<?php the_field('gel_imagen_basic'); ?>" style="display: none;">
				</div>
			</div>
		</article>
		<article class="d_banner__article d_banner__insides">
			<div class="fragancias_inside">
				<?php 
					$fragancias = get_field('gel_fragancias');
					foreach ($fragancias as $fr) {
						?>
						<div class="fragancias_hide" id="get_<?php echo $fr['id']; ?>">
							<div class="x-container posRelative">
								<div class="d_banner__flex">
									<div class="d_banner__article__left">
										<div class="height__left ">
											<div class="decorative1" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="midd_left">
												<a href="javascript:void(0)" class="back2">Volver</a>
												<h2><i style="background:<?php echo $fr['color']; ?>"></i><?php echo $fr['title']; ?></h2>
												<div class="content">
													<?php echo $fr['content']; ?>
												</div>
												<div class="social_r">
													<p>Síguenos:</p>
													<ul class="social-dy">
														<?php
															$social = get_field('social','options');
															foreach ($social as $s) {
																?>
														<li>
															<a href="<?php echo $s['link']; ?>" target="_blank">
																<img src="<?php echo $s['img']; ?>">
															</a>
														</li>
																<?php
															}
														?>
													</ul>
												</div>
											</div>
										</div>
									</div>	
									<div class="d_banner__article__right">
										<img src="<?php echo $fr['img']; ?>" style="display: none;">
										<div class="decorative_image">
											<div class="decorative_image__1" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="decorative_image__2" style="background:<?php echo $fr['color']; ?>"></div>
											<div class="decorative_image__3" style="background:<?php echo $fr['color']; ?>"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="decorative2" style="background:<?php echo $fr['color']; ?>"></div>
						</div>
						<?php
					}
				?>
			</div>
		</article>
		<div class="imagen_absolute">
			<img src="<?php the_field('gel_imagen_basic'); ?>" class="ress ress_fb ress_init">
			<?php 
				$fragancias = get_field('gel_fragancias');
				foreach ($fragancias as $fr) {
					?>
					<img src="<?php echo $fr['img']; ?>" id="get_img_<?php echo $fr['id']; ?>" class="ress">
					<?php
				}
			?>
		</div>
	</section>
</div>

<div id="burbuja" class="burbujitas">
   <canvas id="canvas"></canvas>
</div>