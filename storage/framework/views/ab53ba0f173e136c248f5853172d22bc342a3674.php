<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-fighter-jet">&nbsp;Holiday Request</h1>



<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
       <!--    <a href=""><button type="button" class="btn btn-success">ADD </button></a> -->

       </div>
      <!-- /.panel-heading -->
 <div class="panel-body">
 <div style="overflow-x:auto;">
 <!-- message Print -->
    <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success"><?php echo e(Session::get('message')); ?>


        </div>
     <?php } ?>
 
  <table class="table table-responsive table-hover  table-striped table-bordered" id="table" cellpadding="5px">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Membership ID</th>
            <th class="text-center">Check In Date</th>
            <th class="text-center">Check Out Date</th>
            <th class="text-center">Location</th>
            <th class="text-center">Total Person</th>
            <th class="text-center">Days</th>
            <th class="text-center">Apartment</th>
            <th class="text-center">Total Days</th>
            <th class="text-center">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php $i=1;  ?>
        <tr>
            <td><?= $i++; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td>
                <a href="#" class="btn btn-success">Active</a>
                <a href="#" class="btn btn-success">Deactive</a>
                
          </td>
        </tr>
    
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