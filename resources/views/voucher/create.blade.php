@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-gift">&nbsp; Create Gift Voucher </h1>

<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="{{URl('voucher')}}"><button type="button" class="btn btn-success">Back </button></a>
       </div>
      <!-- /.panel-heading -->
			 <div class="panel-body">

			 	<div class="container">
				   
				  <form action="{{ url('/generatevoucher') }}" method="post">
				  	<?php echo csrf_field(); ?>

				    <div class="col-lg-5">
				      <label for="gname">Name</label>
                       <input type="text" class="form-control required" id="gname" name="gname" maxlength="128" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="giftemail">Email ID</label>
                      <input type="text" class="form-control required email" id="giftemail"  name="giftemail" maxlength="128" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="mobno">Mobile No</label>
                      <input type="text" class="form-control required" id="mobno"  name="mobno" maxlength="10" required>
				    </div>

				    <div class="col-lg-5">
				      <label for="address">Address</label>
                   		<input type="text" class="form-control required" id="address" name="address" required>
				    </div>

				    <div class="col-lg-5">
				      
				      <input type="hidden" name="location" id="location" class="form-control" value="Faridabad" required>
				    </div>

				    <!-- hidden Value -->
				    <div class="col-lg-5">
				     <input type="hidden" class="form-control" id="vcode" name="vcode" value="<?php echo 'THLC'.mt_rand(0000,9999); ?>">
				    </div>

					<div class="col-lg-5">
				     <input type="hidden" class="form-control" id="dog" name="dog" value="<?php echo date('Y-m-d');?>">
				    </div>

				    <?php
                      $current_time = date('Y-m-d');  
                       //echo $current_time."<br>";
                       $six_months = date("Y-m-d", strtotime("+6 month $current_time"));
                        //echo $six_months;
                        ?>
				      <div class="col-lg-5">
				       <input type="hidden" class="form-control" id="edate" name="edate" value="<?php echo $six_months; ?>">
				    </div>

				      <div class="col-lg-5">
				      <input type="hidden" class="form-control" id="dsaName" name="dsaName" value="Admin">
				    </div>

				     <div class="col-lg-5">
				      <input type="hidden" class="form-control" id="dsaId" name="dsaId" value="1" >
				      </div>
				     <!-- <?php
                                       
                     // if(function_exists('date_default_timezone_set')) 
                      {
                     // date_default_timezone_set("Asia/Kolkata");
                    }
					// $date1 = date("H:i a");
                       ?>
                     <div class="form-group">
                      <input type="hidden" name="time" class="form-control" id="time"                   value="<?php //echo $date1; ?>"> 
                     </div>  -->
                
				   
				    
				 
				</div>
				 <div class="col-lg-12 pull-left" style="margin-top: 20px; margin-left: 50px;">
				     <button type="submit" class="btn btn-success" id="submit" name="submit">Create</button>
				    
	                   </form>
				      </div>

			 </div>

			
 </div>
 </div>
 </div>
 </div>


@stop