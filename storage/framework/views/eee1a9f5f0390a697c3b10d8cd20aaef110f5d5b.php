<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header">
	<!-- header-one --> 
				<div class="container">
					<!-- <div class="w3ls-header-left">
						<p>Free home delivery at your doorstep For Above $30</p>
					</div> -->
					<div class="w3ls-header-right">
						<ul> 
							<!-- <li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
							</li>  -->


		
<!-- Direct to logout/ login/  -->

							<!-- <?php if(Session::get('customer_id')): ?>
							<li class="head-dpdn">
								<a href="#" onclick="document.getElementById('customerLogout').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
								<form action="<?php echo e(route('log_out')); ?>" id="customerLogout" method="POST">

								<?php echo csrf_field(); ?>
								</form>
							</li> 
							<?php else: ?>
							<li class="head-dpdn">
								<a href="<?php echo e(route('login_in')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li> 
							<?php endif; ?>


							<?php if(Session::get('customer_id')): ?>
							<li class="head-dpdn">
								<a href=""><i class="fa fa-user-plus" aria-hidden="true">
								</i> <?php echo e(Session::get('customer_name')); ?></a>
							</li> 
							<?php else: ?>
								<li class="head-dpdn">
								<a href=""><i class="fa fa-user-plus" aria-hidden="true"></i> sign_up</a>
							</li> 
							<?php endif; ?>

							<li class="head-dpdn">
								<a href="offers.html"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
							</li> 
							<li class="head-dpdn">
								<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li> -->
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->  
			
			
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="<?php echo e(route('FrontHome')); ?>">FOS<span>Food Ordering System</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
                                <!-- <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(route('category_dish', ['category_id'=> $category->category_id])); ?>" ><?php echo e($category->category_name); ?></a></li>	
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
								<li><a href="https://wa.link/qo7u6r">Contact Us</a></li>
								<li><a href="<?php echo e(route('first')); ?>">Exit</a></li> 
								<li><a href="<?php echo e(route('sign_up')); ?>">Sign Up</a></li> 
							</ul>
						</div>
						
						<!-- <div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div>  -->
					</nav>
				</div>
			</div> 
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 



		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Food Ordering System <br> <span>serve the best for the best.</span></h2>
				<!-- <div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="Enter Your Area Name" required="">
						<select id="agileinfo_search" name="agileinfo_search" required="">
							<option value="">Popular Cities</option>
							<option value="navs">New York</option>
							<option value="quotes">Los Angeles</option>
							<option value="videos">Chicago</option>
							<option value="news">Phoenix</option>
							<option value="notices">Fort Worth</option>
							<option value="all">Other</option>
						</select>
						<input type="submit" value="Search">
					</form>
				</div>  -->
			</div>
		</div>
	</div><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/FrontEnd/include/banner.blade.php ENDPATH**/ ?>