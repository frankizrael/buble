<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="fullheight d_banner">
	<article class="d_banner__article d_banner--about" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
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
								<?php echo $fr['title']; ?>
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
<section id="<?php echo sanitize_title(get_field('init_mid_title')); ?>" class="init fullheight">
	<div class="full-container fullheight">
		<div class="flex fullheight">
			<div class="flex-50  flex-middle left-padd-container">
				<div class="flex-content">
					<div class="title_content">
						<h2 data="<?php the_field('init_top_title'); ?>"><?php the_field('init_top_title'); ?></h2>
						<h1><?php the_field('init_mid_title'); ?></h1>
						<h2 data="<?php the_field('init_bottom_title'); ?>"><?php the_field('init_bottom_title'); ?></h2>
					</div>
					<div class="content-ss">
						<div class="animation--s">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.556" viewBox="0 0 20 16.556"><defs><style>.svg_fa{fill:none;}.svg_fb,.svg_fc{stroke:none;}.svg_fc{fill:#fff;}</style></defs><g class="svg_fa" transform="translate(20 16.556) rotate(180)"><path class="svg_fb" d="M8.288,2.834a2,2,0,0,1,3.424,0l6.455,10.687a2,2,0,0,1-1.712,3.034H3.545a2,2,0,0,1-1.712-3.034Z"/><path class="svg_fc" d="M 10 3.268259048461914 C 9.873559951782227 3.268259048461914 9.638710021972656 3.305908203125 9.486419677734375 3.558048248291016 L 3.031009674072266 14.24533843994141 C 2.873390197753906 14.50628852844238 2.957729339599609 14.7364387512207 3.022029876708984 14.85040855407715 C 3.086339950561523 14.96436882019043 3.239730834960938 15.15555858612061 3.544589996337891 15.15555858612061 L 16.45541000366211 15.15555858612061 C 16.76026916503906 15.15555858612061 16.91366004943848 14.96436882019043 16.97797012329102 14.85040855407715 C 17.04227066040039 14.7364387512207 17.12660980224609 14.50628852844238 16.96899032592773 14.24533843994141 L 10.51358032226562 3.558038711547852 C 10.36128997802734 3.305908203125 10.12644004821777 3.268259048461914 10 3.268259048461914 M 10 1.868261337280273 C 10.66148471832275 1.868261337280273 11.32297039031982 2.190243721008301 11.71193981170654 2.834208488464355 L 18.16735076904297 13.52149868011475 C 18.97248077392578 14.85443878173828 18.01263999938965 16.5555591583252 16.45541000366211 16.5555591583252 L 3.544589996337891 16.5555591583252 C 1.987360000610352 16.5555591583252 1.027519226074219 14.85443878173828 1.832649230957031 13.52149868011475 L 8.288060188293457 2.834208488464355 C 8.677029609680176 2.190243721008301 9.338515281677246 1.868261337280273 10 1.868261337280273 Z"/></g></svg>
						</div>
						<div class="content_detail">
							<?php the_field('init_desct_title'); ?>
						</div>
						<div class="buttons">
							<a href="<?php the_field('link_presentaciones','options'); ?>" class="btn btn--icon">
								<?php the_field('link_text_presentaciones','options'); ?>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.556" viewBox="0 0 20 16.556"><defs><style>.svg_fa{fill:none;}.svg_fb,.svg_fc{stroke:none;}.svg_fc{fill:#fff;}</style></defs><g class="svg_fa" transform="translate(20 16.556) rotate(180)"><path class="svg_fb" d="M8.288,2.834a2,2,0,0,1,3.424,0l6.455,10.687a2,2,0,0,1-1.712,3.034H3.545a2,2,0,0,1-1.712-3.034Z"/><path class="svg_fc" d="M 10 3.268259048461914 C 9.873559951782227 3.268259048461914 9.638710021972656 3.305908203125 9.486419677734375 3.558048248291016 L 3.031009674072266 14.24533843994141 C 2.873390197753906 14.50628852844238 2.957729339599609 14.7364387512207 3.022029876708984 14.85040855407715 C 3.086339950561523 14.96436882019043 3.239730834960938 15.15555858612061 3.544589996337891 15.15555858612061 L 16.45541000366211 15.15555858612061 C 16.76026916503906 15.15555858612061 16.91366004943848 14.96436882019043 16.97797012329102 14.85040855407715 C 17.04227066040039 14.7364387512207 17.12660980224609 14.50628852844238 16.96899032592773 14.24533843994141 L 10.51358032226562 3.558038711547852 C 10.36128997802734 3.305908203125 10.12644004821777 3.268259048461914 10 3.268259048461914 M 10 1.868261337280273 C 10.66148471832275 1.868261337280273 11.32297039031982 2.190243721008301 11.71193981170654 2.834208488464355 L 18.16735076904297 13.52149868011475 C 18.97248077392578 14.85443878173828 18.01263999938965 16.5555591583252 16.45541000366211 16.5555591583252 L 3.544589996337891 16.5555591583252 C 1.987360000610352 16.5555591583252 1.027519226074219 14.85443878173828 1.832649230957031 13.52149868011475 L 8.288060188293457 2.834208488464355 C 8.677029609680176 2.190243721008301 9.338515281677246 1.868261337280273 10 1.868261337280273 Z"/></g></svg>
								</span>	
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="flex-50">
				<div class="swiper_content_slide">
					<div class="swiper-container heightH">
						<div class="swiper-wrapper">
							<?php
							$banner = get_field('banner');
							if ($banner){
								foreach($banner as $ban) {
							?>
								<div class="swiper-slide">
									<div class="fullheight initCore" style="background-image: url('<?php echo $ban['img']; ?>');">
										<div class="x-coretitle">
											<div class="titleContent">
												<h3><?php echo $ban['title']; ?></h3>
												<p><?php echo $ban['desc']; ?></p>
												<div class="buttons">
													<a href="<?php echo $ban['link']; ?>">Ver presentación</a>
													<?php
														if ($ban['video']) {
															?>
													<a href="javascript:void" class="modal_video">
														Ver video
													</a>
													<div class="video_sensational">
														<video autoplay muted loop id="myVideo">
		                                                  <source src="<?php echo $ban['video']; ?>" type="video/mp4">
		                                                </video>  
													</div>
															<?php
														}
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
									}
								}
							?>
						</div>						
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="<?php echo sanitize_title(get_field('second_title')); ?>" class="section fullheight" data="<?php the_field('second_title'); ?>">
	<div class="x-container fullheight">
		<div class="flex">
			<div class="left fullheight flex_mid">
				<div class="title_rotate">
					<h2><?php the_field('second_title'); ?></h2>
				</div>
				<div class="imagen_core">
					<img src="<?php the_field('second_image'); ?>">
				</div>
			</div>
			<div class="right fullheight flex_mid">
				<div class="content_right">
					<div class="title_izquierda">
						<h3><?php the_field('second_subtitle'); ?></h3>
						<p><?php the_field('second_subtitle_sub'); ?></p>
					</div>
					<div class="content_izquierda">
						<?php the_field('second_content'); ?>
					</div>
					<div class="content_btn">
						<a href="#contacto" class="btn">Pídelo hoy</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="<?php echo sanitize_title(get_field('theere_title')); ?>" class="section fullheight" data="<?php the_field('theere_title'); ?>">
	<div class="full-container fullheight">
		<div class="flex ">
			<div class="left left-padd-container">
				<div class="relative fullheight flex_center">
					<div class="title_rotate">
						<h2><?php the_field('theere_title'); ?></h2>
					</div>
					<div class="dont-slider">
						<div class="title_sec">
							<h3><?php the_field('theere_title'); ?></h3>
							<p><?php the_field('theere_subtitle'); ?></p>
						</div>
						<div class="first-slider">
							<div class="swiper-container ventajas_slider">
								<div class="swiper-wrapper">
									<?php
										$ventajas = get_field('ventajas');
											if ($ventajas){
												foreach($ventajas as $ventaja) {
									?>
										<div class="swiper-slide">
											<div class="ventajas_slider__item">
												<div class="contenido">
													<?php echo $ventaja['contenido']; ?>
												</div>
											</div>
										</div>
									<?php
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right fullheight ">
				<div class="content_right">
					<div class="content_right_c">
						<div class="swiper-container ventajas_slider_images">
							<div class="swiper-wrapper">
								<?php
									$ventajas = get_field('ventajas');
										if ($ventajas){
											foreach($ventajas as $ventaja) {
								?>
									<div class="swiper-slide">
										<div class="ventajas_slider_images_item fullheight">
											<img src="<?php echo $ventaja['imagen']; ?>">								
										</div>
									</div>
								<?php
										}
									}
								?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="<?php echo sanitize_title(get_field('fourth_title')); ?>" class="section fullheight" data="<?php the_field('fourth_title'); ?>">
	<div class="full-container fullheight">
		<div class="flex">
			<div class="title-abs">
				<h3><?php the_field('fourth_subtitle'); ?></h3>
			</div>
			<div class="title_rotate">
				<h2><?php the_field('fourth_title'); ?></h2>
			</div>
			<div class="left fullheight" style="background-image: url(<?php the_field('foruth_left_image'); ?>);">				
				<div class="decret">
					<div class="top-part">
						<?php the_field('foruth_left_content'); ?>
					</div>
					<div class="bottom-part">
						<a href="<?php the_field('foruth_left_link'); ?>" class="btn">Ver más</a>
					</div>
				</div>
			</div>
			<div class="right fullheight " style="background-image: url(<?php the_field('foruth_right_image'); ?>);">
				<div class="decret">
					<div class="top-part">
						<?php the_field('foruth_right_content'); ?>
					</div>
					<div class="bottom-part">
						<a href="<?php the_field('foruth_right_link'); ?>" class="btn">Ver más</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="<?php echo sanitize_title(get_field('five_title')); ?>" class="section" data="<?php the_field('five_title'); ?>">
	<div class="auto">
		<div class="flexAll">
			<div class="all">
				<div class="x-container">
					<div class="title_rotate">
						<h2><?php the_field('five_title'); ?></h2>
					</div>
					<div class="title_top-part">
						<h3><?php the_field('five_subtitle'); ?></h3>
						<p><?php the_field('five_contenttitle'); ?></p>
					</div>
				</div>
				<div class="left-container">
					<div class="conhtent_bot-part">
						<div class="swiper-container testimonios">
							<div class="swiper-wrapper">
								<?php
									$testimonios = get_field('testimonios');
										if ($testimonios){
											foreach($testimonios as $testimonio) {
								?>
									<div class="swiper-slide">
										<div class="testimonios__item">
											<div class="contenido">
												<div class="img">
													<img src="<?php echo $testimonio['imagen']; ?>">
												</div>
												<div class="content">
													<h3><?php echo $testimonio['title']; ?></h3>
													<div class="desc">
														<?php echo $testimonio['contenido']; ?>
													</div>
												</div>												
											</div>
										</div>
									</div>
								<?php
										}
									}
								?>
							</div>							
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contacto" class="section" data="contacto" style="background-image: url(<?php the_field('contact_background'); ?>);">
	<div class="x-container">
		<div class="marginLeft">
			<div class="title_rotate">
				<h2>Pídelo hoy</h2>
			</div>
			<div class="contentall">
				<div class="title">
					<?php the_field('contact_title'); ?>
				</div>
				<div class="content_a">
					<?php 
						echo do_shortcode('[contact-form-7 id="5" title="contacto"]');
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
