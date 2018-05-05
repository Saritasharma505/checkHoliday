<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
  .dt-button:hover{ background-image:none !important;
background-color:#3c8dbc !important; }
</style>
    <h1 class="fa fa-credit-card"> Amc Report</h1>

<div id="page-wrapper">
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                          <div class="row">
                            <div class="col-lg-12">
                                <form method="get" action="<?php echo e(url('/amc-report/data')); ?>">
                                   <?php echo e(csrf_field()); ?> 
                                
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
                                <select class="form-control" name="dsa_assigned">
                                  <option>Please Select a DSA</option>
                                  <option>Sarita</option>
                                  <option>pradeep</option>
                                  <option>mohit</option>
                                 
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
                                            <th class="text-center">Member Name</th>
                                            <th class="text-center">Receipt ID</th>
                                            <th class="text-center">Payment Date</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">DSA Assigned</th>
                                    </tr>
                                </thead> 
                               <tbody>
                             
                              <?php $i=1; foreach($data as $info){?>
                                    <tr class="odd gradeX">
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $info->member_id;?></td>
                                            <td><?= $info->name;?></td>
                                            <td><?= $info->txnID;?></td>
                                            <td><?= $info->paymentDate;?></td>
                                            <td><?= $info->amount;?></td>
                                            <td><?= $info->dsa_assigned;?></td>
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
    
        <?php $__env->stopSection(); ?>
        
<?php $__env->startSection('javascript'); ?>
 

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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>