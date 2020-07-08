<?php /* Template Name: new home */
set_query_var('ENTRY', 'new_home');
get_header();
?>
<?php get_template_part('include/nav2'); ?>

<div class="youtubeFrame">
	<div id="player" class="iframe"></div>
	<div class="saltarIntro">
		Saltar Intro
	</div>
	<script type="text/javascript">
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		var player;
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
			  height: '100%',
			  width: '100%',
			  playerVars: {
			    autoplay: 1,
			    controls: 0,
			    showinfo: 0,
			    rel: 0,
			    fs: 0,
			    modestbranding: 0
			  },
			  videoId: 'u8417DWr4OE',
			  events: {
			    'onReady': onPlayerReady,
			    'onStateChange': onPlayerStateChange
			  }
			});
		}
		function onPlayerReady(event) {
			event.target.playVideo();
			player.mute();
		}
		var done = false;
		function onPlayerStateChange(event) {
			if (event.data == 0) {
				player.stopVideo();
				jQuery('.youtubeFrame').addClass('remove');
			}
		}
		function stopVideo() {
			player.stopVideo();
		}
		jQuery('.saltarIntro').on('click',function(){
			stopVideo();
			setTimeout(function(){				
				jQuery('.youtubeFrame').addClass('remove');
			},500);
		});
	</script>
</div>
<section class="fullheight bubble-firstlanding">
	<div class="left fullheight" style="background-image: url(<?php the_field('foruth_left_image'); ?>);">				<div class="x-container fullheight flex-init">
			<?php the_field('foruth_left_content'); ?>
			<ul class="social">
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
		<?php
			if(!wp_is_mobile()){
				?>
		<video autoplay muted loop id="myVideo">
		  <source src="<?php the_field('video_jabones'); ?>" type="video/mp4">
		</video>
		<img src="<?php echo get_template_directory_uri(); ?>/leon.png" class="absolute_int">
				<?php
			}
		?>
	</div>
</section>
<section class="fullheight bubble-firstlanding">
	<div class="left fullheight" style="background-image: url(<?php the_field('foruth_right_image'); ?>);">				<div class="x-container fullheight flex-init">
			<?php the_field('foruth_right_content'); ?>
			<ul class="social">
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
		<?php
			if(!wp_is_mobile()){
				?>
		<video autoplay muted loop id="myVideo2">
		  <source src="<?php the_field('video_gel'); ?>" type="video/mp4">
		</video>
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

<section id="<?php echo sanitize_title(get_field('five_title')); ?>" class="section">
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
