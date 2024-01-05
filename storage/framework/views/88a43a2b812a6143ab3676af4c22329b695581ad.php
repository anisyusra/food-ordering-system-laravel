
<?php $__env->startSection('title'); ?>
    Dish Manage
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
                <h3 class="card-title">Dish Manage</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Dish Name</th>
                    <th>Category Name</th>
                    <th>Dish detail</th>
                    <th>Dish image</th>
                    <th>Price</th>
                 
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($dish-> dish_name); ?></td>
                    <td><?php echo e($dish-> category_name); ?></td>
                    <td><?php echo e($dish-> dish_detail); ?></td>
                    <td>
                      <img src="<?php echo e(asset('BackEndSourceFile/dish_img/'.$dish->dish_image)); ?>" height = "25" width="68" class="img-fluid img-thumbnail"}}>
                    </td>
                    <td><?php echo e($dish-> full_price); ?></td>
               
                    <td><?php echo e($dish-> created_at); ?></td>
                    
                    <td> 
                      <?php if($dish->dish_status == 1): ?>
                      <a class="btn btn-outline-success" href="<?php echo e(route('dish_inactive', ['dish_id'=>$dish->dish_id])); ?>">
                        <i class="fas fa-arrow-up" title="Click to Inactive"></i>
                      </a>
                      <?php else: ?>
                      <a class="btn btn-outline-info" href="<?php echo e(route('dish_active', ['dish_id'=>$dish->dish_id])); ?>">
                        <i class="fas fa-arrow-down" title="Click to Active"></i>
                      </a>
                      <?php endif; ?>                     
                      <a class="btn btn-outline-dark"data-toggle="modal" data-target="#edit<?php echo e($dish->dish_id); ?>">
                        <i class="fas fa-edit" title="Click to change it"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="<?php echo e(route('dish_delete',  ['dish_id'=>$dish->dish_id])); ?>">
                        <i class="fas fa-trash" title="Click to destroy"></i>
                      </a>
                    </td>
                  </tr>
                  
                  

                <div class="modal fade" id="edit<?php echo e($dish->dish_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Update Dish Date</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <div class="modal-body">
                              <form action="<?php echo e(route ('update_dish')); ?>" method="post" enctype="multipart\form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control" name="dish_name" value="<?php echo e($dish->dish_name); ?>">
                                  <input type="hidden" class="form-control" name="dish_id" value="<?php echo e($dish->dish_id); ?>">
                                </div>
                                 <div class="form-group">
                                     <label>Category</label>
                                         <select name="category_id" class="form-control">
                                              <option>-----Select Category-----</option>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cate -> category_id); ?>"> <?php echo e($cate->category_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                              </div>
                              <div class="form-group">
                                  <label>Detail</label>
                                        <textarea type="text" name="dish_detail" class="form-control" rows="5"><?php echo e($dish->dish_detail); ?></textarea>
                                </div>
                                <div class="form-group">
                                     <label>Previous Image</label>
                                     <img src="<?php echo e(asset('/$dish->dish_image')); ?>" style="height: 150px; width:150px; border-radius:58%">
                                      <input type="file" class="form-control" name="dish_image" accept="image/*" enctype="multipart\form-data">
                                </div>

                                <div class="card">
     
                                   <div class="card-body">
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Price</label>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control" name="full_price" placeholder="" value="<?php echo e($dish->full_price); ?>">
                                    </div>
                               
                                </div>
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
<?php echo $__env->make('BackEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/dish/manage.blade.php ENDPATH**/ ?>