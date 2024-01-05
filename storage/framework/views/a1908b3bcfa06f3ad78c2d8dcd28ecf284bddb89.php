
<?php $__env->startSection('title'); ?>
        Dishes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- products -->
<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
				<div class="product-top">
					<h4>Food Collection</h4>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">


				<?php $__currentLoopData = $categoryDish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="<?php echo e(asset($dish->dish_image)); ?>" style="width: 277px; height:182px" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5><?php echo e($dish->dish_name); ?></h5>  
									</div> 
								</div>
								<div class="back">
									<h4><?php echo e($dish->dish_name); ?></h4>
									<p><?php echo e($dish->dish_detail); ?>.</p>
									<h4>RM<?php echo e($dish->full_price); ?></h4>
									
							<!-- // Food collection display -->

									<form action="<?php echo e(route('add_to_cart')); ?>" method="post">
										<?php echo csrf_field(); ?>
										<input type="hidden" name="dish_id" value="<?php echo e($dish->dish_id); ?>">
										<input type="hidden" name="qty" value="Quantity">
										<a href="#" data-toggle="modal" data-target="#myModal1<?php echo e($dish->dish_id); ?>">
											More<span class="w3-agile-line"> </span> <i class="fa fa-cart-plus" aria-hidan="true"></i>Add to cart
										</a>

									</form>
								</div>
							</div>
						</div> 
					</div> 

						<!-- modal --> 
	<div class="modal video-modal fade" id="myModal1<?php echo e($dish->dish_id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="<?php echo e(asset($dish->dish_image)); ?>" style="width: 277px; height:182px" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right single-top-right"> 
							<h3 class="item_name"><?php echo e($dish->dish_name); ?></h3>
							<p><?php echo e($dish->dish_details); ?></p>
							<div class="single-rating">
								<ul>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li class="rating">20 reviews</li>
									<!-- <li><a href="#">Add your review</a></li> -->
								</ul> 
							</div>
							<div class="single-price">
								<ul>

									<li>RM<?php echo e($dish->full_price); ?></li>
									<!-- <?php if($dish->full_price==null): ?> -->
									<!-- <?php else: ?>
										<li>Half RM<?php echo e($dish->half_price); ?><li>
										<input type="checkbox" name="half_price">
									<?php endif; ?> -->
								</ul>	
							</div> 
							<p class="single-price-text">Wish to Order? Just add to cart and make payment now!</p>
							<form action="<?php echo e(route('add_to_cart')); ?>" method="post">
								<?php echo csrf_field(); ?>
								<input type="hidden" name="dish_id" value="<?php echo e($dish->dish_id); ?>" />
								<h4>Quantity</h4><input type="number" name="qty" min="1" /> 
								<button type="submit" class="w3ls-cart" >
									<i class="fa fa-cart-plus" aria-hidden="true"></i> 
									Add to cart
								</button>
							</form>
							<!-- <a href="#" class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</a> -->
							<!-- <div class="single-page-icons social-icons"> 
								<ul>
									<li><h4>Share on</h4></li>
									<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
									<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
									<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
								</ul>
							</div>  -->
						</div> 
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	<!-- //modal -->

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Categories</h4>            
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-center">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li ><a href="<?php echo e(route('category_dish', ['category_id'=> $category->category_id])); ?>" ><?php echo e($category->category_name); ?></a></li>	
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</ul>
						</div>
					</div>
			</div>
			<div class="clearfix"> </div> 
		</div>

	</div>
	<!-- //products --> 
	<!-- <div class="container"> 
		<div class="w3agile-deals prds-w3text"> 
			<h5>Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.</h5>
		</div>
	</div> -->


	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/FrontEnd/include/dish.blade.php ENDPATH**/ ?>