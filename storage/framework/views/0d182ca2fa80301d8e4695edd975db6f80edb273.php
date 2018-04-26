    
    <?php $__env->startSection('title'); ?> Create Location! <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New Location</h2>
		            <form action="<?php echo e(route('location.store')); ?>" method="post">

		            	<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="<?php echo e(Request::old('name')); ?>"></input>
		                </div>

		                <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
		                    <label for="Address">Address</label>
		                    <textarea class="form-control" type="text" name="address" id="address"><?php echo e(Request::old('address')); ?></textarea>
		                </div>

		                <div class="form-group <?php echo e($errors->has('map') ? 'has-error' : ''); ?>">
		                    <label for="Map">Map</label>
		                    <input class="form-control" type="text" name="map" id="map" value="<?php echo e(Request::old('map')); ?>"></input>
		                </div>

		                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>