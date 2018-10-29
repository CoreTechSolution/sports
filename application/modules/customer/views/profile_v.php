<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <?php $this->templates->call_error_template(); ?>
            <form method="post" action="<?php echo base_url($user_role.'/profile'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" autocomplete="off" value="<?php echo $get_users->first_name; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" autocomplete="off" value="<?php echo $get_users->last_name; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="email_address" class="form-control" autocomplete="off" readonly value="<?php echo $get_users->email; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Profile Image</label>
                            <input type="file" name="profile_img" class="form-control">
                        </div>
                    </div>
                    <?php if(!empty($get_users->profile_img)){ ?>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Current Image</label>
                            <img src="<?php echo  $get_users->profile_img; ?>" class="editable_img" alt="">
                        </div>
                    </div>
                    <?php }  ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="save" class="btn btn-primary btn-submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
