
<?php $__env->startSection('title'); ?>
    Category manage
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        
            <?php if(Session::get('sms')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo e(Session::get('sms')); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            
            
            <div class="card my-5">
             
              <div class="card-header">
                <h3 class="card-title">Category of Foods sell</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Order Number</th>
                    <th>Created On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($cate->category_name); ?></td>
                    <td><?php echo e($cate->order_number); ?></td>
                    <td><?php echo e($cate->added_on); ?></td>
                    
                    <td> 
                      <?php if($cate->category_status == 1): ?>
                      <a class="btn btn-outline-success" href="<?php echo e(route('Inactive_cate', ['category_id'=>$cate->category_id])); ?>">
                        <i class="fas fa-arrow-up" title="Click to Inactive"></i>
                      </a>
                      <?php else: ?>
                      <a class="btn btn-outline-info" href="<?php echo e(route('category_active', ['category_id'=>$cate->category_id])); ?>">
                        <i class="fas fa-arrow-down" title="Click to Active"></i>
                      </a>
                      <?php endif; ?>                      
                      <a class="btn btn-outline-dark"data-toggle="modal" data-target="#edit<?php echo e($cate->category_id); ?>">
                        <i class="fas fa-edit" title="Click to change it"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="<?php echo e(route('cate_delete',  ['category_id'=>$cate->category_id])); ?>">
                        <i class="fas fa-trash" title="Click to destroy"></i>
                      </a>
                    </td>
                  </tr>
                  
                  

                        <div class="modal fade" id="edit<?php echo e($cate->category_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Update Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <div class="modal-body">
                              <form action="<?php echo e(route('cate_update')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                  <label>Category name</label>
                                  <input type="text" class="form-control" name="category_name" value="<?php echo e($cate->category_name); ?>">
                                  <input type="hidden" class="form-control" name="category_id" value="<?php echo e($cate->category_id); ?>">
                                </div>
                                <div class="form-group">
                                  <input type="number" class="form-control" name="order_number" value="<?php echo e($cate->order_number); ?>">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-primary" name="btn" value="Update">
                                </div>

                              </form>
                      </div>
                      </div>
                      </div>
                      </div>
                  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('BackEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/category/manageCategory.blade.php ENDPATH**/ ?>