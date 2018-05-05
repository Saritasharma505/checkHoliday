<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-gift">&nbsp;Gift Vouchers</h1>



<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(URl('/addvoucher')); ?>"><button type="button" class="btn btn-success">ADD </button></a>

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
            <th class="text-center">Voucher Code</th>
            <th class="text-center">Name</th>
            <th class="text-center">Date Of Generation</th>
            <th class="text-center">Expiration Date</th>
            <th class="text-center">Manager Name</th>
            <th class="text-center">Venue</th>
            <th class="text-center">Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($VoucherDetails as $viewVoucher){ ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $viewVoucher->vcode;?></td>
            <td><?= $viewVoucher->gname;?></td>
            <td><?= $viewVoucher->doj;?></td>
            <td><?= $viewVoucher->edate;?></td>
            <td><?= $viewVoucher->dsaName;?></td>
            <td><?= $viewVoucher->location;?></td>
           <td><a  class="fa fa-print btn btn-primary" title="Print Voucher" href="<?php echo e(url('/voucher/details')); ?>/<?=$viewVoucher->id;?>"></a>
           <a  class="fa fa-eye btn btn-primary"  title="View Profile" href="<?php echo e(url('/voucher/view')); ?>/<?= $viewVoucher->id; ?>"></a>
                <a class="fa fa-trash btn btn-danger" onclick="return confirm('Are You Sure You Want to Delete Voucher')" href="<?php echo e(url('/voucher/delete')); ?>/<?= $viewVoucher->id;?>"></a></td>
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