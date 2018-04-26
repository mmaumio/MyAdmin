    
    <?php $__env->startSection('title'); ?> Create Nas! <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
            <div class="row justify-content-center">
		        <div class="col-md-6">
		            <h2>Add New Nas</h2>
		            <form action="<?php echo e(route('nass.store')); ?>" method="post">
		            	<div class="form-group <?php echo e($errors->has('nas_ip') ? 'has-error' : ''); ?>">
		                    <label for="Nas IP">IP</label>
		                    <input class="form-control" type="text" name="nas_ip" id="nas-ip" value="<?php echo e(Request::old('nas_ip')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('shortname') ? 'has-error' : ''); ?>">
		                    <label for="Short Name">Short Name</label>
		                    <input class="form-control" type="text" name="shortname" id="shortname" value="<?php echo e(Request::old('shortname')); ?>"></input>
		                </div>
		                
		                <div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
		                    <label for="type">Type</label>
		                    <select name="type" id="type" class="form-control">
		                    	<option selected>MikroTik</option>
		                    	<option>Cisco</option>
		                    	<option>Chillispot</option>
		                    	<option>Other</option>
		                    </select>
		                </div>
		                <div class="form-group <?php echo e($errors->has('ports') ? 'has-error' : ''); ?>">
		                    <label for="ports">Ports</label>
		                    <input class="form-control" type="text" name="ports" id="ports" value="<?php echo e(Request::old('ports')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('secret') ? 'has-error' : ''); ?>">
		                    <label for="secret">Secret</label>
		                    <input class="form-control" type="text" name="secret" id="secret" value="<?php echo e(Request::old('secret')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
		                	<label for="Description">Description</label>
		                    <textarea class="form-control" type="text" name="description" id="description">
		                    <?php echo e(Request::old('description')); ?>	
		                    </textarea>
		                </div>
		                <div class="form-group <?php echo e($errors->has('api_username') ? 'has-error' : ''); ?>">
		                    <label for="API Username">API Username</label>
		                    <input class="form-control" type="text" name="api_username" id="api-username" value="<?php echo e(Request::old('api_username')); ?>"></input>
		                </div>
		                <div class="form-group <?php echo e($errors->has('api_password') ? 'has-error' : ''); ?>">
		                    <label for="API Password">API Password</label>
		                    <input class="form-control" type="text" name="api_password" id="api-password" value="<?php echo e(Request::old('api_password')); ?>"></input>
		                </div>

		                <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
		                <button type="submit" class="btn btn-primary">Submit</button>
		            </form>
		        </div>
		     </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>