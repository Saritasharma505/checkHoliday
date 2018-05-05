<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-credit-card">&nbsp;Payment Details</h1>



<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(URl('/adpayment')); ?>"><button type="button" class="btn btn-success">ADD Payment </button></a>

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
            <th class="text-center">Member Name</th>
            <th class="text-center">Receipt ID</th>
            <th class="text-center">Payment Date</th>
            <th class="text-center">Amount</th>
            <th class="text-center">DSA Assigned</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
          $i=1; 
          foreach($paymentInfo as $info) { ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $info->member_id;?></td>
            <td><?= $info->name;?></td>
            <td><?= $info->txnID;?></td>
            <td><?= $info->paymentDate;?></td>
            <td><?= $info->amount;?></td>
            <td><?= $info->dsa_assigned;?></td>
        </tr>
<?php }  
       foreach($member as $members) { ?>

           <tr>
            <td><?= $i++; ?></td>
            <td><?= $members->memberShipid?></td>
            <td><?= $members->m_name;?></td>
            
            <td><?= $members->txnID;?></td>
            <td><?= $members->payDate;?></td>
            <td><?= $members->initial_payment ;?></td>
            <td><?= $members->dsa_name;?></td>
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