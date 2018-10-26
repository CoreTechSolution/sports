<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<form method="post" action="<?php echo base_url('dashboard/become_league_owner_form'); ?>">
				<div class="row">
					<div class="col-xl-6">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="lo_first_name" class="form-control" autocomplete="off" readonly value="<?php echo $first_name; ?>">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="lo_last_name" class="form-control" autocomplete="off" readonly value="<?php echo $last_name; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" name="lo_email_address" class="form-control" autocomplete="off" readonly value="<?php echo $email; ?>">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="lo_phone" class="form-control" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary btn-submit" value="Send Request">
				</div>
			</form>
		</div>
	</div>
</div>
