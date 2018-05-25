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
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
   <div class=" col-md-12" style="margin-bottom: 20px;">
     <button class="btn btn-info" onclick="window.history.back();">Back</button>
           <a class="btn btn-danger" href="<?php echo e(url('complete')); ?>/<?php echo $messages[0]->memberShipid;?>">Done</a>
   </div>
  <div class=" col-md-6">
    <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Reminder data</h3>
            <?php if(Session::has('status')): ?>
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('status'); ?></em></div>
            <?php endif; ?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <form method="post" action="<?php echo e(route('remainder')); ?>">
           
            <?php echo csrf_field();?>
            
            <div class="form-group">

              <input name="memberShipid" class="form-control" type="hidden" value="<?php echo $messages[0]->memberShipid;?>">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" name="remainder" class="form-control" style="height: 100px" required placeholder="Message">
                    <?php echo $remainder;?>
                  </textarea>
            </div>
             <div class="box-footer">
            <div class="pull-right">
          
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Save</button>
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
<div class=" col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
          
            <h3 class="box-title">New Message</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body" id='overflowTest'>
          
           <ul class="chat">
           <?php foreach($messages as $msg){ 
            if($msg->user_id==1){ ?>
                      <li class="col-md-offset-6 left clearfix img-circle">
                      <div class="col-md-offset-6col-md-6" style="background: green; height: 100px; width: 300px; margin-top: 20px; text-align: left;">
                      <span class="chat-img pull-right">
                          <img src="<?php echo e(URL::to('/vendor/download.jpeg')); ?>" alt="User Avatar" class="img-circle" height="30" width="30"/>
                      </span>
                          <div class="chat-body clearfix">
                              <div class="header">URL::                                    <strong class="primary-font img-circle"> <?php echo $msg->subject;?></strong> <small class="pull-right text-muted">
                                      <span class="glyphicon glyphicon-time"></span></small>
                              </div>
                              <p>
                                  <?php echo $msg->message;?>
                              </p>
                          </div>
                          </div>
                      </li>
                       <?php } else { ?>
                      <li class="left clearfix">
                          <div style="background: #ccc; height: 100px; width: 300px; margin-top: 20px; text-align: right;">
                      <span class="chat-img pull-left">
                          <img src="<?php echo e(URL::to('/vendor/download.jpeg')); ?>" alt="User Avatar" class="img-circle" height="30" width="30" />
                      </span>
                          <div class="chat-body clearfix">
                              <div class="header">
                                  <small class=" text-muted"><span class="glyphicon glyphicon-time"><?php echo $msg->created_at;?></span></small><br>
                                  <strong class="pull-right primary-font"> <?php //echo $msg->subject;?></strong>
                              </div><br>

                              <p>
                                 <?php echo $msg->message;?>
                              </p>
                          </div>
                          </div>
                      </li>
                      <?php } }?>
                     
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
  <div class="col-md-12">
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
              <input type="hidden" name="subject" class="form-control" placeholder="Subject:" value="issue">
              <input name="memberShipid" class="form-control" type="hidden" value="<?php echo $messages[0]->memberShipid;?>">
              <input name="user_id" class="form-control" type="hidden" value="2">
            </div>
            <div class="form-group">
                  <textarea id="editor1" rows="10" cols="80" name="message" class="form-control" style="height: 100px" required placeholder="Message">
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
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js">
  
</script>
<script>
  CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>