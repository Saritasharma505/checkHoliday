
@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
  .dt-button:hover{ background-image:none !important;
background-color:#3c8dbc !important; }
</style>
    <h1 class="fa fa-users"> Member Report</h1>

<div id="page-wrapper">
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                          <div class="row">
                            <div class="col-lg-12">
                              <form method="get" action="{{route('memberData')}}">
                                   {{csrf_field()}} 
                                
                             <div class="col-md-3">
                              <div class="form-group">
                                 <label>To:</label>
                                <div class='input-group'>
                                    <input type='text' name="start_date" class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>From:</label>
                                <div class='input-group'>
                                    <input type='text' name="end_date" class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label class="form-control">Export Data By DSA</label>
                                <select class="form-control" name="dsa_name">
                                  <option>Please Select a DSA</option>
                                  <option>Sarita Sharma</option>
                                  <option>Pradeep Singh</option>
                                  <option>Dinesh Sharma</option>
                                 
                                </select>
                              </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-lg-10">
                                   <center> <input class="btn btn-primary fas fa-search" style="width: 120px;" type="submit" name="submit" value="Search"></center></div>
                            </div>
                             </form>   
                          </div>
                        </div>
                         
                      </div>

                        <!-- /.panel-heading member_id  name  email   mobile  amount  dsa_assigned  txnID   amcDate  -->
                        <div class="panel-body">
                            <div class="pre-scrollable">
                            <table width="100%" class="table table-bordered table-striped table-hover table-responsive" id="table">
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
                                     </tr>
                                </thead> 
                               <tbody>
                             
                              <?php $i=1; foreach($data as $info){?>
                                    <tr class="odd gradeX">
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
                                        
                                    </tr>
                                    <?php }?>
                                </tbody>
                                

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <!-- /.row -->
    
        @endsection
        
@section('javascript')
 

<script>
 $(document).ready(function() {
      $( function() {
    $( ".datepicker" ).datepicker();
  } );
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
              
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o">  Export To Excel</i>',
                titleAttr: 'Excel'
            },
      
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o">  Export To PDF</i>',
                titleAttr: 'PDF'
            }
        ]
    } );
} );
 </script>
 @endsection