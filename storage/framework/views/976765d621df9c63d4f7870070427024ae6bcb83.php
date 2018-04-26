    
    <?php $__env->startSection('title'); ?> Create User! <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New User</h2>
		            <form action="<?php echo e(route('serviceuser.store')); ?>" method="post">
		            	<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
		                    <label for="name">Name</label>
		                    <input class="form-control" type="text" name="name" id="name" value="<?php echo e(Request::old('name')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
		                    <label for="Email">Email</label>
		                    <input class="form-control" type="text" name="email" id="user-group" value="<?php echo e(Request::old('email')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>">
                            <label for="password"><?php echo e(__('Password')); ?></label>

         
                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            
                        </div>
		                <div class="form-group <?php echo e($errors->has('mobilephone') ? 'has-error' : ''); ?>">
		                    <label for="Mobile Phone">Mobile Phone</label>
		                    <input class="form-control" type="text" name="mobilephone" id="mobilephone" value="<?php echo e(Request::old('mobilephone')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('address_line1') ? 'has-error' : ''); ?>">
		                    <label for="Address Line 1">Address Line 1</label>
		                    <input class="form-control" type="text" name="address_line1" id="address-line" value="<?php echo e(Request::old('address_line1')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('package_id') ? 'has-error' : ''); ?>">
		                    <label for="Package Name">Package Name</label>
		                    <select name="package_id" id="type" class="form-control">
		                    	<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                    		<option><?php echo e($package['name']); ?></option>/
		                    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    </select>
		                </div>

		                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>