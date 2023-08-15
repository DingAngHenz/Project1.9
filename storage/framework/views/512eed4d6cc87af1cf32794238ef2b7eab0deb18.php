
<?php $__env->startSection('content'); ?>

<style>
</style>

<!--Page topic-->

<!--Page topic-->

<div class="" id="pwrapper1">
  <div class="">
      <div class="">
        <div class="pageTopic addPro"><h2>New Category</h2></div>
      </div>
  </div>
  <div class="row editProForm">
  <div class="">
    <form method="POST" , action="<?php echo e(route('addCategory')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>

      <div class="form-group addProRow1">
        <label class="" for="categoryID">Category ID</label><span class="colorRed">*</span>
        <div class="">
          <input type="text" class="form-control" id="CategoryID" name="CategoryID" style="background:transparent;" required>
        </div>
        <label class="" for="Category Name">Name</label><span class="colorRed">*</span>
        <div class="col-md-5">
          <input type="text" class="form-control" id="CategoryName" name="CategoryName" style=" background:transparent;" required>
        </div>
        <label class="" for="Category status">Status</label><span class="colorRed">*</span>
        <div class="">
          <select name="status" class="form-control" required>
            <option value="">---Select Status---</option>
            <option value="Available">Available</option>
            <option value="Unavailable">Unavailable</option>
          </select>
        </div>
        <div class="">
          <Button type="button" class="backBtn">
            <a href="<?php echo e(route('viewCategory')); ?>" class="backToCategory" title="Back" data-toggle="tooltip">Back</a>
          </Button>
          <button type="submit" class="subBtn" title="Submit">Submit</button>
        </div>
      </div>
    </form>
    
  </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/admin/InsertCategory.blade.php ENDPATH**/ ?>