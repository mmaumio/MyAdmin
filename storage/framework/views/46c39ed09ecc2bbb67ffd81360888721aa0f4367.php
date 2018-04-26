    
    <?php $__env->startSection('title'); ?> Create Role! <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New Role</h2>
		            <form action="<?php echo e(route('role.store')); ?>" method="post">

		            	<div class="form-group <?php echo e($errors->has('value') ? 'has-error' : ''); ?>">
		                    <label for="Name">Name</label>
		                    <input class="form-control" type="text" name="value" id="nas-ip" value="<?php echo e(Request::old('value')); ?>"></input>
		                </div>

		                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>