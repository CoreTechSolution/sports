<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<form method="post" action="admin/add_ground_form" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Venue Name</label>
							<input type="text" name="ground_name" class="form-control" autocomplete="off">
						</div>
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="venue_address" class="form-control">
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
                            <label>Zip Code</label>
                            <input type="text" name="venue_zipcode" class="form-control">
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Sports</label>
                            <select name="ground_category" autocomplete="off" class="form-control">
                                <option value="">- Select Sports -</option>
								<?php if(!empty($categories)){ ?>
									<?php foreach($categories as $category){ ?>
                                        <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name']; ?></option>
									<?php } ?>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Format</label>
                            <select name="ground_format" class="form-control" autocomplete="off">
                                <option value="">- Select Format -</option>
                                <option value="indoor">Indoor</option>
                                <option value="outdoor">Outdoor</option>
                            </select>
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Surface</label>
                            <select name="ground_surface" class="form-control" autocomplete="off">
                                <option value="">- Select Surface -</option>
                                <option value="Artificial">Artificial</option>
                                <option value="Grass">Grass</option>
                                <option value="Hard (Macadam)">Hard (Macadam)</option>
                                <option value="Indoor">Indoor</option>
                                <option value="Synthetic Rubber">Synthetic Rubber</option>
                            </select>
						</div>
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Facilities</label>
                            <select name="ground_facilities" class="form-control" autocomplete="off">
                                <option value="">- Select Facilities -</option>
                                <option value="Changing Rooms">Changing Rooms</option>
                                <option value="Floodlights">Floodlights</option>
                                <option value="Free Parking">Free Parking</option>
                            </select>
                        </div>
                    </div>
				</div>
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Prices</label>
                            <input type="text" name="venue_prices" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Opening Hours</label>
                            <input type="text" name="venue_opening_hrs" class="form-control">
                        </div>
                    </div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="mytextarea" name="venue_description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Featured Image</label>
                            <input type="file" name="venue_featured_img" class="form-control">
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
