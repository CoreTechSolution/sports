<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="header-separator"></div>
<div class="wrapper10">
	<div class="container">
		<div class="row">
			<div class="col-xl-4"></div>
			<div class="col-xl-4">
				<div class="formwrapper">
					<form id="forms" method="post" action="signup/signup_form">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" autocomplete="off">
						</div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control" autocomplete="off">
                        </div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" autocomplete="off">
						</div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" autocomplete="off">
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
