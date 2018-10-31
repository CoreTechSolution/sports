<div class="header-separator"></div>
<div class="wrapper11">
	<div class="container">
		<div class="row">
			<div class="col-xl-3"></div>
			<div class="col-xl-9">
				<div class="content-area">
					<?php if(!empty($venus)){ ?>
						<?php foreach($venus as $venue){ ?>
							<div class="venue_wrapper">
								<?php //print_r($venue); ?>
								<div class="row">
									<div class="col-xl-4">
										<div class="venue_img"><img src="<?php echo $venue->venue_featured_img; ?>"></div>
									</div>
									<div class="col-xl-5">
										<h2><?php echo ucfirst($venue->venue_name); ?></h2>
										<p><?php echo $venue->venue_address; ?><?php if(!empty($venue->venue_zipcode)){ echo ', '.$venue->venue_zipcode; } ?></p>
										<p><strong>Format: </strong><?php echo $venue->venue_format; ?></p>
										<p><strong>Surface: </strong><?php echo $venue->venue_surface; ?></p>
										<div class="distance_wrapper"><p>0 Miles Away</p></div>
									</div>
									<div class="col-xl-3">
										<div class="explore_venue"><a href="javascript:void(0)">Explore Venue</a></div>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } else { ?>
						<p>0 Match found</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>