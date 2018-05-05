<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h3 class="fa fa-cog"> Admin Configuration </h3>
   
    <div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(url('/addconfiguration')); ?>"><button type="button" class="btn btn-success">ADD </button></a>

       </div>
      <!-- /.panel-heading -->
 <div class="panel-body">
 <div style="overflow-x:auto;">
    <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success"><?php echo e(Session::get('message')); ?>


        </div>
     <?php } ?>
 
  <table class="table table-responsive table-hover  table-striped table-bordered" id="table" cellpadding="5px">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email Id</th>
            <th class="text-center">Mobile</th>
            <th class="text-center">Site Name</th>
            <th class="text-center">Admin Amount</th>
            <th class="text-center">AMC Amount</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($configur as $configuration) { ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $configuration->name;?></td>
            <td><?= $configuration->emailId;?></td>
            <td><?= $configuration->phone;?></td>
            <td><?= $configuration->siteName;?></td>
            <td><?= $configuration->adminAmount;?></td>
            <td><?= $configuration->amcAmount;?></td>
           <td><a  class="fa fa-pencil btn btn-primary" href="<?php echo e(url('/configuration/edit-config')); ?>/<?= $configuration->id;?>"></a>&nbsp;&nbsp;&nbsp;
                <a class="fa fa-trash btn btn-danger" href="<?php echo e(url('/configuration/delete-config')); ?>/<?= $configuration->id;?>"></a></td>
        </tr>
    <?php } ?>
         </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?> 
    <!-- <script>
        window.route_mass_crud_entries_destroy = '<?php echo e(route('admin.roles.mass_destroy')); ?>';
    </script> -->.
    <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>

 <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>