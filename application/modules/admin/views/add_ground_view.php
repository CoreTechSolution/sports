<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<form method="post" action="admin/add_ground_form">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Ground Name</label>
							<input type="text" name="ground_name" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Category</label>
							<select name="ground_category" autocomplete="off" class="form-control">
								<option value="">- Select Category -</option>
								<?php if(!empty($categories)){ ?>
									<?php foreach($categories as $category){ ?>
										<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name']; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Location</label>
							<select name="ground_location" autocomplete="off" class="form-control">
								<option value="">- Select Location -</option>
								<?php if(!empty($locations)){ ?>
									<?php foreach($locations as $location){ ?>
										<option value="<?php echo $location['location_id'] ?>"><?php echo $location['location_name']; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Slot Timing</label>
							<input type="text" name="ground_slot_timing" class="form-control" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Format</label>
							<input type="text" name="ground_format" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Surface</label>
							<input type="text" name="ground_surface" class="form-control" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Radius</label>
							<input type="text" name="ground_radius" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Facilities</label>
							<input type="text" name="ground_facilities" class="form-control" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary btn-submit">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
