<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="header-separator"></div>
<div class="wrapper10">
	<div class="container">
		<div class="row">
			<div class="col-xl-4"></div>
			<div class="col-xl-4">
				<div class="formwrapper">
					<form id="forms" method="post" action="<?php echo base_url('login/reset_password_form'); ?>">
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" name="confirmpassword" class="form-control" autocomplete="off">
							<input type="hidden" name="code" class="form-control" autocomplete="off" value="<?php echo $code; ?>">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary btn-submit">
						</div>
					</form>
				</div>
			</div>
			<div class="col-xl-4"></div>
		</div>
	</div>
</div>
