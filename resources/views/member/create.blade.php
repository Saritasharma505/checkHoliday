@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
<h1 class="fa fa-users">&nbsp; Add Member </h1>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{URl('member')}}"><button type="button" class="btn btn-success">Back </button></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="container">
                       <div class="row" >
                            <div class="col-md-8">
                                <form action="{{ url('/add-member/save')}}" name="memberForm" method="post" id="addUser" role="form">
                                    {{csrf_field()}}
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
                                                      <label>Membership Id</label>
                                                      <input type="text" class="form-control" id="memberShipid" name="memberShipiddata" readonly>
                                                   <input type="hidden" name="last_id" value="<?php echo $sequencesNo[0]->id;?>"> 
                                                    </div>                         
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Approval Form No</label>
                                                        <input type="text" class="form-control digits  is_unique" id="a_no" name="a_no" value="<?php //echo set_value('ano');?>"  >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Main Applicant Name</label>
                                        <input type="text" class="form-control" id="m_name"  name="m_name" value="" maxlength="30" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword"> Date Of Birth</label>
                                        <input type="date" class="form-control"  id="dob1" name="dob1" placeholder="YYYY-MM-DD" value="<?php //echo set_value('dob1'); ?>">
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Co-applicant Name</label>
                                        <input type="text" class="form-control" id="c_name" name="c_name" value="<?php //echo set_value('Cname'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Date of Birth</label>
                                        <input type="date" class="form-control"  id="dob2" name="dob2" value="<?php //echo set_value('dob2'); ?>" >
                                    </div>
                                </div>    
                            </div>
                             
                           <a href="#tab2" id="button1" data-toggle="tab" class="btn pull-right">Next</a>
                           </div>
                                          <div class="tab-pane" id="tab2">
                                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile"> First Nominee Name</label>
                                        <input type="text" class="form-control" id="firstNomineeName" name="firstNomineeName" value="<?php //echo set_value('firstNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Date of Birth</label>
                                        <input type="date" class="form-control"  id="firstNDob" name="firstNDob" value="<?php //echo set_value('firstNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Second Nominee Name</label>
                                        <input type="text" class="form-control" id="secondNomineeName" name="secondNomineeName" value="<?php //echo set_value('secondNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Date of Birth</label>
                                        <input type="date" class="form-control"  id="secondNDob" name="secondNDob" value="<?php //echo set_value('secondNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Third Nominee Name</label>
                                        <input type="text" class="form-control" id="thirdNomineeName" name="thirdNomineeName" value="<?php //echo set_value('thirdNomineeName'); ?>" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Date of Birth</label>
                                        <input type="date" class="form-control"  id="thirdNDob" name="thirdNDob" value="<?php //echo set_value('thirdNDob'); ?>" >
                                    </div>
                                </div>    
                            </div>
                                            <a href="#tab1" data-toggle="tab" class="btn pull-left">Prev</a>
                                            <a href="#tab3" data-toggle="tab" class="btn pull-right">Next</a>
                                          </div>

                                           <div class="tab-pane" id="tab3">
                                            
                                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control"  id="address"  name="address" value="<?php //echo set_value('address'); ?>">
                                    </div>
                                </div> 
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>City</label>
                                      <input type="text" class="form-control" id="city"  name="city" value="<?php //echo set_value('address'); ?>">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <input type="text" class="form-control digits"  id="pin" name="pin" value="<?php //echo set_value('pin'); ?>" maxlength="6" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Mobile No1</label>
                                     <input type="text" class="form-control digits" id="mob1"  name="mob1" value="<?php //echo set_value('mob1'); ?>" maxlength="14" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile No2</label>
                                        <input type="number" class="form-control digits" id="mob2" name="mob2" value="<?php //echo set_value('mob2'); ?>" maxlength="14">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Phone No</label>
                                         <input type="text" class="form-control digits" id="r_no"  name="r_no" value="<?php //echo set_value('rno'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input type="email" class="form-control"  id="email" name="email" value="<?php //echo set_value('email'); ?>" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Date Of Joining</label>
                                    <input  class="form-control" id="doj" name="doj" value="<?php echo date('y/m/d'); ?>" readonly >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tenure</label>
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
                                      <label>Validity Date</label>
                                            <input class="form-control" id="vdate"  name="vdate" value="<?php //echo set_value('vdate'); ?>" readonly >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Card Type(Season)</label>
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
                                      <label>Apartment</label>
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
                                        <label>Person Occupancy</label>
                                        <input type="text" class="form-control" id="occupancy" name="occupancy"  value="<?php //echo set_value('occupancy'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Days</label>
                                      <select class="form-control" name="days" id="days" >
                                          <option value="">Select Days</option>
                                          <option value="3N/4D">3N/4D</option>
                                          <option value="6N/7D">6N/7D</option>
                                      </select>
                                  </div>             
                                </div>
                                
                            </div>
                            
                                        <a href="#tab2" data-toggle="tab" class="btn pull-left">Prev</a>
                                         
                                         <a href="#tab4" data-toggle="tab" class="btn pull-right">Next</a>
                                          </div>

                                           <div class="tab-pane" id="tab4">
                                            
                                            <div class="row">
                                        <div class="col-md-4">                                
                                    <div class="form-group">
                                      <label>Purchase Amount</label>
                                     <input type="text" class="form-control digits" id="pamount"  name="purchase_amount" value="<?php //echo set_value('pamount'); ?>">  
                                    </div>                         
                                </div>
                                <?php foreach($adminAmount as $amount){?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Admin Amount</label>
                                        <input type="text" class="form-control digits" id="aamount" name="admin_amount" value="<?= $amount->adminAmount;?>">
                                    </div>
                                </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" class="form-control digits" id="tamount" name="total_amount" value="<?php //echo set_value('tamount'); ?>" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Initial Payment</label>
                                    <input type="text" class="form-control digits" id="ipayment"  name="initial_payment" value="<?php //echo set_value('ipayment'); ?>">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mode Of Payment</label>
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
                                       <label>Name of Card Holder</label>
                                       <input type="text" name="name_on_card" id="name_on_card" class="form-control" >
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                       <label>First & last 4 digits of Card</label>
                                       <input type="text" name="card_number" class="form-control" id="card_number" >
                                   </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Type Of Card</label> 
                                       <select class="form-control" name="name_of_card" >
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
                                         <label>Name of Bank</label> 
                                         <input type="text" name="name_of_bank" class="form-control" id="name_of_bank">
                                      </div> 
                                   </div> 
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label>Cheque Number</label>
                                           <input type="text" name="cheque_number" class="form-control" id="cheque_number">
                                       </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Name On The Cheque</label> 
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
                                       <label>Name of Card Holder</label>
                                       <input type="text" name="name_on_card1" id="name_on_card1" class="form-control" >
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                       <label>Card Number last 4 digits</label>
                                       <input type="text" name="card_number1" class="form-control" id="card_number1" >
                                   </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Type Of Card</label> 
                                       <select class="form-control" name="name_of_card2" >
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
                              <div class="row">
                                 <div class="col-md-6">

                                    <div class="form-group">
                                    <label>Card Holder Name:</label><br/><br/>
                                    <label>Card Amount:</label><br/><br/>
                                    <label>First & last 4 digits of Card No :</label>
                                 </div> 
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" name="card_holder_name" class="form-control" id="card_holder_name"><br/>
                                     <input type="text" name="card_amount" class="form-control" id="card_amount"><br/>
                                     <input type="text" name="card_number_digits" class="form-control" id="card_number_digits">
                                     </div>
                                 </div>
                              </div>  
                               <hr>
                               <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Cash:</label> 
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                     <input type="text" name="cash_amount" class="form-control" id="card_amount">
                                     </div>
                                 </div>
                              </div>  
                               <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Online:</label> 
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                     <input type="text" name="online_amount" class="form-control" id="online_amount">
                                     </div>
                                 </div>
                              </div> 
                              <hr>
                             <center> <u><h4>Cheque Details</h4></u> </center>
                               <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Cheque Holder Name:</label><br/><br/>
                                     <label>Cheque Number:</label><br/><br/>
                                    <label>Cheque Amount:</label> 
                                    
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                     <div class="form-group">
                                     <input type="text" name="cheque_holder_name" class="form-control" id="cheque_holder_name"><br/>
                                     <input type="text" name="cheque_number_digits" class="form-control" id="cheque_number_digits"><br/>
                                     <input type="text" name="cheque_amount" class="form-control" id="cheque_amount">
                                     </div>
                                 </div>
                              </div>  
                            </div>
                            <hr>
                        <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Balance Amount</label>
                                      <input type="text" class="form-control digits" id="bal"  name="bal" value="<?php //echo set_value('bal'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Balance Payment Mode</label>
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
                                      <label>No Of EMI</label>
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
                                        <label>EMI Amount</label>
                                        <input type="text" class="form-control digits" id="eamount" name="emi_amount" value="<?php //echo set_value('eamount'); ?>" >
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>EMI Start</label>
                                    <input type="date" class="form-control" id="edate"  name="emi_start_date" value="<?php //echo set_value('edate'); ?>">
                                    </div>                         
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label>AMC(Amount)</label>
                                        <input type="text" class="form-control digits" id="amc" name="amc" value="<?= $amount->amcAmount; ?>">
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                             <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>Executive Name</label>
                                        <input type="text" class="form-control" id="ename"  name="excutive_name" value="<?php //echo set_value('ename'); ?>" >
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Manager Name</label>
                                        <input type="text" class="form-control" id="mname"  name="manager_name" value="<?php //echo set_value('mname'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                      <label>DSA Name</label>
                                      <input type="text" class="form-control" id="dsa"  name="dsa_name"  value="">
                                    </div>                         
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label>Member Offer</label>
                                        <input type="text" class="form-control  " id="moffer" name="moffer" value="<?php //echo set_value('moffer'); ?>"> -->
                                        <center><p class="offer" id="show"> Extra Offer</p></center>

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
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                      <input type="hidden" name="txnID" id="txnID" value="pradeep"> 
                                   </div> 
                                </div>
                            </div>

                                            <input type="submit" id="submit" name="submit" class="btn btn-success right" value="Save"> 
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

 @section('javascript')
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

@stop
@endsection
