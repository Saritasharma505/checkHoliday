@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-credit-card">&nbsp;  Add AMC Payment </h1>

<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="{{URl('amc')}}"><button type="button" class="btn btn-success">Back </button></a>
       </div>
      <!-- /.panel-heading -->
			 <div class="panel-body">

			 	<div class="container">
				   
				  <form action="{{url('/amc/update')}}" method="post">
				  	<?php echo csrf_field(); ?>

				    <div class="col-lg-5">
				      <label for="member_id">Membership ID</label>
                       <input type="text" class="form-control required" id="member_id" name="member_id" maxlength="128" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="name">Member Name</label>
                      <input type="text" class="form-control required " id="name"  name="name" maxlength="128" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="email">Email Id</label>
                      <input type="text" class="form-control requiredemail" id="email"  name="email" maxlength="30" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="mobile">Mobile No</label>
                   		<input type="text" class="form-control required" id="mobile" name="mobile" required maxlength="10">
				    </div>
				    <?php foreach($memberAmc as $amcInfo){?>
				    <div class="col-lg-5">
				      <label for="amount">AMC Amount</label>
				      <input type="text" name="amount" id="amount" class="form-control"  required value="<?= $amcInfo->amcAmount;?>">
				    </div>
				    <?php }?>
				    <div class="col-lg-5">
				     <input type="hidden" class="form-control" id="txnID" name="txnID" value="pradeep">
				    </div>

				    <div class="col-lg-5">
				      <label for="dsa_assigned">DSA</label>
				      <select name="dsa_assigned" id="dsa_assigned"  class="form-control">
				      <option>--Select--</option>
				      	<option value="pradeep">Pradeep</option>
				      	<option value="Sarita">Sarita</option>
				      	<option value="Mohit">Mohit</option>
				      	<option value="Lalit">Lalit</option>
				      	<option value="kamal">Kamal</option>
				      	
				      </select>
				    </div>
				     <div class="col-lg-5">
				     <input type="hidden" class="form-control" id="paymentDate" name="paymentDate" value="<?php echo date("Y-m-d")?>">
				    </div>
				
				</div>
				 <div class="col-lg-12 pull-left" style="margin-top: 20px; margin-left: 50px;">
				     <button type="submit" class="btn btn-success" id="submit" name="submit">Save</button>
				    
	                   </form>
				      </div>

			 </div>

			
 </div>
 </div>
 </div>
 </div>


@stop