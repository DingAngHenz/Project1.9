
<?php $__env->startSection('content'); ?>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }
	.product-card {
  width: 350px; 
  height: 350px;
   
}
.row{
  position: relative;
  transition: 0.2s ease;
  min-width:200px;
  padding:2%;
  border: 1px solid #cce7d0;
  border-radius: 20px;
  cursor: pointer;
  
  margin:15px 80;
}
.product_count{
	display:inline-block;
	position:relative;
	margin-bottom:24px
}

.product_count input{
	width:76px;
	border:1px solid #eeeeee;
	border-radius:3px;
	padding-left:10px
}
.product_count button{
	
	border:none;
}
.button--active{
	background:#384aeb;color:#fff
}
.button-review{
	border:none;
	padding:12px 40px;border-radius:30px
	
}
.button:hover{
	border-color:#384aeb;
	background:transparent;
	color:#222
}
.nav-tabs{
	
	display:block;
	border:none;
	padding:10px 0px
}
.product_description_area .nav.nav-tabs li{
	display:inline-block;
	
}


.product_description_area .nav.nav-tabs li a{
	padding:0px;
	border:none;
	line-height:38px;
	background:#0000;
	border:1px solid #eeeeee;
	border-radius:30px;
	padding:0px 30px;
	color:#000000;
	
}

.product_description_area .nav.nav-tabs li a.active{
	color:#fff;
	background:#000000;
	border-color:#384aeb
}
.tab-content p {
	word-wrap: break-word;
}


    </style>
  <!--================Single Product Area =================-->
  <?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
      Product already exists in cart
  </div>
<?php endif; ?>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



  <div class="product_image_area" >
	<div class="container">
			<div class="row s_product_inner">

				<input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($product->id); ?>">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo e(asset('images/')); ?>/<?php echo e($product->image); ?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
                    <form action="<?php echo e(route('addCart')); ?>" method="post">
                    <?php echo csrf_field(); ?>
					<div class="s_product_text">
						<h3><?php echo e($product->name); ?></h3>
						<h2>RM <?php echo e($product->price); ?></h2>
						<div class="list">
							<div style="color:blue"><a><span>Product ID</span> : <?php echo e($product->productID); ?></a></div>
							<div style="color:blue"><a><span>Availibility</span> : <?php echo e($product->quantity); ?> (In Stock) </a></div >
</div>
						<br>
						<div class="product_count">
              <label for="qty">Quantity:</label>
              <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="fa-solid fa-plus"></i></button>
							<input type="number" name="quantity" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty" max="<?php echo e($product->quantity); ?>" min="1">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
               class="reduced items-count" type="button"><i class="fa-solid fa-minus"></i></i></button>

						</div><br>
                        <input type="hidden" class="form-control" id="productID" name="productID" value="<?php echo e($product->productID); ?>">
                        <input type="hidden" class="form-control" id="productCartID" name="productCartID" value="<?php echo e($product->productID); ?>-<?php echo e($uid); ?>">
                        <button type="submit" class="button button--active button-review">Add to cart</button>
						<div class="card_area d-flex align-items-center">
						</div>
					</div>
			</form>
        	</div>

			</div>
		</div>
	</div>

	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?php echo e($product->description); ?></p>
					<p></p>
				</div>
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('shoppingPageLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SCHOOL\project1.9\resources\views/shoppingShowProductDetails.blade.php ENDPATH**/ ?>