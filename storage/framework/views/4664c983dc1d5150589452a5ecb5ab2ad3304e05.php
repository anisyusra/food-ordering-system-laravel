 

<?php $__env->startSection('title'); ?>
    checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
     <div class="products">
         <div class="container">
              <div class="col-md-9 product-w3ls-right">
                
                  <div class="card">
                    <div class="card-header text-muted">
                        <h3>Dear <?php echo e(Session::get('customer_name')); ?>.</h3> <h4 class="text-center">We've to know which payment method you want.</h4>
                    </div>
                    <div class="card mt-4">
                        <h5 class=" card-header mt-4 text-center text-center text-muted">Please select your payment</h5>
                        <div class="card-body">
                            <div class="checkout-left">
                                <div class="address_form_agile mt-sn-5 mt-4">

                                <form action="<?php echo e(route('FrontHome')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <table class ="table">
                                        <tr>
                                            <th>Cash</th>
                                            <td><input type="radio" name="payment_type" value="cash"></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Online banking</th>
                                            <td><input type="radio" name="payment_type" value="online"></td>
                                        </tr>
                                        </div>
                                        
      

                                    </table>
                            
                                </form>

                                <div class="modal-footer">
                                            <a href="<?php echo e(route('FrontHome')); ?>" class="btn btn-info">
                                                <span class="mt-5">Confirm</span>
                                            </a>
                                        </div>

                                </div>
                            </div>
                        </div> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('FrontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/FrontEnd/checkOut/checkout_payment.blade.php ENDPATH**/ ?>