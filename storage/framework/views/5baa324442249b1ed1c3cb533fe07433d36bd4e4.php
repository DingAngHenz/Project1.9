
<?php $__env->startSection('content'); ?>
<style>
</style>

<!--Page topic-->
<!--Page topic-->

    <div id="pwrapper1">
        <div class="productRow1">
            <div class="">
                <div class="pageTopic"><h2>Customer List</h2></div>
            </div>
            <div class="addProBtn">
                <div class="p-3">
                    <Button type="button" class="addButton">
                        <a href="<?php echo e(route('insertUser')); ?>" class="addProduct" title="New" data-toggle="tooltip"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Customer</a>
                    </Button>
                </div>
            </div>
        </div>

        <div class="iq-search-bar device-search">
            <form method="POST" action="<?php echo e(route('search.user')); ?>" class="searchbox">
            <?php echo csrf_field(); ?>
                Search:<a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button type="submit"></button>
            </form>
        </div>
    </div>

    <div class="row" id="pwrapper2">
            <table class="table">
                <thead>
                    <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>State</th>
                    <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td width="60">
                    </td>
                    <td><?php echo e($user->id); ?></td>

                    <td>
                        <a href="<?php echo e(route('editSupplier',['id'=>$user->id])); ?>" style="color:black; text-decoration:none;"><?php echo e($user->name); ?></a>
                    </td>
                    <td width="400"><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->contact); ?></td>
                    <td><?php echo e($user->state); ?></td>
                    <td>
                        <Button type="button" class="editBtn">
                            <a href="<?php echo e(route('editUser',['id'=>$user->id])); ?>" class="editCategory fa fa-edit" title="Edit" data-toggle="tooltip"></a>
                        </Button>

                        <button type="button" class="deleteBtn">
                            <a href="<?php echo e(route('deleteUser',['id'=>$user->id])); ?>" class="deleteSupplier fa fa-trash-o" title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"></a>
                        </button>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.8\resources\views/admin/showUser.blade.php ENDPATH**/ ?>