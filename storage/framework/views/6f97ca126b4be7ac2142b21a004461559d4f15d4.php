<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="fa fa-users"> Users Management</h3>
  
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-success">Add User</a>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($users) > 0 ? 'datatable' : ''); ?> dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>S.No</th>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.name'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.email'); ?></th>
                        <th><?php echo app('translator')->getFromJson('global.users.fields.roles'); ?></th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                <?php $i=1;?>
                    <?php if(count($users) > 0): ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($user->id); ?>">
                                <td></td>
                                <td><?= $i++;?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php $__currentLoopData = $user->roles()->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($role); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.users.edit',[$user->id])); ?>" class="btn btn-md btn-success fa fa-pencil"><?php echo app('translator')->getFromJson('global.app_edit'); ?></a>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-md btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
   <!--  <script>
        window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.users.mass_destroy')); ?>';
    </script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>