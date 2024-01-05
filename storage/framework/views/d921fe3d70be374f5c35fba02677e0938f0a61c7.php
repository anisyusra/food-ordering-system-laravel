<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(asset('/home')); ?>" class="brand-link">
      <!-- <img src="<?php echo e(asset('/BackEndSourceFile')); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">FOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('/BackEndSourceFile')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


         <!-- Category section -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p> Category 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('show_cate_table')); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('manage_cate')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>


           <!-- Delivery Boy Section -->
          <!-- <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('show_deliveryBoy_add_table')); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                Add Delivery Boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('delivery_boy_manage')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Delivery Boy</p>
                </a>
              </li>
            </ul>
          </li> -->


          <!-- coupon code section -->
          <!-- <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Coupon Code
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('show_coupon_table')); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                     <p>Coupon Code</p>
                </a>
              </li>
              <li class="nav-item">
               <a  href ="<?php echo e(route('manage_coupon_code')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                     <p>Manage Coupon Code</p>
                </a>
             </li>
            </ul> -->

             <!-- Dish Section -->
             <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dish
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('show_dish_table')); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                     <p>Generate Dish</p>
                </a>
              </li>
              <li class="nav-item">
               <a  href ="<?php echo e(route('manage_dish_date')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                     <p>Manage Dish</p>
                </a>
             </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\laragon\www\online_food_ordering\resources\views/BackEnd/include/sidebar.blade.php ENDPATH**/ ?>