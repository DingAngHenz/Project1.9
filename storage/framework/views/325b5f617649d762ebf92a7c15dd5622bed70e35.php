
<?php $__env->startSection('content'); ?>

<style>
</style>

<!--Page topic-->
<!--Page topic-->

<div class="" id="pwrapper1">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="">
          <div class="pageTopic addPro"><h2><?php echo e($product->name); ?></h2></div>
      </div>

    <div class="form editProForm">
            <form method="POST", action="<?php echo e(route('updateProduct')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($product->id); ?>">

                <div class="form-group addProRow3">
                    <div class=""></div>
                    <div class="">
                    <img src="<?php echo e(asset('images/')); ?>/<?php echo e($product->image); ?>" alt="" width="10%">
                    </div>
                </div>

                <div class="form-group addProRow1">
                    <label class="" for="Product ID">Product ID</label>
                    <div class="">
                        <input type="text" class="form-control" id="productID" name="productID" value="<?php echo e($product->productID); ?>">
                    </div>
                    <label class="" for="Product Name">Product Name</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productName" name="productName" value="<?php echo e($product->name); ?>">
                    </div>
                    
                    <label class="" for="Product Image">Image</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="file" class="form-control" id="product-image" name="product-image" value="<?php echo e($product->image); ?>">
                    </div>
                </div>

                <div class="form-group addProRow2">
                    <label class="" for="Product Price">Price</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="productPrice" name="productPrice" value="<?php echo e($product->price); ?>">
                    </div>
                   
                    <label class="" for="Product Quantity">Quantity</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="number" class="form-control" id="productQuantity" name="productQuantity" value="<?php echo e($product->quantity); ?>">
                    </div>
                    <label class="" for="Product Quantity">DownloadLink</label><span class="colorRed">*</span>
                    <div class="">
                        <input type="text" class="form-control" id="downloadLink" name="downloadLink" value="<?php echo e($product->downloadLink); ?>">
                    </div>
                    <label class="" for="Category ID">Category</label><span class="colorRed">*</span>
                    <div class="">
                    <select name="categoryID" id="categoryID" class="form-control">

                        <?php $__currentLoopData = $categoryID; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->categoryID); ?>"
                            <?php if($product->categoryID==$category->categroyID): ?>
                                selected
                            <?php endif; ?>
                                ><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    </div>
                  
                   

                <div class="form-group addProRow3">
                    <label class="" for="Product Desciption">Description</label><span class="colorRed">*</span>
                    <div class="">
                        <textarea type="text" class="form-control" id="productDescription" name="productDescription" value=""><?php echo e($product->description); ?></textarea>
                    </div>
                </div>

                <div class="form-group addProRow4">
                    <label class="" for="Brand status">Status</label><span class="colorRed">*</span>
                    <div class="">
                    <?php if($product->status == 'Available'): ?>
                    <select name="status" class="form-control" required>
                        <option value="">---Select Status---</option>
                        <option value="Available" selected>Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    <?php elseif($product->status == 'Unavailable'): ?>
                    <select name="status" class="form-control" required>
                        <option value="">---Select Status---</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable" selected>Unavailable</option>
                    </select>
                    <?php endif; ?>
                    </div>
                    <div class="">
                    <Button type="button" class="backBtn">
                        <a href="<?php echo e(route('viewProduct')); ?>" class="backToCategory" title="Back" data-toggle="tooltip">Back</a>
                    </Button>
                    <button type="submit" class="subBtn" title="Submit">Submit</button>
                    </div>
                </div>

                <div class="form-group addProRow5"></div>

            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/admin/editProduct.blade.php ENDPATH**/ ?>