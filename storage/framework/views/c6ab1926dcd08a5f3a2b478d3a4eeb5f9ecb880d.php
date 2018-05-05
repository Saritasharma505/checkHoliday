<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="fa fa-briefcase"> Role Management</h3>
   
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="<?php echo e(route('admin.roles.create')); ?>" class="btn btn-success">Add Role</a>
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped <?php echo e(count($roles) > 0 ? 'datatable' : ''); ?> dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>S.No</th>
                        <th width="10%">Role Name</th>
                        <th><?php echo app('translator')->getFromJson('global.roles.fields.permission'); ?></th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1;?>
                    <?php if(count($roles) > 0): ?>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($role->id); ?>">
                            <td></td>
                            <td><?= $i++;?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td>
                                    <?php $__currentLoopData = $role->permissions()->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($permission); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.roles.edit',[$role->id])); ?>" class="btn btn-md btn-info fa fa-pencil">Edit</a>
                                    <?php echo Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.roles.destroy', $role->id])); ?>

                                    <?php echo Form::submit(trans('global.app_delete'), array('class' => 'btn btn-md btn-danger')); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?php echo app('translator')->getFromJson('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <!-- <script>
        window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.roles.mass_destroy')); ?>';
    </script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>