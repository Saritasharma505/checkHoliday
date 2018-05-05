<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-map-marker"> Venue Management</h1>



<link rel="stylesheet" href="<?php echo e(URL::asset('vendor/adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
     
        
          <div class="row justify-content-center">
            <div class="col-md-7">
             <div class="container">
                <div class="panel panel-default">
                    <div class="panel-header"><a class="btn btn-success" href="<?php echo e(route('location.index')); ?>">Back</a></div>
                    <div class="panel-body">
                    <div class="col-md-8 offset-2">
                   
                         <form  method="post" action="<?php echo e(URL('/locations/venue-add')); ?>">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="locationName" id="locationName" placeholder="Enter text">
                                                <option selected><?php echo $location[0]->locationName;?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Venue Name</label>
                                            <input type="text" class="form-control" name="sub_location" id="sub_location" placeholder="Venue Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>&nbsp;&nbsp;&nbsp;
                                            <label class="radio-inline">
                                                 
                                                <input name="status" id="active" value="1"  type="radio">Active
                                            </label>
                                            <label class="radio-inline">
                                                 
                                                <input name="status" id="Deactive" value="0" type="radio">Deactive
                                            </label>
                                            <input type="hidden" name="id" value="<?php echo $location[0]->id;?>">
                                    </div>
                                     <div class="form-group">
                                   <center>  <button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                                </div>
                          
                                </form>
                                <div class="row">
                                  </div>
                                 
                            </div>
                         </div>   
                  </div>
              </div>
          </div>
           </div>
      
    <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>
    
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>