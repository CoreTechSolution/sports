<div class="row">
	<div class="col-md-12">
		<div class="white-box">
            <div style="text-align: right"><a href="<?php echo base_url('admin/add-venue') ?>" class="btn btn-primary btn-primary-link">Add Location</a></div>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>City</th>
                    <th style="text-align: right;"></th>
                </tr>
                </thead>
                <tbody>
				<?php if(!empty($venues)){ ?>
					<?php foreach($venues as $venue) { ?>
                        <tr>
                            <td><?php echo $venue['location_name']; ?></td>
                            <td style="text-align: right;"><a href="<?php echo base_url('admin/delete_venue'); ?>/?location_id=<?php echo $venue['location_id']; ?>">Delete</a></td>
                        </tr>
					<?php } ?>
				<?php } ?>
                </tbody>
            </table>
            <link rel="stylesheet" media="all" href="<?php echo  base_url('/assets/css/footable.bootstrap.min.css'); ?>" />
            <script src="<?php echo base_url('/assets/js/footable.js'); ?>" type="text/javascript"></script>
            <script>
                jQuery(function(){
                    jQuery('.table').footable();
                });
            </script>
		</div>
	</div>
</div>