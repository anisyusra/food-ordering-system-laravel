

<?php $__env->startSection('title'); ?>
    Sign In
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Login-page -->
	<div class="login-page about">
        <img class="login-w3img" src="<?php echo e(asset('/')); ?>frontEndSourceFile/images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign In to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="<?php echo e(route('FrontHome')); ?>" method="post"> 
                    <?php echo csrf_field(); ?>
					<input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Login">
				</form>
				<p>First time with FOS?  <a href="<?php echo e(route('sign_up')); ?>"> Register Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //Login-page -->  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/FrontEnd/customer/login.blade.php ENDPATH**/ ?>