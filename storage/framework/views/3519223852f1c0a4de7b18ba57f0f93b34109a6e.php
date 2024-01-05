
<?php $__env->startSection('title'); ?>
    Category Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
        <div class="offset-3 col-md-5 my-lg-5">
            <?php if(Session::get('sms')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo e(Session::get('sms')); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="card">   
            <div class="card-header text-center">
                Category
            </div>
            <div class="card-body">

                <form action="<?php echo e(route('cate_save')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Category Name </label>
                        <input type="text" class="form-control" name="category_name">
                    </div>
                    <div class="form-group">
                        <label>Order Number</label>
                        <input type="number" class="form-control" name="order_number">
                    </div>
                    <div class="form-group">
                        <label>Added On </label>
                        <input type="date" class="form-control" name="added_on">
                    </div>

                    <div class="form-group">
                        <label>Catgeory Status</label>
                        <div class="radio">
                            <input type="radio" name="category_status" value="1">Active
                            <input type="radio" name="category_status" value="0">Inactive
                        </div>
                    </div>
                    <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Category Add</button>
                
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('BackEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/category/addCategory.blade.php ENDPATH**/ ?>