
<?php $__env->startSection('content'); ?>

<style>
    .tablei td {
        padding:10px;
    }

    .tableii td {
        padding:10px;
    }

    .tablei {
        border-top: solid 1px #c9c9c9;
        border-right: solid 1px #c9c9c9;
        width: 100%;
    }

    .tableii {
        border-top: solid 1px #c9c9c9;
        width: 100%;
    }

    div.tableii{
        text-align:center;
    }

    .orderdetails {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .ordertotal {
        font-size:16px;
    }
    
</style>

<br>

<div class="container">
    
    <table class="table " id="myTable">
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h4>Order detail #<?php echo e($orderid->orderID); ?></h4>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <br>
        <thead>
            <tr>
                <th scope="col" width="20%">Product</th>
                <th width="20%"></th>
                <th scope="col">Price (RM)</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>

        <tbody>
          <?php $__currentLoopData = $od; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                  <td><img src="<?php echo e(asset('images/')); ?>/<?php echo e($ods->image); ?>" alt="" width="150" name="image" class="rounded float-left"> </td>
                  <td><?php echo e($ods->proname); ?> <br> (Product ID: <?php echo e($ods->productID); ?>)</td>
                  <td><?php echo e($ods->price); ?></td>
                  <td><?php echo e($ods->quantity); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="orderdetails">
        <div class="tablei">
            <table >
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td valign="top" >Email: </td>
                        <td >
                            <b><?php echo e($contact->useremail); ?></b>
                        </td>
                    </tr>
    
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>

        <div class="tableii">
            <table>
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="ordertotal">Total amount : <b>RM <?php echo e($contact->amount); ?></b></div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shoppingPageLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/orderDetail.blade.php ENDPATH**/ ?>