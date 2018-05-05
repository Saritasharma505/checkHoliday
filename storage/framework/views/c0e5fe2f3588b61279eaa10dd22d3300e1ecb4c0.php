<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-users">&nbsp; Payment Receipt</h1>

<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      <div class="panel panel-default">
       <div class="panel-heading">
          <a href="<?php echo e(URl('member')); ?>"><button type="button" class="btn btn-success">Back </button></a>
          <button type="button" class="btn btn-success" onclick="voucherPrint()">Print this page</button>
       </div>
      <!-- /.panel-heading -->
			 <div class="panel-body">
	
      
  <div class="section">
    <?php foreach($memberInfo as $info){ ?>
    <?php foreach ($paymentInfo as $receipt) {?>
      
   
     <div>
      <div class="section2">
        <label><img src="http://theholidaysclubs.com/resource/img/logo.png" height="50px"></label>
      </div>
      
            <div class="section4">
		        CLUBHOLIDAYS AND RESORTS (OPC) PVT. LTD.</br>
		        Mail: <b>info@theholidaysclubs.com </b><br/>
		        Website: <b>www.theholidaysclubs.com</b><br/>
		        Date:<b> <?php echo date("Y-m-d")?></b><br/>
          </div>
      
			  <div class="section1">  
			      
			      <center><label style="margin-top:7px;">  Receipt :<b><?= $receipt->txnID;?></b> </label></center>
			    </div>
  </div>
    
    <div class="section3">
    Membership : <b><?= $info->memberShipid;?></b>
    <p>We acknowledge the receipt of the following on account of Membership taken of Clubholidays And Resorts (OPC) Pvt. Ltd.</p>
    <p>
        Agreement No: <br/>
        Location: <b><?= $info->city;?></b><br/>
        Cash/Card/Online/Cheque:<b><?= $info->mode_of_payment;?></b><br/>
    Main Applicant Name:<b><?= $info->m_name;?></b><br/>
    </p>

    <div style="margin-left: 300px; margin-top: -87px;">
      <table>
                <tr>
                  <th> User Name:.</th>
                  <th> Password:.</th>
                </tr>
                <tr>
                  <td><?= $info->email;?></td>
                  <td><?= $info->password;?></td>
                </tr>
              </table>
    </div>
    </div><br/>
    
    
  <div
    <form>
      <table width="100%">
    <tr background-color="green">
      <td colspan="2" align="center">Payment Details</td>
    </tr>
        <tr>
          <td>Particulars</td>
          <td>Amount</td>
        </tr>
        <tr>
          <td>Initial Deposit </td>
          <td><?= $info->initial_payment;?></td>
        </tr>
        <tr>
          <td>EMI (For the month of)</td>
          <td></td>
        </tr>
        <tr>
          <td>Cheque Bounce Charges (Rs.350/- Per EMI Per Month)</td>
          <td></td>
        </tr>
    <tr>
      <td>Late Payment Charges Rs.750/- Per EMI/ Per Month</td>
      <td></td>
    </tr>
    <tr>
      <td>Exchange Fees</td>
      <td></td>
    </tr>
    <tr>
      <td>Maintenance Charge</td>
      <td><?= $info->amc;?></td>
    </tr>
    <tr>
      <td>Full & Final/ Part Payment</td>
      <td></td>
    </tr>
    <tr>
      <td>Others (Specify)</td>
      <td></td>
    </tr>
    <tr>
      <td>Total (Non Refundable)</td>
      <td><?= $info->total_amount;?></td>
    </tr>
    <tr>
      <td>Balance Due</td>
      <td><?= $info->bal;?></td>
    </tr>
      </table>
    </form>
  </div>
  <div>
    <div class="section6">
      <p><b>Terms & Conditions: </b><br/>
    <ul>
    <li>All payments are subject to realization </li>
    <li>Any payment made towards the membership or any product it not refundable in any curcumas stands.</li>
    <li>Payment should be made to authorize Representative only against official receipt. </li>
    <li>Making any payment towards membership ensures the acceptance of all terms & conditions of agreement and membership.</li>
    
    </ul>
    </p>
    
    </div>
    
  </div>
   <div style="min-height:50px; margin-top: 50px;">
  <div style="  min-height:40px; margin-left:20px;">
      <center>This is computer generated receipt signature not required</center>
  </div>
  </div>
  
	
 			 </div>
 			 <?php }}?>
 </div>
 </div>
 </div>
 </div>
 


<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
function voucherPrint() {
    window.print();
}
</script>

 <style>
    
    .section{
    width:100%;
    border:1px solid black;
    }
    .section1{
    width:100%;
    height:30px;
    background-color:orange;
    }
    .section2{
    width:280px;
    height:150px;
    
    }
    .section2 label{
    padding:10px;
    }
    .section3{
      padding:5px;
  }
  
    .section4{
    width:400px;
    margin-top:-152px;
    margin-left:320px;
  
    
    
    }
    .section4 label{
    padding:3px;
    }
    table, th, td {
    border: 1px solid black;
    padding:3px;
    
    }
    
    .section6{
      width:100%;
      height:auto;
      
    }
    .section6 p{
    margin-left:25px;
    
    }
    .section7{
      width:200px;
      height:200px;
      margin-left:410px;
     
      
    }
    .section7 p{
    margin-left:25px;
    }
    .section8 p{
    padding:10px;
    }

    </style>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>