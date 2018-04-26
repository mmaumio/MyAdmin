    
    <?php $__env->startSection('title'); ?> Edit Package! <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Edit Package</h2>
		            <form action="<?php echo e(route('package.update', [ 'id' => $package->id ] )); ?>" method="post">
		                <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
		                    <label for="name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="<?php echo e($package->name); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('bw_download') ? 'has-error' : ''); ?>">
		                    <label for="Download">Download</label>
		                    <select class="form-control" name="bw_download" id="bw-download">
		                    	<?php echo e(generate_dropdown(50, 0.5, 'mbps')); ?> 
		                    </select>
		                </div>
		                <div class="form-group <?php echo e($errors->has('bw_upload') ? 'has-error' : ''); ?>">
		                    <label for="Upload">Upload</label>
		                    <select class="form-control" name="bw_upload" id="bw-upload">
		                    	<?php echo e(generate_dropdown(50, 0.5, 'mbps')); ?> 
		                    </select>
		                </div>
		                <div class="form-group <?php echo e($errors->has('bw_data_limit') ? 'has-error' : ''); ?>">
		                    <label for="Data Limit">Data Limit</label>
		                    <select class="form-control" name="bw_data_limit" id="bw-data-limit">
		                    	<option selected>0 Unlimited</option>
		                    	<?php echo e(generate_dropdown(100, 1, 'GB')); ?> 
		                    </select>
		                </div>
		                
		                <div class="form-group <?php echo e($errors->has('fup_bw_download') ? 'has-error' : ''); ?>">
		                    <label for="FUP Download">FUP Download</label>
		                    <select class="form-control" name="fup_bw_download" id="fup-bw-download">
		                    	<?php echo e(generate_dropdown(50, 0.5, 'mbps')); ?> 
		                    </select>
		                </div>
		                <div class="form-group <?php echo e($errors->has('fup_bw_upload') ? 'has-error' : ''); ?>">
		                    <label for="FUP Upload">FUP Uploada</label>
		                    <select class="form-control" name="fup_bw_upload" id="fup-bw-upload">
		                    	<?php echo e(generate_dropdown(50, 0.5, 'mbps')); ?> 
		                    </select>
		                </div>

		                <div class="form-group <?php echo e($errors->has('rate') ? 'has-error' : ''); ?>">
		                    <label for="Charge">Charge</label>
		                    <input class="form-control" type="number" name="rate" id="rate" value="<?php echo e($package->rate); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('billing_period') ? 'has-error' : ''); ?>">
		                    <label for="Billing Period">Billing Period</label>
		                    <select name="billing_period" id="type" class="form-control">
		                    	<option selected>Monthly</option>
		                    	<option>Weekly</option>
		                    	<option>Daily</option>
		                    	<option>Hourly</option>
		                    </select>
		                </div>
		                <div class="form-group <?php echo e($errors->has('grace_period') ? 'has-error' : ''); ?>">
		                    <label for="Grace Period">Grace Period</label>
		                    <input class="form-control" type="number" name="grace_period" id="grace-period" value="<?php echo e($package->grace_period); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('nas_ids') ? 'has-error' : ''); ?>">
		                    <label for="Nas">Nas</label>
		                    <select name="nas_ids" id="type" class="form-control">
		                    	<option selected>MikroTik</option>
		                    	<option>Cisco</option>
		                    	<option>Chillispot</option>
		                    	<option>Other</option>
		                    </select>
		                </div>

		                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
		                 <?php echo e(method_field('PUT')); ?>

		                <button type="submit" class="btn btn-primary">Update</button>
		            </form>
		        </div>
		     </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>