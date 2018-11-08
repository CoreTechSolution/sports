<div class="header-separator"></div>
<div class="wrapper12">
	<div class="container">
		<div class="content-area">
			<div class="row">
				<div class="col-xl-8">
					<div class="section1">
						<?php $slug = $this->uri->segment(2); ?>
						<?php $venue_data = get_venue_data_by_slug($slug); ?>
						<h2><?php echo ucfirst($venue_data->venue_name); ?></h2>
						<div class="venue_big_img"><img src="<?php echo ucfirst($venue_data->venue_featured_img); ?>"></div>
						<div class="booking_calendar"></div>
						<div class="location_opening_hrs_prices">
							<div class="box_container">
								<div class="box_title">Location, Opening Hours and Prices</div>
								<div class="box_content">
									<div class="google_map_container">
										<div id="googleMap" style="width:100%;height:300px;"></div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<h3>Prices</h3>
											<p><?php echo $venue_data->venue_prices; ?></p>
										</div>
										<div class="col-xl-6">
											<h3>Opening Hours</h3>
											<p><?php echo $venue_data->venue_opening_hrs; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="description">
							<div class="box_container">
								<div class="box_title">Description</div>
								<div class="box_content">
									<?php echo $venue_data->venue_description; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="section2">
						<div class="box_container">
							<div class="box_title">Facilities</div>
							<div class="box_content">
								<ul>
									<li><?php echo $venue_data->venue_facilities; ?></li>
								</ul>
							</div>
						</div>
						<div class="box_container">
							<div class="box_title">Address</div>
							<div class="box_content">
								<p><?php echo $venue_data->venue_address; ?><br><?php echo get_location_name_by_id($venue_data->venue_location); ?><br><?php echo $venue_data->venue_zipcode; ?></p>
							</div>
						</div>
						<div class="box_container">
							<div class="box_title">Block Booking Enquiry</div>
							<div class="box_content">
								<form method="post" action="home/block_booking_enquiry_form">
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<input type="text" placeholder="Your Full Name" class="form-control" name="booking_enquiry_your_full_name">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<input type="text" placeholder="Email Address" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<input type="text" placeholder="Phone Number" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group">
												<input type="text" placeholder="Select Date" class="form-control">
											</div>
										</div>
										<div class="col-xl-6">
											<div class="form-group">
												<input type="text" placeholder="Select Time" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<select name="" class="form-control">
													<option value="">Select Duration</option>
													<option value="30 minutes">30 minutes</option>
													<option value="40 minutes">40 minutes</option>
													<option value="45 minutes">45 minutes</option>
													<option value="1 hour">1 hour</option>
													<option value="1 hour 15 minutes">1 hour 15 minutes</option>
													<option value="1 hour 20 minutes">1 hour 20 minutes</option>
													<option value="1 hour 30 minutes">1 hour 30 minutes</option>
													<option value="1 hour 45 minutes">1 hour 45 minutes</option>
													<option value="2 hours">2 hours</option>
													<option value="2 hours 30 minutes">2 hours 30 minutes</option>
													<option value="3 hours">3 hours</option>
													<option value="3 hours 30 minutes">3 hours 30 minutes</option>
													<option value="4 hours">4 hours</option>
													<option value="5 hours">5 hours</option>
													<option value="6 hours">6 hours</option>
													<option value="7 hours">7 hours</option>
													<option value="8 hours">8 hours</option>
													<option value="9 hours">9 hours</option>
													<option value="10 hours">10 hours</option>
													<option value="11 hours">11 hours</option>
													<option value="12 hours">12 hours</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group" style="margin-bottom: 6px;">
												<label><input id="block_booking" type="checkbox" name="block_booking" class="checkbox"> Block Booking</label>
											</div>
										</div>
									</div>
									<div class="row" id="selected_block_booking" style="display: none;">
										<div class="col-xl-12">
											<div class="form-group">
												<select name="selected_block_booking" class="form-control">
													<option value="2 Weeks">2 Weeks</option>
													<option value="2 Weeks">3 Weeks</option>
													<option value="2 Weeks">4 Weeks</option>
													<option value="2 Weeks">5 Weeks</option>
													<option value="2 Weeks">6 Weeks</option>
													<option value="2 Weeks">7 Weeks</option>
													<option value="2 Weeks">8 Weeks</option>
													<option value="2 Weeks">9 Weeks</option>
													<option value="2 Weeks">10 Weeks</option>
													<option value="2 Weeks">11 Weeks</option>
													<option value="2 Weeks">12 Weeks</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<textarea class="form-control">Optional Message</textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-12">
											<div class="form-group">
												<input type="submit" name="submit" value="Send Enquiry" class="btn btn-primary btn-submit">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="box_container nearby_venues">
							<div class="box_title">Nearby Venues</div>
							<div class="box_content">
								<ul>
									<li>
										<img src="https://via.placeholder.com/135x70">
									</li>
									<li>
										<h5>Goals Bexleyheath</h5>
										<p>Graham Road, Bexleyheath, DA6 7EG, UK</p>
									</li>
								</ul>
							</div>
							<div class="header-separator"></div>
							<div class="box_content">
								<ul>
									<li>
										<img src="https://via.placeholder.com/135x70">
									</li>
									<li>
										<h5>Goals Bexleyheath</h5>
										<p>Woolwich Rd, Bexleyheath DA6 7DA, UK</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    var geocoder;
    var map;
    function myMap() {
        geocoder = new google.maps.Geocoder();
        var mapOptions = {
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
        var address = "Bexleyheath Academy  Woolwich Road Bexleyheath DA6 7DA";
        geocoder.geocode({ 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPeWdW40Sy3y2nes_xxgg81pv0bY1ppYM&callback=myMap"></script>