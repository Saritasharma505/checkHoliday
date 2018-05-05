<?php $request = app('Illuminate\Http\Request'); ?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="<?php echo e($request->segment(1) == 'home' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/')); ?>">
                    <i class="fa fa-wrench"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('global.app_dashboard'); ?></span>
                </a>
            </li>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users_manage')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('global.user-management.title'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="<?php echo e($request->segment(2) == 'permissions' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.permissions.index')); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('global.permissions.title'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(2) == 'roles' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.roles.index')); ?>">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('global.roles.title'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(2) == 'users' ? 'active active-sub' : ''); ?>">
                        <a href="<?php echo e(route('admin.users.index')); ?>">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                <?php echo app('translator')->getFromJson('global.users.title'); ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
           
              <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configuration_manage')): ?>
            <!-- Menu Bar -->
             <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/configuration')); ?>">
                    <i class="fa fa-cog"></i>
                    <span class="title">Configrution</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('location_manage')): ?>    
            <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/locations')); ?>">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Location</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('member_manage')): ?> 
            <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/member')); ?>">
                    <i class="fa fa-users"></i>
                    <span class="title">Members</span>
                </a>
            </li>
             <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('voucher_manage')): ?> 
            <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/voucher')); ?>">
                    <i class="fa fa-gift"></i>
                    <span class="title">Voucher</span>
                </a>
            </li>
            <?php endif; ?>
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment_manage')): ?> 
             <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/payment-update')); ?>">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Payment Update</span>
                </a>
            </li>
            <?php endif; ?>
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('amc_manage')): ?> 
             <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/amc')); ?>">
                    <i class="fa fa-cc-mastercard"></i>
                    <span class="title">AMC Update</span>
                </a>
            </li>
            <?php endif; ?>
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('holiday_request')): ?> 
            <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/holiday')); ?>">
                    <i class="fa fa-plane"></i>
                    <span class="title">Holiday Request</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customer_support')): ?>
             <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('admin/customersupport')); ?>">
                    <i class="fa fa-commenting"></i>
                    <span class="title">Customer Support</span>
                </a>
            </li>
            <?php endif; ?>
           <!--  Report Details -->
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report_manage')): ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-binoculars"></i>
                    <span class="title">All Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="<?php echo e($request->segment(2) == 'permissions' ? 'active active-sub' : ''); ?>">
                        <a href="/member-report">
                            <i class="fa fa-child"></i>
                            <span class="title">
                                Member Report
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(2) == 'roles' ? 'active active-sub' : ''); ?>">
                        <a href="/amc-report">
                            <i class="fa fa-credit-card"></i>
                            <span class="title">
                                AMC Report
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo e($request->segment(2) == 'users' ? 'active active-sub' : ''); ?>">
                        <a href="/payment-report">
                            <i class="fa fa-credit-card-alt"></i>
                            <span class="title">
                                Payment Report
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
           <!--  end Report -->

            <li class="<?php echo e($request->segment(1) == 'change_password' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('auth.change_password')); ?>">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>
 
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><?php echo app('translator')->getFromJson('global.app_logout'); ?></span>
                </a>
            </li>
        </ul>

    </section>
</aside>
<?php echo Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']); ?>

<button type="submit"><?php echo app('translator')->getFromJson('global.logout'); ?></button>
<?php echo Form::close(); ?>

