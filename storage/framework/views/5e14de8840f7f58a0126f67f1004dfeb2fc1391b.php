<?php $__env->startSection('content'); ?>
    <h3 class="fa fa-briefcase"> Add Role </h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="<?php echo e(route('admin.roles.index')); ?>" class="btn btn-success">Back</a>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('name', 'Name*', ['class' => 'control-label']); ?>

                    <?php echo Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('name')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 form-group">
                    <?php echo Form::label('permission', 'Permissions', ['class' => 'control-label']); ?>

                    <?php echo Form::select('permission[]', $permissions, old('permission'), ['class' => 'form-control select2', 'multiple' => 'multiple']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('permission')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('permission')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo Form::submit(trans('global.app_save'), ['class' => 'btn btn-success']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>