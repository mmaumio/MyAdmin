    
    <?php $__env->startSection('title'); ?> Location <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="<?php echo e(URL::to('location/create')); ?>" class="btn btn-success">Add Location</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Address</th>
				                <th>Map</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php if( ! empty( $locations ) ): ?>
				                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <tr>
				                	<td><?php echo e($location->name); ?></td>
				                	<td><?php echo e($location->address); ?></td>
				                	<td><?php echo e($location->map); ?></td>
				                    <td align="right">
				                    	<a href="<?php echo e(URL::to('location/' . $location->id . '/edit')); ?>" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="<?php echo e(URL::to('location/' . $location->id )); ?>">
						                    <input type="hidden" name="_method" value="DELETE">
						                   	<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"></input>
						                    <input class="btn btn-warning" type="submit" value="Delete">
					                    </form>
				                    </td>
				                </tr>    
				                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            <?php else: ?>    
				                <tr>
				                    <td>No Results Found</td>
				                </tr>
				            <?php endif; ?>
				        </tbody>
				    </table>
				</div>
			</div>	       
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>