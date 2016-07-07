<!-- service section -->
<?php
// La fonction array permet de créer un array
$Icon_ = array ('','/images/icon/icon_elect.png', '/images/icon/icon_domotic.png', '/images/icon/icon_cam.png', '/images/icon/icon_depa.png');

?>

<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_service">
<?php if($wl_theme_options['home_service_heading'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h3>		
			</div>
		</div>
	</div>
</div>	
<?php } ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container">		
			<?php for($i=1; $i<5; $i++ ) { ?>
			<div class=" col-md-3 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible ">
					<!--<?php if($wl_theme_options['service_'.$i.'_icons'] !='') { ?><div class="enigma_service_iocn enigma_center1"><i class="<?php echo esc_attr($wl_theme_options['service_'.$i.'_icons']); ?>"></i></div><?php } ?> -->
					<div class="enigma_service_iocnIcon ">
					<div class="enigma_center1">
						<img src="<?php echo bloginfo('template_directory').$Icon_[$i]; ?>" class="img-responsive" alt="">
					</div>
						
					</div>	
				</div><br>
				<!--<div class="enigma_service_detail media-body"> pull-left-->
				<div class="enigma_center">
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?><h4><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h4><?php } ?>
						<?php if($wl_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_'.$i.'_text'], true); ?></p><?php } ?>
				</div>
			</div>
			<?php } ?>	
		</div>
	</div>
</div>	 
<!-- /Service section -->