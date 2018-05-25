<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-gift">&nbsp; View Member Details</h1>

<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(URl('/member')); ?>"><button type="button" class="btn btn-success">Back </button></a>
       </div>
      
      <!-- /.panel-heading -->
			 <div class="panel-body">

			 	<div class="container">
				   
				  <form action="" method="post">
				

				  	<?php foreach($previewMember as $views) {?>
				  	<table class="table table-hover">
				  	<tr>
				  		<th>Membership Id</th>
				  		<td><?= $views->memberShipid;?></td>
				  	</tr>
				  	<tr>
				  		<th>Approval Form No</th>
				  		<td><?= $views->a_no;?></td>
				  	</tr>
				  	<tr>
				  		<th>Main Applicant Name</th>
				  		<td><?= $views->m_name;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date Of Birth</th>
				  		<td><?= $views->dob1;?></td>
				  	</tr>
				  	<tr>
				  		<th>Co-applicant Name</th>
				  		<td><?= $views->c_name;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date Of Birth</th>
				  		<td><?= $views->dob2;?></td>
				  	</tr>
				  	<tr>
				  		<th>First Nominee Name</th>
				  		<td><?= $views->firstNomineeName;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date of Birth</th>
				  		<td><?= $views->firstNDob;?></td>
				  	</tr>
				  	<tr>
				  		<th>Second Nominee Name</th>
				  		<td><?= $views->secondNomineeName;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date of Birth</th>
				  		<td><?= $views->secondNDob;?></td>
				  	</tr>
				  	<tr>
				  		<th>Third Nominee Name</th>
				  		<td><?= $views->thirdNomineeName;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date of Birth</th>
				  		<td><?= $views->thirdNDob;?></td>
				  	</tr>
				  	<tr>
				  		<th>Address</th>
				  		<td><?= $views->address;?></td>
				  	</tr>
				  	<tr>
				  		<th>City</th>
				  		<td><?= $views->city;?></td>
				  	</tr>
				  	<tr>
				  		<th>Pin Code</th>
				  		<td><?= $views->pin;?></td>
				  	</tr>
				  	<tr>
				  		<th>Mobile No1</th>
				  		<td><?= $views->mob1;?></td>
				  	</tr>
				  	<tr>
				  		<th>Mobile No2</th>
				  		<td><?= $views->mob2;?></td>
				  	</tr>
				  	<tr>
				  		<th>Phone No</th>
				  		<td><?= $views->r_no;?></td>
				  	</tr>
				  	<tr>
				  		<th>Email Id</th>
				  		<td><?= $views->email;?></td>
				  	</tr>
				  	<tr>
				  		<th>Date Of Joining</th>
				  		<td><?= $views->doj;?></td>
				  	</tr>
				  	<tr>
				  		<th>Tenure</th>
				  		<td><?= $views->tenure;?></td>
				  	</tr>
				  	<tr>
				  		<th>Validity Date</th>
				  		<td><?= $views->vdate;?></td>
				  	</tr>
				  	<tr>
				  		<th>Card Type(Season)</th>
				  		<td><?= $views->ctype;?></td>
				  	</tr>
				  	<tr>
				  		<th>Apartment</th>
				  		<td><?= $views->apartment;?></td>
				  	</tr>
				  	<tr>
				  		<th>Person Occupancy</th>
				  		<td><?= $views->occupancy;?></td>
				  	</tr>
				  	<tr>
				  		<th>Days</th>
				  		<td><?= $views->days;?></td>
				  	</tr>
				  	<tr>
				  		<th>Purchase Amount</th>
				  		<td><?= $views->purchase_amount;?></td>
				  	</tr>
				  	<tr>
				  		<th>Admin Amount</th>
				  		<td><?= $views->admin_amount;?></td>
				  	</tr>
				  	<tr>
				  		<th>Total Amount</th>
				  		<td><?= $views->total_amount;?></td>
				  	</tr>
				  	<tr>
				  		<th>Initial Payment</th>
				  		<td><?= $views->initial_payment;?></td>
				  	</tr>
				  	<tr>
				  		<th>Mode Of Payment</th>
				  		<td><?= $views->mode_of_payment;?></td>
				  	</tr>
				  	<tr>
				  		<th>Balance Amount</th>
				  		<td><?= $views->bal;?></td>
				  	</tr>
				  	<tr>
				  		<th>Balance Payment Mode</th>
				  		<td><?= $views->bal_payment;?></td>
				  	</tr>
				  	<tr>
				  		<th>No Of EMI</th>
				  		<td><?= $views->no_of_emi;?></td>
				  	</tr>
				  	<tr>
				  		<th>EMI Amount</th>
				  		<td><?= $views->emi_amount;?></td>
				  	</tr>
				  	<tr>
				  		<th>EMI Start</th>
				  		<td><?= $views->emi_start_date;?></td>
				  	</tr>
				  	<tr>
				  		<th>AMC(Amount)</th>
				  		<td><?= $views->amc;?></td>
				  	</tr>
				  	<tr>
				  		<th>Executive Name</th>
				  		<td><?= $views->excutive_name;?></td>
				  	</tr>
				  	<tr>
				  		<th>Manager Name</th>
				  		<td><?= $views->manager_name;?></td>
				  	</tr>
				  	<tr>
				  		<th>DSA Name</th>
				  		<td><?= $views->dsa_name;?></td>
				  	</tr>
				  	<tr>
				  		<th>Extra Offer</th>
				  		<td><?= $views->member_offer;?></td>
				  	</tr>
				  	
				
				    </table>
				      <a href="<?php echo e(url('/member/send-email')); ?>/<?= $views->id;?>" class="btn btn-primary" style="margin-left: 300px; margin-right: 100px;"> Send Mail</a>   
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