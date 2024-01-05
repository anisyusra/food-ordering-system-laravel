
<?php $__env->startSection('title'); ?>
    Dish Add
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
                Dish 
            </div>
            <div class="card-body">

                <form action="<?php echo e(route('save_dish_date')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="dish_name">
                    </div>
                     <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option>-----Select Category-----</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cate->category_id); ?>"> <?php echo e($cate->category_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea type="text" name="dish_detail" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="dish_image" accept="image/*" required />
                    </div>
                   <div class="form-group">
                        <label>Status</label>
                        <div class="radio">
                            <input type="radio" name="dish_status" value="1">Active
                            <input type="radio" name="dish_status" value="0">Inactive
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Price</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="full_price" placeholder="">
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>

                   <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Dish Add</button>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('BackEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/dish/add.blade.php ENDPATH**/ ?>