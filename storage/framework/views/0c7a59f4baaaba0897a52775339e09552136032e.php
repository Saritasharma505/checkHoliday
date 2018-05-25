<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <a href="<?php echo e(URl('admin/complain')); ?>"><button type="button" class="btn btn-primary">ADD </button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button class="btn btn-danger" onclick="window.history.back();"> BACK</button> Members List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <table width="100%" class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ticket ID</th>
                                        <th>Membership ID</th>
                                        <th>Member Name</th>
                                        <th>Email Id</th>
                                       
                                        <th>Date</th>
                                        <th>Issue Raised</th>
                                       <th>Status</th>
                                

                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php $i=1; foreach ($user as $key => $value) {
                                  
                                      
                                    
                                    if($i%2==0){
                                   ?>
                                    <tr>
                                       <td><?php echo $i++  ;?></td>
                                       <td><?php echo $value->ticket_id;?></td>
                                        <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->m_name;?></td>
                                         <td><?php echo $value->email;?></td>
                                        
                                         <td><?php echo $value->created_at;?></td>
                                         <td><?php echo $value->subject;?></td>
                                         
                                        <td width="130"><a class=" btn btn-danger" href="<?php echo url('admin/customer-view-message');?>/<?php echo $value->memberShipid;?>">Complain</a>&nbsp;&nbsp;&nbsp;<!-- <a class="fa fa-envelope-open btn btn-danger" href="<?php //echo url('admin/customer-view-message-show');?>/<?php echo $value->memberShipid;?>"></a> --></td>
                                    </tr>
                                    <?php }else { ?>
                                     <tr class="success">
                                      <td><?php echo $i++  ;?></td>
                                      <td><?php echo $value->ticket_id;?></td>
                                        <td><?php echo $value->memberShipid;?></td>
                                         <td><?php echo $value->m_name;?></td>
                                         <td><?php echo $value->email;?></td>
                                        
                                         <td><?php echo $value->created_at;?></td>
                                         <td><?php echo $value->subject;?></td>
                                         
                                        <td width="130"><a class=" btn btn-danger" href="<?php echo url('admin/customer-view-message');?>/<?php echo $value->memberShipid;?>">Complain</a>&nbsp;&nbsp;&nbsp;<!-- <a class="fa fa-envelope-open btn btn-danger" href="<?php //echo url('admin/customer-view-message-show');?>/<?php echo $value->memberShipid;?>"></a> --></td>
                                    </tr>

                                       <?php } }  ?>
                                    
                                </tbody>

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                    
            <!-- /.row -->
        </div>
        <?php $__env->stopSection(); ?>
  <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>