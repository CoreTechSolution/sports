<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<form method="post" action="admin/add_category_form" enctype="multipart/form-data">
				<div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Sports Name</label>
                            <input type="text" name="category_name" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Sports Icon</label>
                            <input type="file" name="sports_icon" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary btn-submit" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>