<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div style="text-align: right"><a href="<?php echo base_url('admin/add-ground') ?>" class="btn btn-primary btn-primary-link">Add Ground</a></div>
			<br>
			<table class="table">
				<thead>
				<tr>
					<th>Ground Name</th>
					<th>Location</th>
					<th>Category</th>
					<th>Slot Timing</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php if(!empty($grounds)){ ?>
					<?php foreach($grounds as $ground) { ?>
						<tr>
							<td><?php echo $ground['ground_name']; ?></td>
							<td><?php echo $ground['ground_location']; ?></td>
							<td><?php echo $ground['ground_category']; ?></td>
							<td><?php echo $ground['ground_slot_timing']; ?></td>
							<td><a href="<?php echo base_url('admin/delete_ground'); ?>/?ground_id=<?php echo $ground['ground_id']; ?>">Delete</a></td>
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