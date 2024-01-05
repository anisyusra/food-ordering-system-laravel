
<?php $__env->startSection('title'); ?>
    Coupon Code Manage
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
                <h3 class="card-title">Coupon Code</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Code</th>
                    <th>Type</th>
                    <th>Value</th>
                    <th>Cart Min</th>
                    <th>Expired On</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($code->coupon_code); ?></td>
                    <td>
                    <?php if($code->coupon_type == 1): ?>
                      Percentage
                    <?php else: ?>
                      Fixed
                    <?php endif; ?>
                  </td>
                    <td>
                      <?php echo e($code->coupon_value); ?>

                    </td>
                    <td>
                        <?php echo e($code->cart_min_value); ?>

                    </td>
                    <td> 
                        <?php echo e($code->expired_on); ?>

                    </td>
                    <td> 
                        <?php echo e($code->added_on); ?>

                    </td>
                    <td> 
                      <?php if($code->coupon_status == 1): ?>
                      <a class="btn btn-outline-success" href="<?php echo e(route('inactive_coupon_code', ['coupon_id'=>$code->coupon_id])); ?>">
                        <i class="fas fa-arrow-up" title="Click to Inactive"></i>
                      </a>
                      <?php else: ?>
                      <a class="btn btn-outline-info" href="<?php echo e(route('active_coupon_code', ['coupon_id'=>$code->coupon_id])); ?>">
                        <i class="fas fa-arrow-down" title="Click to Active"></i>
                      </a>
                      <?php endif; ?>                      
                      <a class="btn btn-outline-dark"data-toggle="modal" data-target="#edit<?php echo e($code->coupon_id); ?>">
                        <i class="fas fa-edit" title="Click to change it"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="<?php echo e(route('delete_coupon_code',  ['coupon_id'=>$code->coupon_id])); ?>">
                        <i class="fas fa-trash" title="Click to destroy"></i>
                      </a>
                    </td>
                  </tr>
                  
                  

                        <div class="modal fade" id="edit<?php echo e($code->coupon_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Update Coupon Code</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <div class="modal-body">
                              <form action="<?php echo e(route('update_coupon_code')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                  <label>Coupon Name</label>
                                  <input type="text" class="form-control" name="coupon_code" value="<?php echo e($code->coupon_code); ?>">
                                  <input type="hidden" class="form-control" name="coupon_id" value="<?php echo e($code->coupon_id); ?>">
                                </div>
                                <div class="form-group">
                                  <label>Coupon Value</label>
                                  <input type="text" class="form-control" name="coupon_value" value="<?php echo e($code->coupon_value); ?>">
                                </div>
                                <div class="form-group">
                                  <label>Cart Min Value</label>
                                  <input type="text" class="form-control" name="cart_min_value" value="<?php echo e($code->cart_min_value); ?>">
                                </div>
                                <div class="form-group">
                                  <label> Select Coupon Type</label>
                                  <div class="radio">
                                    <input type="radio" name="coupon_type" value="1">Percentage
                                    <input type="radio" name="coupon_type" value="0">Fixed
                                  </div>
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
<?php echo $__env->make('BackEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/Coupon/manage.blade.php ENDPATH**/ ?>