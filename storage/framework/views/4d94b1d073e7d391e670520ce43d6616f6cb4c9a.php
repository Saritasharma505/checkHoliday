<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-users">&nbsp;Member Details</h1>


<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(url('/add-member')); ?>"><button type="button" class="btn btn-success">ADD Member</button></a>

       </div>
      <!-- /.panel-heading -->
 <div class="panel-body">
 <div style="overflow-x:auto;">
 <!-- message Print -->
    <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success"><?php echo e(Session::get('message')); ?>


        </div>
     <?php } ?>
 <div class="box-body table-responsive">

  <table class="table table-hover" id="table" cellpadding="15px" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Membership ID</th>
            <th class="text-center">Main Applicant Name</th>
            <th class="text-center">Co-Applicant Name</th>
            <th class="text-center">City</th>
            <th class="text-center">Date Of Joining</th>
            <th class="text-center">Date Of Validity</th>
            <th class="text-center">Tenure</th>
            <th class="text-center">Card Type (Season)</th>
            <th class="text-center">Apartment</th>
            <th class="text-center">Occupancy</th>
            <th class="text-center">Purchase Amount</th>
            <th class="text-center">Admin Amount</th>
            <th class="text-center">Total Amount</th>
            <th class="text-center">Initial Amount</th>
            <th class="text-center">Balance Amount</th>
            <th class="text-center">Mode Of Payment</th>
            <th class="text-center">Executive Name</th>
            <th class="text-center">Manager Name</th>
            <th  style="padding-right: 265px; text-align:center;">Extra Offer</th>
            <th style="padding-left: 100px;padding-right: 80px;">Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        <?php $__currentLoopData = $memberInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $info->memberShipid;?></td>
            <td><?= $info->m_name;?></td>
            <td><?= $info->c_name;?></td>
            <td><?= $info->city;?></td>
            <td><?= $info->doj;?></td>
            <td><?= $info->vdate;?></td>
            <td><?= $info->tenure;?></td>
            <td><?= $info->ctype;?></td>
            <td><?= $info->apartment;?></td>
            <td><?= $info->occupancy;?></td>
            <td><?= $info->purchase_amount;?></td>
            <td><?= $info->admin_amount;?></td>
            <td><?= $info->total_amount;?></td>
            <td><?= $info->initial_payment;?></td>
            <td><?= $info->bal;?></td>
            <td><?= $info->mode_of_payment;?></td>
            <td><?= $info->excutive_name;?></td>
            <td><?= $info->manager_name;?></td>
            <td><?= $info->member_offer;?></td>
            
           <td>
           <a  class="fa fa-pencil btn btn-primary"  title="Edit Details" href="<?php echo e(url('/member/edit')); ?>/<?= $info->memberShipid;?>"></a>
           <a class="fa fa-trash btn btn-danger" onclick="return confirm('Are You Sure You Want to Delete Voucher')" href="<?php echo e(url('/member/delete')); ?>/<?= $info->id;?>"></a>
           <a  class="fa fa-print btn btn-success" title="PDF Print" href="<?php echo e(url('/member/member-pdf')); ?>/<?= $info->id;?>"></a>
           <a  class="fa fa-copy btn btn-warning" title="Receipt Print" href="<?php echo e(url('/member/member-receipt')); ?>/<?= $info->memberShipid;?>"></a>
           <a  class="fa fa-download btn btn-info" title="Download Agreement" href="<?php echo e(url('/member/download-agreement')); ?>/<?= $info->id;?>"></a>
           </td>
        </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
</table>
</div>
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
    $('#table').DataTable( {
        dom: 'lBfrtip',

        buttons: [
        'csv', 'excel', 'pdf', 'print'
        ]
    } );
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