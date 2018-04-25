

@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-cc-mastercard">&nbsp;AMC Details</h1>



<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="{{URl('/add-amc')}}"><button type="button" class="btn btn-success">ADD AMC Payment </button></a>

       </div>
      <!-- /.panel-heading -->
 <div class="panel-body">
 <div style="overflow-x:auto;">
 <!-- message Print -->
    <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success">{{ Session::get('message') }}

        </div>
     <?php } ?>
 
  <table class="table table-responsive table-hover  table-striped table-bordered" id="table" cellpadding="5px">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Membership ID</th>
            <th class="text-center">Member Name</th>
            <th class="text-center">Email Id</th>
            <th class="text-center">Mobile</th>
            <th class="text-center">Amount</th>
            <th class="text-center">DSA</th>
            <th class="text-center">Receipt No</th>
            <th class="text-center">Pay Date</th>
            <th class="text-center">Action</th>
                       
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($amcDetails as $info){ ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $info->member_id;?></td>
            <td><?= $info->name;?></td>
            <td><?= $info->email;?></td>
            <td><?= $info->mobile;?></td>
            <td><?= $info->amount;?></td>
            <td><?= $info->dsa_assigned;?></td>
            <td><?= $info->txnID;?></td>
            <td><?= $info->amcDate;?></td>
            <td><a href="{{url('/amc/receipt')}}/<?= $info->member_id;?>" class="fa fa-copy btn btn-success"> Print</a></td>
         <!--    <td><a href="{{url('generate-pdf')}}/<?= $info->member_id;?>" class="fa fa-copy btn btn-success"> View PDF</a></td> -->
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




@stop
@section('javascript')
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
    
@endsection
