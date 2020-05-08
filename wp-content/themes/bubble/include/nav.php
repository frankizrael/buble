<?php	
$fid = get_option( 'page_on_front' );
?>
<header>
	<div class="x-container">
		<div class="flex flex-center">
			<div class="left">
				<a href="<?php echo site_url();?>">
					<img src="<?php the_field('logo','options'); ?>">
				</a>
			</div>
			<div class="right">
				<div class="menu-icon"><i></i></div>
			</div>
		</div>
	</div>
</header>

<nav class="menufixed">
	<div class="x-container fullh">
		<div class="middle-menu">
			<ul id="contMenu">	
				<li>
					<a href="#que-es-bubble">¿Qué es Bubble?</a>
				</li>
				<li>
					<a href="#porque-usar-bubble">¿Porqué usar Bubble?</a>
				</li>
				<li>
					<a href="#bubble-presentaciones">Bubble Presentaciones</a>
				</li>
				<li>
					<a href="#testimoniales">Testimoniales</a>
				</li>
				<li>
					<a href="#contacto">Pídelo hoy</a>
				</li>			
			</ul>
		</div>
		<div class="absFoot flex">
			<a href="<?php the_field('link_presentaciones','options'); ?>" class="btn"><?php the_field('link_text_presentaciones','options'); ?></a>
			<div class="absFoot__content">
				<?php the_field('foot_content','options'); ?>
			</div>
		</div>
	</div>
</nav>