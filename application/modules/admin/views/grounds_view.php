<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div style="text-align: right"><a href="<?php echo base_url('admin/add-ground') ?>" class="btn btn-primary btn-primary-link">Add Venue</a></div>
			<br>
			<table class="table" data-filtering="false" data-show-toggle="true">
				<thead>
				<tr>
					<th>Venue</th>
					<th>Location</th>
					<th>Category</th>
					<th>Prices</th>
					<th style="text-align: right;"></th>
				</tr>
				</thead>
				<tbody>
				<?php if(!empty($grounds)){ ?>
					<?php foreach($grounds as $venue) { ?>
						<tr>
							<td><?php echo $venue['venue_name']; ?></td>
							<td><?php echo get_location_name_by_id($venue['venue_location']); ?></td>
							<td><?php echo get_category_name_by_id($venue['venue_category']); ?></td>
							<td><?php echo $venue['venue_prices']; ?></td>
							<td style="text-align: right;"><a href="<?php echo base_url('admin/delete_ground'); ?>/?venue_id=<?php echo $venue['venue_id']; ?>">Delete</a></td>
						</tr>
					<?php } ?>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>