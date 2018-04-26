    
    <?php $__env->startSection('title'); ?> Package <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div id="content">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
		            <a href="<?php echo e(URL::to('package/create')); ?>" class="btn btn-success">Add Package</a>
		            <table class="table">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Downlaod</th>
				                <th>Upload</th>
				                <th>Data Limit</th>
				                <th>FUP Downlaod</th>
				                <th>FUP Upload</th>
				                <th>Charge</th>
				                <th>Billing Period</th>
				                <th>Grace Period</th>
				                <th>Nas</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php if( ! empty( $packages ) ): ?>
				                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <tr>
				                	<td><?php echo e($package->name); ?></td>
				                	
				                    <td><?php echo e($package->bw_download); ?></td>
				                    <td><?php echo e($package->bw_upload); ?></td>
				                    <td><?php echo e($package->bw_data_limit); ?></td>
				                    <td><?php echo e($package->fup_bw_download); ?></td>
				                    <td><?php echo e($package->fup_bw_upload); ?></td>
				                    
				                    <td><?php echo e($package->rate); ?></td>
				                    <td><?php echo e($package->billing_period); ?></td>
				                    <td><?php echo e($package->grace_period); ?></td>
				                    <td><?php echo e($package->nas_ids); ?></td>
				                    <td align="right">
				                    	<a href="<?php echo e(URL::to('package/' . $package->id . '/edit')); ?>" class="btn btn-success">Edit</a>
				                    </td>
				                    <td align="right">
				                    	<form method="post" action="<?php echo e(URL::to('package/' . $package->id )); ?>">
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