
<?php $__env->startSection('content'); ?>

<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="common-filter">
                <?php $__currentLoopData = $categoryID; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('search.product')); ?>" method="POST" id="filter">
                <?php echo csrf_field(); ?>
                  <ul>
                    <li class="filter-list">
                      <a href="<?php echo e(route('getCatProduct',['catid'=>$category->categoryID])); ?>"><?php echo e($category->name); ?></a>
                    </li>
                  </ul>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select onchange="window.location.href=this.options[this.selectedIndex].value;">
                <option value="1">--- Select Filter ---</option>
                <option value="<?php echo e(url('shoppingShowProductPage')); ?>">Default sorting</option>
                <option value="<?php echo e(url('priceLowToHigh')); ?>">Price low to high</option>
                <option value="<?php echo e(url('priceHighToLow')); ?>">Price high to low</option>
              </select>
            </div>
            <div class="sorting mr-auto">

            </div>
            <div>
            </form>
              <form class="input-group filter-bar-search" method="POST" action="<?php echo e(route('search.product')); ?>">
              <?php echo csrf_field(); ?>
                <input type="text" name="keyword" type="search" placeholder="Search Products" aria-label="Search">
                <div class="input-group-append">
                  <button type="submit"><i class="ti-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Products -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($product->quantity == 0): ?>
            <div></div>
            <?php else: ?>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <img class="card-img" src="<?php echo e(asset('images/')); ?>/<?php echo e($product->image); ?>" alt="" Height="">
                  </div>
                  <div class="card-body">
                    <p><?php echo e($product->catname); ?></p>
                    <h4 class="card-product__title"><a href="<?php echo e(route('shoppingShowProductDetails',['id'=>$product->id])); ?>"><?php echo e($product->name); ?></a></h4>
                    <p class="card-product__price">RM <?php echo e($product->price); ?></p>

                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="paging">
            <span><?php echo e($products->links()); ?></span>
            </div>
          </section>


          <!-- Products -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('shoppingPageLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.8\resources\views/shoppingShowProductPage.blade.php ENDPATH**/ ?>