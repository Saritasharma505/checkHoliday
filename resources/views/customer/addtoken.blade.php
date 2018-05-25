@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
<style>
#overflowTest {
    padding: 15px;
    width: 100%;
    height: 250px;
    overflow: scroll;
    border: 1px solid #ccc;
}
ul li{ text-decoration: none; list-style-type: none;}
input{ margin-top: 10px; }
</style>
<div id="page-wrapper">
<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            
           
            <div class="col-md-6 col-md-offset-3">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">New Complain</h3>
                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form method="post" action="{{ url('admin/complain-user-record-detail')}}">
                     
                      <?php echo csrf_field();?>
                      
                      <div class="form-group">
                        <input name="memberShipid" class="form-control" placeholder="Member Id:" required>
                        <input name="subject" class="form-control" type="text" placeholder="Subject">
                        
                        <input name="user_name" class="form-control" type="text" placeholder="User Name">
                      </div>
                      <div class="form-group">
                            <textarea id="compose-textarea" name="message" class="form-control" style="height: 100px" required placeholder="Broblam">
                            </textarea>
                      </div>
                       <div class="box-footer">
                      <div class="pull-right">
                    
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
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


@endsection




