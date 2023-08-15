
<?php $__env->startSection('content'); ?>

<style>
</style>

<!--Page topic-->
<!--Page topic-->

<div class="content" id="pwrapper1">
  <div class="">
          <div class="pageTopic addPro"><h2>User Detail</h2></div>
  </div>

  <div class="form addProForm row">
        <form method="POST" action="<?php echo e(route('addUser')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group addProRow1">
            <label class="" for="supplierName">User Name</label>
            <div class="">
                <input type="text" class="form-control" id="name" name="name" style=" background:transparent;">
            </div>
            <label class="" for="contactPerson">password</label>
            <div class="col-md-12 form-group">
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required autocomplete="new-password" style=" background:transparent;">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label class="" for="contactPerson">Confrim Password</label>
            </div>
            <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required autocomplete="new-password" style=" background:transparent;">
            </div>
        </div>

        <div class="form-group addProRow2">
            <label class="" for="contactPerson">Email</label>
            <div class="col-md-12 form-group">
                <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="<?php echo e(old('email')); ?>" required autocomplete="email" style=" background:transparent;">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <label class="" for="CompanyEmail">Contact Number</label>
            <div class="">
                <input type="text" class="form-control" id="contact" name="contact" style=" background:transparent;" >
            </div>
        </div>

       

        <div class="form-group addProRow4">
            <div class="">
            <Button type="button" class="backBtn">
                <a href="<?php echo e(route('viewUser')); ?>" class="" title="Back" data-toggle="tooltip">Back</a>
            </Button>
            <button type="submit" class="subBtn" title="Submit">Save</button>
            </div>
        </div>

        <div class="form-group addProRow5">

        </div>
        </form>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.8\resources\views/admin/insertUser.blade.php ENDPATH**/ ?>