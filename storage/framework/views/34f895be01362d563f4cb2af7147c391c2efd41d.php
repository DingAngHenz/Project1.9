
<?php $__env->startSection('content'); ?>

<style>
    td .prc{
        width: 200px;
    }

    .poNotesArea textarea{
        width: 100%;
        height: 100px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .poStatus input {
        outline: none;
        border: none;
    }

    .addRow {
        width: 99%;
    }

    .notesandstatus {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    .printPOBtn {
        background-color: #5ab071;
        border: none;
        padding: 10px 15px;
        border-radius: 10px;
    }

    .addPo{
        border: 1px solid #8b8b8b;
        border-radius: 5px 5px 0px 0px;
        padding: 15px;
        display: flex;
        justify-content: space-between;
    }


</style>

<!--Page topic-->
<!--Page topic-->

<div class="content" id="pwrapper1">
  <div class="">
        
        <div class="pageTopic addPo">
            <div><h2>Order Detail</h2></div>
        </div>

  </div>
  
  <div class="form addProForm row">
  <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $or): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="POST" , action="<?php echo e(route('updateOrder',['id'=>$or->orderID])); ?>" action="emaito:<?php echo e($or->useremail); ?>" enctype="multipart/form-data" id="dynamic_form">
        <?php echo csrf_field(); ?>
        
        <div class="addRow">
        <input hidden id="id" name="orderID" value="<?php echo e($or->orderID); ?>" />
            

        </div>
            
            
        <div class="form-group addProRow1">

            <div class="supAddress">
            <label class="" for="Document No"><b>Order Number: #<?php echo e($or->orderID); ?></b></label>
            <div class="">
            <br>
            </div>

            <label class="" for="Document No"><b>Customer Name</b></label>
            <div><input type="text" class="form-control" id="CustomerName" name="CustomerName" value="<?php echo e($or->username); ?>" readonly /></div>
            <label class="" for="Document No"><b>Download Link</b></label>
            <div><input type="text" class="form-control" id="downloadLink" name="downloadLink" value="<?php echo e($or->downloadLink); ?>"  /></div>
           
            

            </div>

        </div>
        
        
        <div class="form-group addProRow2">
            <div class="">
            <br>
            </div>
            <div class="">
            <br>
            </div>

            <label class="" for="Document No"><b>Email Address</b></label>
            <div><input type="text" class="form-control" id="EmailAddress" name="EmailAddress" value="<?php echo e($or->useremail); ?>" readonly /></div>

            <label class="" for="Document No"><b>Contact Number</b></label><span class="colorRed">*</span>
            <div><input type="text" class="form-control" id="ContactNumber" name="ContactNumber" value="<?php echo e($or->contact); ?>" required/></div>

        </div>
        

       
        <div class="form-group addProRow3">
        <table class="table" id="myTable">
        
            <thead>
                <tr>
                <th scope="col" width="3%"></th>
                <th scope="col" width="25%">Order Product</th>
                <th scope="col" width="15%">Order Quantity</th>
                <th scope="col" width="15%">Price</th>
                <th scope="col" width="10%">Subtotal</th>
                </tr>
            </thead>
            
            <tbody>
            <?php $__currentLoopData = $orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td></td>
                    <td><?php echo e($ord->name); ?> (<?php echo e($ord->productID); ?>)</td>
                    <input type="text" id="odproid" name="odproid[]" value="<?php echo e($ord->productID); ?>" hidden />
                    <td>
                        <?php echo e($ord->quantity); ?>

                        <input type="number" id="orderqt" name="orderqt[]" value="<?php echo e($ord->quantity); ?>" hidden />
                    </td>
                    <td><?php echo e($ord->price); ?></td>
                    <td id="subtotal"></td>
                    </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td></td>
                    <td></td>
                    <td hidden> 0 </td>
                    <td hidden>0</td>
                    <td hidden></td>
                    <td></td>
                    <td hidden>0</td>
                    <td><b> Shipping <b></td>
                    <td><span id="shippnigVal" style=""><?php echo e($or->amount); ?></span></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td hidden> 0 </td>
                    <td hidden>0</td>
                    <td hidden></td>
                    <td></td>
                    <td hidden>0</td>
                    <td><b> Total <b></td>
                    <td><span id="totalVal" style=""><?php echo e($or->amount); ?></span></td>
                    </tr>
            </tbody>
        <tfoot>
        
        </tfoot>
            
        </table>

        <br>
            
        </div>

        <div class="form-group printpoaddProRow4">
        <?php if($or->status == 'Cancelled'): ?>
        <label class="" for="Order status"> <b>Status</b> </label><span class="colorRed">*</span>
                    <div class="">
                        <button class="deleteBtn" style="color:white;">
                            <a href="#"><?php echo e($or->status); ?></a> 
                        </button>
                    </div>
        <?php elseif($or->status == 'Fulfilled'): ?>
        <label class="" for="Order status">Status</label><span class="colorRed">*</span>
                    <div class="">
                    <select name="status" class="form-control" required style="width: 50%;" required>
                        <option value="">---Select Status---</option>
                        <option value="Fulfilled" selected>Fulfilled</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                    </div>
         
            <div class="">
            <Button type="button" class="backBtn">
                <a href="<?php echo e(route('viewOrder')); ?>" class="" title="Back" data-toggle="tooltip">Back</a>
            </Button>
            <button type="submit" class="subBtn" title="Submit">Submit</button>
            </div>
        <?php else: ?>
            <label class="" for="Order status">Status</label>
                    <div class="">
                    <select name="status" class="form-control" required style="width: 50%;">
                        <option value="">---Select Status---</option>
                        <option value="Fulfilled">Fulfilled</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                    </div>

           
            <div class="">
            <Button type="button" class="backBtn">
                <a href="<?php echo e(route('viewOrder')); ?>" class="" title="Back" data-toggle="tooltip">Back</a>
            </Button>
            <button type="submit" class="subBtn" title="Submit">Submit</button>
            </div>
            <?php endif; ?>
        </div>
      
        <div class="form-group printpoaddProRow5">

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>

  </div>
</div>


<div id="elementH"></div>



<script>

var table = document.getElementById("myTable"), sumVal=0, subtotal=0;
var total = parseFloat(document.getElementById("totalVal").innerHTML);

for(var i = 1; i < table.rows.length; i++){
    subtotal = parseFloat(table.rows[i].cells[2].innerHTML) * parseFloat(table.rows[i].cells[3].innerHTML);
    table.rows[i].cells[4].innerHTML = "RM " + subtotal;
    sumVal += subtotal;
}

document.getElementById("shippnigVal").innerHTML = "RM " + (total - sumVal);
console.log(total);

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/admin/editOrder.blade.php ENDPATH**/ ?>