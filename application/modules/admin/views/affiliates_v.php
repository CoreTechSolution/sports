<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div style="text-align: right"><a href="<?php echo base_url('admin/add_affiliate') ?>" class="btn btn-primary btn-primary-link">Add</a></div>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Banner</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php if(!empty($affiliates)){ ?>
                    <?php $count=1; ?>
                    <?php foreach($affiliates as $affiliate) { ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><img src="<?php echo image_show($affiliate->banner_img); ?>" alt="" class="row_preview_img"></td>
                            <td><?php echo $affiliate->title; ?></td>
                            <td><?php echo $affiliate->link;; ?></td>
                            <td><?php echo $affiliate->status;; ?></td>
                            <td><a class="row_edit_link" href="<?php echo base_url('admin/delete_category'); ?>/=<?php echo $affiliate->id; ?>"><i class="fas fa-edit"></i> Edit</a><br>
                                <a class="row_delete_link" href="javascript:void(0)" onclick="delete_data(<?php echo $affiliate->id; ?>,'id','affiliates');"><i class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
            <link rel="stylesheet" media="all" href="<?php echo  base_url('/assets/css/footable.bootstrap.min.css'); ?>" />
            <script src="<?php echo base_url('/assets/js/footable.js'); ?>" type="text/javascript"></script>

        </div>
    </div>
</div>
