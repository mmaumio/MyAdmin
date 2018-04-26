<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?php echo e(route('profile.update')); ?>" method="post">
                <div class="form-group <?php echo e($errors->has('company') ? 'has-error' : ''); ?>">
                    <label for="company">Company</label>
                    <input class="form-control" type="text" name="company" id="company" value="<?php echo e($profile->company); ?>"></input>
                </div>
                <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                    <label for="Phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" value="<?php echo e($profile->phone); ?>"></input>
                </div>
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo e($profile->email); ?>"></input>
                </div>
                <div class="form-group <?php echo e($errors->has('address_line1') ? 'has-error' : ''); ?>">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address_line1" id="address-line1" value="<?php echo e($profile->address_line1); ?>"></input>
                    <input class="form-control" type="text" name="address_line2" id="address-line2" value="<?php echo e($profile->address_line2); ?>"></input>
                </div>
                
                <div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city" value="<?php echo e($profile->city); ?>"></input>
                </div>
                <div class="form-group <?php echo e($errors->has('state') ? 'has-error' : ''); ?>">
                    <label for="state">State/Province/District</label>
                    <input class="form-control" type="text" name="state" id="state" value="<?php echo e($profile->state); ?>"></input>
                </div>
                
                <div class="form-group <?php echo e($errors->has('country') ? 'has-error' : ''); ?>">
                    <label for="zip">Country</label>
                    <input class="form-control" type="text" name="country" id="country" value="<?php echo e($profile->country); ?>"></input>
                </div>
                <div class="form-group <?php echo e($errors->has('zip') ? 'has-error' : ''); ?>">
                    <label for="zip">Postal/Zip Code</label>
                    <input class="form-control" type="text" name="zip" id="zip" value="<?php echo e($profile->zip); ?>"></input>
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