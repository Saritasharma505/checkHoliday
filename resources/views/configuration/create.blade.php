@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-cog"> Add Configuration </h1>


<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="{{URl('configuration')}}"><button type="button" class="btn btn-success">Back </button></a>
       </div>
      <!-- /.panel-heading -->
			 <div class="panel-body">

			 	<div class="container">
				   
				  <form action="{{ url('/addconfiguration/save') }}" method="post">
				  	<?php echo csrf_field(); ?>
				    <div class="col-lg-5">
				      <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
				    </div>
				    <div class="col-lg-5">
				      <label for="emailId">Email Id:</label>
				      <input type="text" class="form-control" id="emailId" name="emailId" placeholder="Enter Email Id" required>
				    </div>
				    <div class="col-lg-5">
				      <label for="phone">Mobile No:</label>
				      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number" required>
				    </div>
				    <div class="col-lg-5">
				      <label for="siteName">Company Name:</label>
				      <input type="text" class="form-control" id="siteName" name="siteName" placeholder="Enter Company name" required>
				    </div>
				    <div class="col-lg-5">
				      <label for="adminAmount">Admin Amount:</label>
				      <input type="text" class="form-control" id="adminAmount" name="adminAmount" placeholder="Emter Admin Amount" required>
				    </div>
				    <div class="col-lg-5">
				      <label for="amcAmount">AMC Amount:</label>
				      <input type="text" class="form-control" id="amcAmount" name="amcAmount" placeholder="Emter AMC Amount" required>
				    </div>

				    <div class="col-lg-5 form-group">
				    		<button type="submit" class="btn btn-success" id="submit" name="submit">Save</button>
				    </div>
				  </form>
				 
				</div>
				

			 </div>
 </div>
 </div>
 </div>
 </div>


@stop