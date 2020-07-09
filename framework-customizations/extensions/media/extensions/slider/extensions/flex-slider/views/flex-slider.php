<?php if (!defined('FW')) die('Forbidden'); ?>
<? if($data['slides']): ?>
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
				<?foreach ($data['slides'] as $slide):?>
					<li style="background-image: url(<?=$slide['src']?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1><?=$slide['title']?></h1>
										<h2><?=$slide['desc']?></h2>
										<?if(!empty($slide['extra']['link']) && !empty($slide['extra']['link_title'])):?>
											<p><a class="btn btn-primary btn-lg" href="<?=$slide['extra']['link']?>"><?=$slide['extra']['link_title']?></a></p>
										<?endif;?>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	</aside>

<?endif;?>
