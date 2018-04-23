@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-cog"> Edit Configuration </h1>

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
				   
	  	<?php foreach($editConf as $edit) { ?> 
				  <form action="{{ url('/configuration/update')}}" method="post">
				  	<?php echo csrf_field(); ?>

				<input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Name" required value="<?=$edit->id; ?>">

				    <div class="col-lg-5">
				      <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="<?=$edit->name; ?>">
				    </div>
				    <div class="col-lg-5">
				      <label for="emailId">Email Id:</label>
				      <input type="text" class="form-control" id="emailId" name="emailId" placeholder="Enter Email Id" required value="<?=$edit->emailId; ?>">
				    </div>
				    <div class="col-lg-5">
				      <label for="phone">Mobile No:</label>
				      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number" required value="<?=$edit->phone; ?>">
				    </div>
				    <div class="col-lg-5">
				      <label for="siteName">Company Name:</label>
				      <input type="text" class="form-control" id="siteName" name="siteName" placeholder="Enter Company name" required value="<?=$edit->siteName; ?>">
				    </div>
				    <div class="col-lg-5">
				      <label for="adminAmount">Admin Amount:</label>
				      <input type="text" class="form-control" id="adminAmount" name="adminAmount" placeholder="Emter Admin Amount" required value="<?=$edit->adminAmount; ?>">
				    </div>
				    <div class="col-lg-5">
				      <label for="amcAmount">AMC Amount:</label>
				      <input type="text" class="form-control" id="amcAmount" name="amcAmount" placeholder="Emter AMC Amount" required value="<?=$edit->amcAmount; ?>">
				    </div>

				    <div class="col-lg-5 form-group">
				    		<button type="submit" class="btn btn-success" id="submit" name="submit">Save</button>
				    </div>
				    
				  </form>
				 <?php } ?> 
				</div>
				

			 </div>
 </div>
 </div>
 </div>
 </div>


@stop