<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <?php $this->templates->call_error_template(); ?>
            <?php echo form_open_multipart(base_url($method.'/'.$affiliates[0]->id),array('method'=>'post')); ?>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <?php echo form_input('title',$affiliates[0]->title,array('class'=>'form-control','autocomplete'=>'off')); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Link</label>
                        <?php echo form_input('link',$affiliates[0]->link,array('class'=>'form-control','autocomplete'=>'off')); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner_img" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                        <div class="form-group">
                            <img src="<?php echo  image_show($affiliates[0]->banner_img); ?>" class="editable_img" alt="">
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="submit" name="save" class="btn btn-primary btn-submit" value="Update">
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
