<?php $request = app('Illuminate\Http\Request'); ?>

<?php $__env->startSection('content'); ?>
<style>
#overflowTest {
  padding: 15px;
  width: 100%;
  height: 250px;
  overflow: scroll;
  border: 1px solid #ccc;
}
ul li{ text-decoration: none; list-style-type: none;}
</style>
<div id="page-wrapper">
<div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
          <button class="btn-info" onclick="window.history.back();">Back</button>
            <h3 class="box-title">New Message</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" id='overflowTest'>
          
           <ul class="chat">
           <?php if($messages!=""){foreach($messages as $msg){ 
            if($msg->user_id==0){ ?>
                      <li class="left clearfix img-circle">
                      <div style="background: #ff9; height: 100px; width: 300px; margin-top: 20px; text-align: left;">
                      <span class="chat-img pull-left">
                          <img src="<?php echo e(URL::to('/vendor/download.jpeg')); ?>" alt="User Avatar" class="img-circle" height="30" width="30"/>
                      </span>
                          <div class="chat-body clearfix">
                              <div class="header">URL::                                    <strong class="primary-font img-circle"> <?php echo $msg->subject;?></strong> <small class="pull-right text-muted">
                                      <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                              </div>
                              <p>
                                  <?php echo $msg->message;?>
                              </p>
                          </div>
                          </div>
                      </li>
                       <?php } else { ?>
                      <li class="left clearfix">
                          <div style="background: #ff9; height: 100px; width: 300px; margin-top: 20px; text-align: right;">
                      <span class="chat-img pull-left">
                          <img src="<?php echo e(URL::to('/vendor/download.jpeg')); ?>" alt="User Avatar" class="img-circle" height="30" width="30" />
                      </span>
                          <div class="chat-body clearfix">
                              <div class="header">
                                  <small class=" text-muted"><span class="glyphicon glyphicon-time"><?php echo $msg->created_at;?></span></small><br>
                                  <strong class="pull-right primary-font"> <?php echo $msg->subject;?></strong>
                              </div><br>
                              <p>
                                 <?php echo $msg->message;?>
                              </p>
                          </div>
                          </div>
                      </li>
                      <?php } } }?>
                     
                  </ul>
         <!--  <?php //foreach($messages as $msg){ 
            //if($msg->user_id==0){ ?>
          <div class="col-md-2 col-md-offset-2">Subject: <?php //echo $msg->subject;?></div>
          <div class="col-md-2 col-md-offset-5"><?php //echo $msg->message;?></div>
         <?php //} else { ?>
         <div class="col-md-2 col-md-offset-2">Subject: <?php //echo $msg->subject;?></div>
          <div class="col-md-2 col-md-offset-5"><?php //echo $msg->message;?></div>
         <?php //} }?>
          </div>

        </div> -->
        <!-- /. box -->
  </div> 
  <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Send Message</h3>
            <?php if(Session::has('status')): ?>
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('status'); ?></em></div>
            <?php endif; ?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <form method="post" action="<?php echo e(url('admin/send-message-user-admin-member')); ?>">
           
            <?php echo csrf_field();?>
            
            <div class="form-group">
              <input name="subject" class="form-control" placeholder="Subject:" value="<?php echo $messages[0]->subject;?>">
              <input name="member_id" class="form-control" type="hidden" value="<?php echo $messages[0]->member_id;?>">
              <input name="user_id" class="form-control" type="hidden" value="1">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" name="message" class="form-control" style="height: 100px" required placeholder="Message">
                  </textarea>
            </div>
             <div class="box-footer">
            <div class="pull-right">
          
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
            </div>
           
          </div>
           </form>
          </div>

          <!-- /.box-body -->
         
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
  </div>        
</div>


<?php $__env->stopSection(); ?>
<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>