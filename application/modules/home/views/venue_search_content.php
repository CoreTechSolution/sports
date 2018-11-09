<div class="header-separator"></div>
<div class="wrapper11">
	<div class="container">
		<div class="row">
			<div class="col-xl-3">
                <div class="content-filter-area">
                    <!-- hidden sort control -->
	                <?php if(!empty($venus)){ ?>

                    <?php } ?>
                    <div
                        style="display: none"
                        data-jplist-control="hidden-sort"
                        data-group="group1"
                        data-path=".name"
                        data-order="asc"
                        data-type="text"></div>
                    <!-- text filter control -->
                    <div>
                        <input
                            data-jplist-control="textbox-filter"
                            data-group="group1"
                            data-name="my-filter-1"
                            data-path=".name"
                            type="text"
                            value=""
                            data-clear-btn-id="name-clear-btn"
                            placeholder="Search by Name" />
                        <button type="button" id="name-clear-btn">Clear</button>
                    </div>
                    <!-- Booking Method filter control -->
                    <div class="filter-separator"></div>
                    <h4>Booking Method</h4>
                    <label>
                        <input
                                type="checkbox"
                                data-jplist-control="checkbox-text-filter"
                                data-path=".format"
                                data-group="group1"
                                data-name="name1"
                                value="online" />
                        Online
                    </label>
                    <!-- Formats filter control -->
                    <div class="filter-separator"></div>
                    <h4>Formats</h4>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".format"
                            data-group="group1"
                            data-name="name1"
                            value="indoor" />
                        Indoor
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".format"
                            data-group="group1"
                            data-name="name1"
                            value="outdoor" />
                        Outdoor
                    </label>
                    <!-- Surfaces filter control -->
                    <div class="filter-separator"></div>
                    <h4>Surfaces</h4>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Artificial" />
                        Artificial
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Grass" />
                        Grass
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Hard (Macadam)" />
                        Hard (Macadam)
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Indoor" />
                        Indoor
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Synthetic Rubber" />
                        Synthetic Rubber
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".surface"
                            data-group="group1"
                            data-name="name1"
                            value="Wood/Parquet" />
                        Wood/Parquet
                    </label>
                    <!-- Facilities filter control -->
                    <div class="filter-separator"></div>
                    <h4>Facilities</h4>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="Changing Rooms" />
                        Changing Rooms
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="Floodlights" />
                        Floodlights
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="Free Parking" />
                        Free Parking
                    </label>
                    <!-- Radius filter control -->
                    <div class="filter-separator"></div>
                    <h4>Radius</h4>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="1" />
                        Within 1 mile
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="3" />
                        Within 3 mile
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="5" />
                        Within 5 mile
                    </label>
                    <br>
                    <label>
                        <input
                            type="checkbox"
                            data-jplist-control="checkbox-text-filter"
                            data-path=".facilities"
                            data-group="group1"
                            data-name="name1"
                            value="10" />
                        Within 10 mile
                    </label>
                </div>
            </div>
			<div class="col-xl-9">
				<div class="content-area">
					<?php if(!empty($venus)){ ?>
                    <!-- content to filter -->
                    <div data-jplist-group="group1">
						<?php foreach($venus as $venue){ ?>
                            <!-- item -->
                            <div data-jplist-item>
                                <div class="venue_wrapper">
                                    <?php //print_r($venue); ?>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="venue_img"><img src="<?php echo $venue->venue_featured_img; ?>"></div>
                                        </div>
                                        <div class="col-xl-5">
                                            <h2 class="name"><?php echo ucfirst($venue->venue_name); ?></h2>
                                            <p><?php echo $venue->venue_address; ?><?php if(!empty($venue->venue_zipcode)){ echo ', '.$venue->venue_zipcode; } ?></p>
                                            <p class="format"><strong>Format: </strong><?php echo $venue->venue_format; ?></p>
                                            <p class="surface"><strong>Surface: </strong><?php echo $venue->venue_surface; ?></p>
                                            <div class="distance_wrapper"><p>0 Miles Away</p></div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="explore_venue"><a href="<?php echo base_url('venue/'.$venue->slug); ?>">Explore Venue</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php } ?>
                            <!-- no results control -->
                            <div data-jplist-control="no-results" data-group="group1" data-name="no-results">No Results Found</div>
                    </div>
					<?php } else { ?>
						<p>0 Match found</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/js/jplist.min.js'); ?>"></script>
<script>
    jplist.init();
</script>