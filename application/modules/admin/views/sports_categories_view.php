<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div style="text-align: right"><a href="<?php echo base_url('admin/add-category') ?>" class="btn btn-primary btn-primary-link">Add Category</a></div>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Category</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php if(!empty($sports_categories)){ ?>
					<?php foreach($sports_categories as $sports_category) { ?>
					<tr>
						<td><?php echo $sports_category['category_name']; ?></td>
						<td><a href="<?php echo base_url('admin/delete_category'); ?>/?category_id=<?php echo $sports_category['category_id']; ?>">Delete</a></td>
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