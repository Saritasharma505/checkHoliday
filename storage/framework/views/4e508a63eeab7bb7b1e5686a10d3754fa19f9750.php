<?php $request = app('Illuminate\Http\Request'); ?>



<?php $__env->startSection('content'); ?>
<h1 class="fa fa-users">&nbsp; Add Member </h1>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo e(URl('member')); ?>"><button type="button" class="btn btn-success">Back </button></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="container">
                       <div class="row" >
                            <div class="col-md-8">
                                <form action="<?php echo e(url('/add-member/save')); ?>" name="memberForm" method="post" id="myform" role="form">
                                    <?php echo e(csrf_field()); ?>

                                     <div class="tabbable">
                                        <ul class="nav nav-tabs">
                                          <li class="active"><a href="#tab1" data-toggle="tab">Personal Information</a></li>
                                          <li class=""><a href="#tab2" data-toggle="tab">Nominee Details</a></li>
                                          <li class=""><a href="#tab3" data-toggle="tab">Packages Details</a></li>
                                          <li class=""><a href="#tab4" data-toggle="tab">Payment Details</a></li>
                                        </ul>

                                        <div class="tab-content">
                                          <div class="tab-pane active" id="tab1">
                                             
                                               <!-- sequences Number -->
                                           
                                            <div class="row">
                                                <div class="col-md-6">                                
                                                    <div class="form-group">
                                                      <label for="memberShipid">Membership Id</label>
                                                      <input type="text" class="form-control" id="memberShipid" name="memberShipiddata" readonly>
                                                   <input type="hidden" name="last_id" value="<?php echo $sequencesNo[0]->id;?>"> 
                                                    </div>                         
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="a_no">Approval Form No</label>
                                                        <input type="text" class="form-control digits  is_unique" id="a_no" name="a_no" value="<?php //echo set_value('ano');?>"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="m_name">Main Applicant Name</label>
                                        <input type="text" class="form-control" id="m_name"  name="m_name" value="" maxlength="30" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob1"> Date Of Birth</label>
                                        <input type="date" class="form-control"  id="dob1" name="dob1" placeholder="YYYY-MM-DD" value="<?php //echo set_value('dob1'); ?>">
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="c_name">Co-applicant Name</label>
                                        <input type="text" class="form-control" id="c_name" name="c_name" value="<?php //echo set_value('Cname'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob2">Date of Birth</label>
                                        <input type="date" class="form-control"  id="dob2" name="dob2" value="<?php //echo set_value('dob2'); ?>" >
                                    </div>
                                </div>    
                            </div>
                             
                           <a cla href="#tab2" id="button1" data-toggle="tab" class="btn pull-right btn-success">Next</a>
                           </div>
                                          <div class="tab-pane" id="tab2">
                                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNomineeName"> First Nominee Name</label>
                                        <input type="text" class="form-control" id="firstNomineeName" name="firstNomineeName" value="<?php //echo set_value('firstNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstNDob">Date of Birth</label>
                                        <input type="date" class="form-control"  id="firstNDob" name="firstNDob" value="<?php //echo set_value('firstNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="secondNomineeName">Second Nominee Name</label>
                                        <input type="text" class="form-control" id="secondNomineeName" name="secondNomineeName" value="<?php //echo set_value('secondNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="secondNDob">Date of Birth</label>
                                        <input type="date" class="form-control"  id="secondNDob" name="secondNDob" value="<?php //echo set_value('secondNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="thirdNomineeName">Third Nominee Name</label>
                                        <input type="text" class="form-control" id="thirdNomineeName" name="thirdNomineeName" value="<?php //echo set_value('thirdNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="thirdNDob">Date of Birth</label>
                                        <input type="date" class="form-control"  id="thirdNDob" name="thirdNDob" value="<?php //echo set_value('thirdNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>
                                            <a href="#tab1" data-toggle="tab" class="btn pull-left btn-success">Previous</a>
                                            <a href="#tab3" data-toggle="tab" class="btn pull-right btn-success">Next</a>
                                          </div>

                                           <div class="tab-pane" id="tab3">
                                            
                                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control"  id="address"  name="address" value="<?php //echo set_value('address'); ?>">
                                    </div>
                                </div> 
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="city">City</label>
                                      <input type="text" class="form-control" id="city"  name="city" value="<?php //echo set_value('address'); ?>">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pin">Pin Code</label>
                                        <input type="text" class="form-control digits"  id="pin" name="pin" value="<?php //echo set_value('pin'); ?>" maxlength="6" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="mob1">Mobile No1</label>
                                     <input type="text" class="form-control digits" id="mob1"  name="mob1" value="<?php //echo set_value('mob1'); ?>" maxlength="14" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mob2">Mobile No2</label>
                                        <input type="number" class="form-control digits" id="mob2" name="mob2" value="<?php //echo set_value('mob2'); ?>" maxlength="14">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="r_no">Phone No</label>
                                         <input type="text" class="form-control digits" id="r_no"  name="r_no" value="<?php //echo set_value('rno'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Id</label>
                                        <input type="email" class="form-control"  id="email" name="email" value="<?php //echo set_value('email'); ?>" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="doj">Date Of Joining</label>
                                    <input  class="form-control" id="doj" name="doj" value="<?php echo date('y/m/d'); ?>" readonly >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tenure">Tenure</label>
                                        <select class="form-control" id="tenure" name="tenure" value="<?php //echo set_value('tenure'); ?>" onChange="validityDate()" >
                                <option value="">Select Tenure</option>
                                <option value="01">1</option>
                                <option value="03">3</option>
                                <option value="05">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="vdate">Validity Date</label>
                                            <input class="form-control" id="vdate"  name="vdate" value="<?php //echo set_value('vdate'); ?>" readonly >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ctype">Card Type(Season)</label>
                                        <select class="form-control" id="ctype" name="ctype" value="<?php //echo set_value('ctype'); ?>">
                            <option value="">Select Card Type</option>  
                            <option value="Red">Red</option>
                            <option value="White">White</option>
                            <option value="Blue">Blue</option>  
                            </select>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="apartment">Apartment</label>
                                       <select class="form-control" id="apartment"  name="apartment" 
                             value="<?php //echo set_value('apartment'); ?>" >
                             <option value="">Select Apartment</option>
                             <option value="Studio-2">Studio-2</option> 
                             <option value="1 BR-4">1 BR-4</option>  
                            </select>
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="occupancy">Person Occupancy</label>
                                        <input type="text" class="form-control" id="occupancy" name="occupancy"  value="<?php //echo set_value('occupancy'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="days">Days</label>
                                      <select class="form-control" name="days" id="days" >
                                          <option value="">Select Days</option>
                                          <option value="3N/4D">3N/4D</option>
                                          <option value="6N/7D">6N/7D</option>
                                      </select>
                                  </div>             
                                </div>
                                
                            </div>
                            
                                        <a href="#tab2" data-toggle="tab" class="btn pull-left btn-success">Previous</a>
                                         
                                         <a href="#tab4" data-toggle="tab" class="btn pull-right btn-success">Next</a>
                                          </div>

                                           <div class="tab-pane" id="tab4">
                                            
                                            <div class="row">
                                        <div class="col-md-4">                                
                                    <div class="form-group">
                                      <label for="pamount">Purchase Amount</label>
                                     <input type="text" class="form-control digits" id="pamount"  name="purchase_amount" value="<?php //echo set_value('pamount'); ?>">  
                                    </div>                         
                                </div>
                                <?php foreach($adminAmount as $amount){?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="aamount">Admin Amount</label>
                                        <input type="text" class="form-control digits" id="aamount" name="admin_amount" value="<?= $amount->adminAmount;?>">
                                    </div>
                                </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tamount">Total Amount</label>
                                        <input type="text" class="form-control digits" id="tamount" name="total_amount" value="<?php //echo set_value('tamount'); ?>" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="ipayment">Initial Payment</label>
                                    <input type="text" class="form-control digits" id="ipayment"  name="initial_payment" value="<?php //echo set_value('ipayment'); ?>">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mop">Mode Of Payment</label>
                                        <select class="form-control" id="mop" name="mode_of_payment" >
                                <option value="">Select Mode Of Payment</option>
                                <option value="card">Card</option>
                                <option value="cheque">Cheque</option>
                                <option value="online">Online</option>
                                <option value="cash">Cash</option>
                                <option value="multiple">Multiple</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card paymentDetail">
                                 <h4 style="padding-left: 2%">Card Details</h4>
                            <div class="row">                        
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="name_on_card">Name of Card Holder</label>
                                       <input type="text" name="name_on_card" id="name_on_card" class="form-control" >
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="card_number">First & last 4 digits of Card</label>
                                       <input type="text" name="card_number" class="form-control" id="card_number" >
                                   </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="name_of_card">Type Of Card</label> 
                                       <select class="form-control" name="name_of_card" id="name_of_card">
                                           <option value="">Select Type Of Card</option>
                                           <option value="visa">VISA</option>
                                           <option value="master_card">Master Card</option>
                                           <option value="american_express">American Express</option>
                                           <option value="diners">Diners</option>
                                           <option value="rupee">Rupee</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="cheque paymentDetail">
                                <h4 style="padding-left: 2%">Cheque Details</h4>
                                <div class="row">
                                   <div class="col-md-6">
                                      <div class="form-group">
                                         <label for="name_of_bank">Name of Bank</label>
                                         <input type="text" name="name_of_bank" class="form-control" id="name_of_bank">
                                      </div> 
                                   </div> 
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="cheque_number">Cheque Number</label>
                                           <input type="text" name="cheque_number" class="form-control" id="cheque_number">
                                       </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="name_on_cheque">Name On The Cheque</label> <br>
                                           <input type="text" name="name_on_cheque" class="form-control" id="name_on_cheque" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="online paymentDetail">
                                 <h4 style="padding-left: 2%">Online Payment Details</h4>
                            <div class="row">                        
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="name_on_card1">Name of Card Holder</label>
                                       <input type="text" name="name_on_card1" id="name_on_card1" class="form-control" >
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="card_number1">Card Number last 4 digits</label>
                                       <input type="text" name="card_number1" class="form-control" id="card_number1" >
                                   </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="name_of_card2">Type Of Card</label> 
                                       <select class="form-control" name="name_of_card2" id="name_of_card2" >
                                           <option value="">Select Type Of Card</option>
                                           <option value="visa">VISA</option>
                                           <option value="master_card">Master Card</option>
                                           <option value="american_express">American Express</option>
                                           <option value="diners">Diners</option>
                                           <option value="rupee">Rupee</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="multiple paymentDetail">
                                <h4 style="padding-left: 2%">Multiple Payment Details</h4>
                               <center> <u><h4>Card Details</h4></u></center>
                               <ol id="Card_Details1">
                              <div class="row">
                                 <div class="col-md-6">

                                   <div class="form-group">
                                                <label>Card Type :</label><br/><br/><br/>
                                                 <label>Bank Name :</label><br/><br/><br/>
                                                <label>Card Holder Name:</label><br/><br/><br/>
                                                <label>Card Amount:</label><br/><br/><br/>
                                                <label>First & last 4 digits of Card No :</label>
                                             </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                     <select type="text" name="card_type[]" class="form-control" id="card_holder_name">
                                                        <option>Please Select Cards</option>
                                                        <option>Visa</option>
                                                        <option>Mastro</option>
                                                        <option>Rupay</option>
                                                        <option>other</option>
                                                    </select><br/>
                                    <input type="text" name="card_holder_name" class="form-control" id="card_holder_name"><br/>
                                     <input type="text" name="card_amount" class="form-control" id="card_amount"><br/><br/>
                                     <input type="text" name="card_number_digits" class="form-control" id="card_number_digits"><br/><br/>
                                      <input type="text" name="card_number_digits[]" class="form-control" id="card_number_digits">
                                     </div>
                                 </div>
                              </div>
                              </ol>
                               <div class="row"><a href="javascript:void(0)" class="btn btn-primary form-control" id="Card_Details"> <b>ADD Another Card Details</a></b>
                               </div>  
                               <hr>
                                <center> <u><h4>Cash Details</h4></u></center>
                               <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="cash_amount">Cash Amount:</label> 
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                     <input type="text" name="cash_amount" class="form-control" id="cash_amount">
                                     </div>
                                 </div>
                              </div>  
                               <hr>
                                <center> <u><h4>Net Banking Details</h4></u></center>
                               <div class="row">
                                          <ol id="netbanking_add">
                                           <div class="row">
                                           
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Transaction ID:</label> 
                                                </div>
                                             </div> 
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                 <input type="text" name="transaction_id[]" class="form-control" id="transaction_id">
                                                 </div>
                                             </div>
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Account Holder Name:</label> 
                                                </div>
                                             </div> 
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                 <input type="text" name="holder_name[]" class="form-control" id="holder_name">
                                                 </div>
                                             </div>
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Bank Name:</label> 
                                                </div>
                                             </div> 
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                 <input type="text" name="net_bank_name[]" class="form-control" id="net_bank_name">
                                                 </div>
                                             </div>
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Transaction Date:</label> 
                                                </div>
                                             </div> 
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                 <input type="date" name="t_date[]" class="form-control" id="t_date">
                                                 </div>
                                             </div>
                                          </div>
                                          </ol>
                                           <div class="row"><b><a class="btn btn-primary form-control" href="javascript:void(0)" id="netbanking">ADD Another Net Banking Details</b></a>
                                    </div>    
                              <hr>
                             <center> <u><h4>Cheque Details</h4></u> </center>
                                <ol id="Cheque_Details_add">
                                           <div class="row">
                                             <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Cheque Holder Name:</label><br/><br/>
                                                 <label>Cheque Number:</label><br/><br/>
                                                <label>Cheque Amount:</label> 
                                                </div>
                                             </div> 
                                             <div class="col-md-5">
                                                 <div class="form-group">
                                                 <input type="text" name="cheque_holder_name[]" class="form-control" id="cheque_holder_name"><br/>
                                                 <input type="text" name="cheque_number_digits[]" class="form-control" id="cheque_number_digits"><br/>
                                                 <input type="text" name="cheque_amount[]" class="form-control" id="cheque_amount">
                                                 </div>
                                             </div>
                                          </div>  
                                        </ol>
                               <div class="row"><a class="btn btn-primary form-control" href="javascript:void(0)" id="Cheque_Details"> ADD Another Check Details</a></div>
                            </div>
                        </div>
                            <hr>
                        <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="bal">Balance Amount</label>
                                      <input type="text" class="form-control digits" id="bal"  name="bal" value="<?php //echo set_value('bal'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bpm">Balance Payment Mode</label>
                                        <select class="form-control" id="bpm" name="bal_payment" >
                                <option value="">Select Mode Of Payment</option>
                                <option value="Card">Card</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Online">Online</option>
                                <option value="Cash">Cash</option>
                                <option value="Multiple">Multiple</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="nemi">No Of EMI</label>
                                        <select type="text" class="form-control" id="nemi" name="no_of_emi" >
                                       <option value="">Select No Of EMI</option>
                                       <option value="1">No EMI</option>
                                       <option value="3">3</option>
                                       <option value="6">6</option>
                                       <option value="12">12</option>
                                       <option value="18">18</option>
                                       <option value="24">24</option>
                                       <option value="36">36</option>
                            </select>
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="eamount">EMI Amount</label>
                                        <input type="text" class="form-control digits" id="eamount" name="emi_amount" value="<?php //echo set_value('eamount'); ?>" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="edate">EMI Start</label>
                                    <input type="date" class="form-control" id="edate"  name="emi_start_date" value="<?php //echo set_value('edate'); ?>">
                                    </div>                         
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="amc">AMC(Amount)</label>
                                        <input type="text" class="form-control digits" id="amc" name="amc" value="<?= $amount->amcAmount; ?>">
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="ename">Executive Name</label>
                                        <input type="text" class="form-control" id="ename"  name="excutive_name" value="<?php //echo set_value('ename'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mname">Manager Name</label>
                                        <input type="text" class="form-control" id="mname"  name="manager_name" value="<?php //echo set_value('mname'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label for="dsa">DSA Name</label>
                                      <input type="text" class="form-control" id="dsa"  name="dsa_name"  value="">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label>Member Offer</label>
                                        <input type="text" class="form-control  " id="moffer" name="moffer" value="<?php //echo set_value('moffer'); ?>"> -->
                                        <center><label for="moffer"><p class="offer" id="show"> Extra Offer</p></label></center>

                                        <d><textarea name="moffer" id="moffer" cols="40" rows="4" value="<?php //echo set_value('moffer'); ?>"></textarea></d>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                      <input type="hidden" name="dsa_id" id="dsa_id" value=""> 
                                   </div> 
                                </div>
                            </div>
                            <!-- Payment Table -->  
                             <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                      <input type="hidden" name="payDate" id="payDate" value="<?php echo date("Y-m-d")?>"> 
                                   </div> 
                                </div>
                            </div>
                            <div id="mailpreview" style="display: none;">
                         <iframe name="mailpreviewiframe" style="border: 0; width: 500px;height: 800;"></iframe></div>
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                      <input type="hidden" name="txnID" id="txnID" value="pradeep"> 
                                   </div> 
                                </div>
                            </div>

                                            <input type="submit" id="submit" name="submit" class="btn btn-success right" value="Submit"> 
                                            
                                          </div>
                                        </div>
                                      </div>
                                </form>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
 </div>


 <?php $__env->startSection('javascript'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>$(document).ready();</script>
<script>
    $('#show').click(function(event) {
        if(!$('input').val()==""){
            $('#button1').hide();
         }
          else {
           $('#button1').show();
         }
    });

</script>
<script>
$( document ).ready(function() {
$("#pamount").change(function(){
    $("#tamount").val(parseInt($("#aamount").val())+parseInt($("#pamount").val()));
}); 
$("#ipayment").change(function(){
    $("#bal").val(parseInt($("#tamount").val())-parseInt($("#ipayment").val()));
}); 
$("#nemi").change(function(){
    $("#eamount").val(Math.round(parseInt($("#bal").val())/parseInt($("#nemi").val())));
});
 $("#apartment").change(function(){
    if($("#apartment").val()=="Studio-2"){
        $("#occupancy").val(2);
    }else if($("#apartment").val()=="1 BR-4"){
        $("#occupancy").val(4);
    }
});
});
</script>
<script type="text/javascript">
 function validityDate(memberForm) 
 {
   
    var str = document.memberForm.doj.value;

    if( /^\d{2}\/\d{2}\/\d{4}$/i.test( str ) )
    {
       var parts = str.split("/");

       var day = parts[0] && parseInt( parts[0], 10 );

       var month = parts[1] && parseInt( parts[1], 10 );

       var year = parts[2] && parseInt( parts[2], 10 );

       var time = document.memberForm.tenure.value;

       var duration = time && parseInt(time,10);

       if( day <= 31 && day >= 1 && month <= 12 && month >= 1 )
       {
        var expiryDate = new Date( year, month - 1, day );
                expiryDate.setFullYear( expiryDate.getFullYear() + duration );

          var day = ( '0' + expiryDate.getDate() ).slice( -2 );
          var month = ( '0' + ( expiryDate.getMonth() + 1 ) ).slice( -2 );
           var year = expiryDate.getFullYear();

           document.memberForm.vdate.value = (day + "/" + month + "/" + year);

       }

       else
       {
        alert('something went wrong');
       }



    }
        
 }  
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
    $("#mop").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".paymentDetail").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".paymentDetail").hide();
            }
        });
    }).change();
});
    </script>
    <script>
