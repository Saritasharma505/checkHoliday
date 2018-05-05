<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-gift">&nbsp; View Voucher Details</h1>

<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(URl('voucher')); ?>"><button type="button" class="btn btn-success">Back </button></a>
       </div>
      <!-- /.panel-heading -->
			 <div class="panel-body">

			 	<div class="container">
				   
				  <form action="" method="post">
				  
				  	<?php foreach($viewVoucher as $views) {?>
				  	<table class="table table-hover">
				  	<tr>
				  		<th>Voucher Code:</th>
				  		<td><?= $views->vcode?></td>
				  	</tr>
				  	<tr>
				  		<th>Name:</th>
				  		<td><?= $views->gname?></td>
				  	</tr>
				  	<tr>
				  		<th>Email ID:</th>
				  		<td><?= $views->giftemail?></td>
				  	</tr>
				  	<tr>
				  		<th>Mobile Number:</th>
				  		<td><?= $views->mobno?></td>
				  	</tr>
				  	<tr>
				  		<th>Address:</th>
				  		<td><?= $views->address?></td>
				  	</tr>
				  	<tr>
				  		<th>Voucher Generation Date:</th>
				  		<td><?= $views->dog?></td>
				  	</tr>
				  	<tr>
				  		<th>Voucher Expiration Date::</th>
				  		<td><?= $views->edate?></td>
				  	</tr>
				  
				    </table>
	                   </form>
				      <?php }?>

			 </div>

			
 </div>
 </div>
 </div>
 </div>
 </div>
 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>