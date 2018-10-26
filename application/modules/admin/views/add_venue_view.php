<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<form method="post" action="admin/add_venue_form">
				<div class="form-group">
					<label>Venue Name</label>
					<input type="text" name="venue_name" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Venue Location</label>
					<input type="text" name="venue_location" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary btn-submit">
				</div>
			</form>
		</div>
	</div>
</div>