$(document).ready(function(){
   
     $("d").hide();

    $("#show").click(function(){
        $("d").show();
    });
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="public/js/jquery-latest.js" type="text/javascript"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script>
$(document).ready(function(){
   
    $("#Card_Details").click(function(){
        $("#Card_Details1").append('<li><button type="button" class="close" data-dismiss="modal">&times;</button> <div class="row"><div class="col-md-5"><div class="form-group"><label>Cart Type :</label><br/><br/><br/> <label>Bank Name :</label><br/><br/><br/> <label>Card Holder Name:</label><br/><br/><br/><label>Card Amount:</label><br/><br/> <label>First & last 4 digits of Card No :</label></div></div><div class="col-md-5"><div class="form-group"><select type="text" name="card_type[]" class="form-control" id="card_holder_name"><option>Please Select Cards</option><option>Visa</option><option>Mastro</option><option>Rupay</option><option>other</option></select><br/><input type="text" name="bank_name[]" class="form-control" id="bank_name"><br/><input type="text" name="card_holder_name[]" class="form-control" id="card_holder_name"><br/> <input type="text" name="card_amount[]" class="form-control" id="card_amount"><br/><input type="text" name="card_number_digits[]" class="form-control" id="card_number_digits"></div> </div></div><br></li>');
    });
    
    $("#netbanking").click(function(){
        $("#netbanking_add").append('<li><button type="button" class="close" data-dismiss="modal">&times;</button><div class="col-md-5"><div class="form-group"><label>Transaction ID:</label></div></div><div class="col-md-5"><div class="form-group"><input type="text" name="transaction_id[]" class="form-control" id="transaction_id"></div></div><div class="col-md-5"><div class="form-group"><label>Account Holder Name:</label></div></div><div class="col-md-5"><div class="form-group"><input type="text" name="holder_name[]" class="form-control" id="holder_name"></div></div><div class="col-md-5"><div class="form-group"><label>Bank Name:</label></div></div><div class="col-md-5"> <div class="form-group"><input type="text" name="net_bank_name[]" class="form-control" id="net_bank_name"></div></div><div class="col-md-5"><div class="form-group"><label>Transaction Date:</label></div></div><div class="col-md-5"><div class="form-group"><input type="date" name="t_date[]" class="form-control" id="t_date"></div></div></div></li>');
    });
    $("#Cheque_Details").click(function(){
        $("#Cheque_Details_add").append('<li><button onclick="close(this)" type="button" class="close" data-dismiss="modal">&times;</button><div class="row"><div class="col-md-5"><div class="form-group"><label>Cheque Holder Name:</label><br/><br/><label>Cheque Number:</label><br/><br/><label>Cheque Amount:</label></div></div><div class="col-md-5"><div class="form-group"><input type="text" name="cheque_holder_name[]" class="form-control" id="cheque_holder_name"><br/><input type="text" name="cheque_number_digits[]" class="form-control" id="cheque_number_digits"><br/><input type="text" name="cheque_amount[]" class="form-control" id="cheque_amount"></div></div></div></li>');
    });
    
});
function close(e){
    e.parentNode.remove();
}


</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>