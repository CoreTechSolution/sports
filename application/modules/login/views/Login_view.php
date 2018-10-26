<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="header-separator"></div>
<div class="wrapper10">
	<div class="container">
		<div class="row">
			<div class="col-xl-4"></div>
			<div class="col-xl-4">
				<div class="formwrapper">
                    <?php $this->templates->call_error_template(); ?>
					<form id="forms" method="post" action="login/login_form">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>password</label>
							<input type="password" name="password" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn btn-primary btn-submit">
						</div>
					</form>
                    <div class="forgotpassword"><a href="<?php echo base_url('forgot-password'); ?>">Forgot Password?</a></div>
				</div>
			</div>
			<div class="col-xl-4"></div>
		</div>
	</div>
</div>
