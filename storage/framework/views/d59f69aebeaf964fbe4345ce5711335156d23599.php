@extend('FrontEnd.master')

<?php $__env->startSection('title'); ?>
    Shipping
<?php $__env->stopSection(); ?>    
<?php $__env->startSection('content'); ?>
<!--Shipping page -->
<div class="login-page about">
        <img class="login-w3img" src="<?php echo e(asset('/')); ?>frontEndSourceFile/images/img3.jpg" alt="">
        <div class="container">
            <h3 class="w3ls-title w3ls-title1">Enter Your Shipping Information</h3>
            <p class ="w3ls-title w3ls-title1 text-center">You can change your shipping information</p>
            <div class="login-agileinfo">
                <form action="<?php echo e(route('store_shipping')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <label>Full Name</label>
                    <input class="agile-ltext" type="text" name="name" placeholder="Enter your good name" value="<?php echo e($customer->name); ?>">
                    <label>Email</label>
                    <input class="agile-ltext" type="email" name="email" placeholder="Your Email is ..." value="<?php echo e($customer->email); ?>">
                    <label>Phone No</label>
                    <input class="agile-ltext" type="text" name="phone_no" placeholder="Your phone number is..." value="<?php echo e($customer->phone_no); ?>">
                    <label>Address</label>
                    <input class="agile-ltext" type="text" name="address" placeholder="Enter your address..." value="<?php echo e($customer->address); ?>">
                    <div class="threelogin-text">
                        
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Sign Up">
                </form>
                
            </div>
        </div>
    </div>
    <!--// shipping page-->
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\online_food_ordering\resources\views/FrontEnd/checkOut/shipping.blade.php ENDPATH**/ ?>