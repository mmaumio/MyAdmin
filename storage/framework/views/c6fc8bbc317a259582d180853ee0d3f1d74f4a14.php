    
    <?php $__env->startSection('title'); ?> Nas <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="<?php echo e(URL::to('nass/create')); ?>" class="btn btn-success">Add Nas</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>IP</th>
				                <th>Short Name</th>
				                <th>Type</th>
				                <th>Ports</th>
				                <th>Secret</th>
				                <th>Description</th>
				                <th>API Username</th>
				                <th>API Password</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php if( ! empty( $nass ) ): ?>
				                <?php $__currentLoopData = $nass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <tr>
				                	<td><?php echo e($nas->nas_ip); ?></td>
				                    <td><?php echo e($nas->shortname); ?></td>
				                    <td><?php echo e($nas->type); ?></td>
				                    <td><?php echo e($nas->ports); ?></td>
				                    <td><?php echo e($nas->secret); ?></td>
				                    <td><?php echo e($nas->description); ?></td>
				                    <td><?php echo e($nas->api_username); ?></td>
				                    <td><?php echo e($nas->api_password); ?></td>
				                    <td align="right">
				                    	<a href="<?php echo e(URL::to('nas/' . $nas->id . '/edit')); ?>" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="<?php echo e(URL::to('nas/' . $nas->id )); ?>">
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