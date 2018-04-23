@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h1 class="fa fa-gift">&nbsp; Print Gift Voucher </h1>

<?php foreach($printVoucher as $vouchers) {?>
<div id="page-wrapper">
   <div class="row">
     <div class="col-lg-12">
      		<div class="panel panel-default">
       			<div class="panel-heading">
         			 <a href="{{URl('voucher')}}"><button type="button" class="btn btn-success">Back </button></a>
         			 <!-- <a href="{{URl('/voucher/print')}}/<?= $vouchers->id;?>"><button type="button" class="btn btn-success">Print </button></a> -->
               <button type="button" class="btn btn-success" onclick="voucherPrint()">Print this page</button>
       			</div>
      <!-- /.panel-heading -->
				 <div class="panel-body">
				 
				 	<div>
				 	<p style="font-size: 25px;">Thank You</p>
				 		<table style="width: 100%">
							<tr>
								<td style="float: left;">Gift&nbsp;Code:&nbsp;<b><?= $vouchers->vcode;?></b></td>
								<td style="float: right;padding-left: 100%;"><img src="http://www.webhint.in/theholidays/new/images/logo.png" alt="the Holidays Clubs" align="center"></td>
							</tr>
						</table>
						<p style="font-size: 30px;font-family: "Tangerine", serif;">Congrulations!</p>
<p>On participation in the presentation of The Holidays Club, this voucher is issued to: <b><?= $vouchers->gname; ?></b></p>

<p>Issued on: <b><?= $vouchers->dog; ?></b> valid for six months from the date of issue.

     To avail for this offer you must have at least three options of dates and destination in which the management has the right to offer you any one of the given destination/dat. this voucher entitles you to 3N/4D accommodation at our associate hotels. </p>
<ul>
	<li>This holiday voucher is redeemable for 3N/4D accommodation only in STD/Semi Deluxe room only at The Holidays Club Hotels.</li>
     <li>This voucher can be used at associate Hotels & Resorts only.</li>
     <li>This voucher is only for 2 adults(Couple) and 2 kids (age: below 12 Years).</li>
     <li>This voucher is not valid during peak season & public holidays,as well as Diwali, Christmas, New Year, Independence Day, Republic Day and long weekends.</li>
     <li>This voucher is not transferable & cannot be redeemed for cash.</li>
    <li>A prepaid administration fee of Rs.3000/- is mandatory to pay in advance by CH/CC/NEFT/IMPS. For Neft/ Imps, a mail will be sent for account details from info@theholidaysclubs.com .</li>
</ul>
 <p> It cannot be by verbal commitment of any person.(No Verbal assurance from whom-so ever is acceptable for voucher redemption/reservation.)</p>

    <p> Booking is subject to availability.</p>
    <p> Extra charge as per hotels policy.</p>
    <p> Company will entertain 1 voucher for one family either member or non-member.</p>      
    <p>Destination: Rishikesh, Shimla, Haridwar, Shirdhi, Jodhpur, Goa, Agra, Manali, Jaipur,Jibhi, Nainital</p>
    <p>For booking kindly send the scanned copy of your voucher at booking@theholidaysclubs.com along with three choices of destinations and dates providing at least 30-45 days of advance notice.</p>
				 	</div>
			 	 <table style="width: 100%;">
  	<tbody>
  		<tr>
  		<td></td>
  		<td>CHOICE 1</td>
  		<td>CHOICE 2</td>
  		<td>CHOICE 3</td>
  	   </tr>
  	<tr>
  		<td>Destination</td>
  		<td>.................</td>
  		<td>.................</td>
  		<td>.................</td>
  	</tr>
  	<tr>
  		<td>Date</td>
  		<td>.................</td>
  		<td>.................</td>
  		<td>.................</td>
  	</tr>	
   	</tbody>
  </table> 

			<?php }?>
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 
@endsection
@section('javascript')
<script>
function voucherPrint() {
    window.print();
}
</script>
@endsection