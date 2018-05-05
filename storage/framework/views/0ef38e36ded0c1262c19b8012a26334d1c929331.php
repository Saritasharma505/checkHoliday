<?php $request = app('Illuminate\Http\Request'); ?>


<?php $__env->startSection('content'); ?>
    <h1 class="fa fa-users">&nbsp; Member Document Print</h1>

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
			 <?php foreach($memberPrint as $info){?>
			 	<div class="container">
				   
				  <div class="box-body">
			        <div class="box-body">
        <div class="row">
        <div class="col-lg-11">
        	<img src="http://theholidaysclubs.com/resource/img/logo.png"/>
         <center> <h4 class="memberpara" style="padding-top: 0;"><u>CLUBHOLIDAYS & RESORTS OPC<br/> PRIVATE LIMITED VACATIONS AGREEMENT </u>
</h4></center>
        <div class="membertable">
          <table style="width: 50%;">
            <tr>
              <th>Membership Id</th>
              <td><?= $info->memberShipid; ?></td>
              <td></td>
            </tr>
           
          </table>
           </div>
                   
          <p class="memberpara">This Vacations Purchase Agreement (“Agreement”) is made on <b><?php echo date("Y-m-d");?></b>(“Effective Date”) by and between CLUB HOLIDAYS & RESORTS OPC PVT. LTD., a company incorporated under the laws in India, having its registered office at Ansal Plaza Ghaziabad (hereinafter referred to as the “First party” / “ Company” / “CHRPL”, which terms shall, unless repugnant to the meaning or context thereof, include and deem to include its successor or successors in office or assigns), represented by Mr.<b><?= $info->m_name; ?></b> hereinafter referred to as Second Party/Vacationer Residing at <b><?= $info->address; ?>,<?= $info->pin; ?></b><br/>
            Mobile No <b><?= $info->mob1?>,<?= $info->mob2; ?> </b><br/>
            Email. <b><?= $info->email; ?> </b>  
            </p>

      <p class="memberpara" style="padding-bottom: 0 !important;margin-bottom: 0 !important;">The Company and Vacationer shall hereinafter be collectively referred to as "Parties" and individually as a "Party". AND WHEREAS the First Party is engaged in hospitality business for selling various vacation packages. AND WHEREAS the Second Party desires to purchase vacations of the company and accordingly he/she has thoroughly understood all the Terms & Conditions of the Vacations Agreement and has fully understood the nature and scope of this Agreement. CHRPL explained all the Terms & Conditions of the Agreement to the Second party and the second party has un-conditionality accepted the same. AND WHEREAS the Second Party hereby unconditionally gives his/her/their irrevocable consent to the signing of this Agreement with CHRPL. AND WHEREAS the Second Party hereby declares that He/she/they will abide by Rules & Regulations (including amendments made at the sole discretion of CHRPL from time to time) of CHRPL and also shall punctually, correctly and in full letter and spirit comply with the terms & conditions as set forth in this Agreement.<br/>

        NOW THE PARTIES HERETO AGREE AS FOLLOWS:<br/><br/>

        <u><b>VACATION BENEFITS:</b></u><br/><br/>
        1.  A stay for a period  up to:<br/><br/>
        <b><?= $info->days; ?></b><br/><br/>
        

        At CHRPL properties each year within India for the next <b><?= $info->tenure; ?></b> years (“Term”) from the Effective Date. <br/><br/>

        2.  The application for this vacation needs to be submitted along with a copy of acceptable proof of identity and proof of address. The vacation charges mentioned should be paid via Cheque/DD/PO/Credit Card/Debit Card favoring “CLUB HOLIDAYS & RESORTS OPC PVT. LTD., payable locally and should be submitted along with this Agreement. CASH REMITTANCE, if any, 
Should be made ONLY TO CHRPL’s ACCOUNTS DEPARTMENT at CHRPL office and spot receipt should be obtained along with a mail generated email sent to the registered email address of the Second Party. The Company will not be held responsible under any circumstances for cash payments made or alleged to be made to Company’s sales personnel, or any employees or Marketing Associates.
<br/><br/>

3.  The accommodation shall be provided in regular or superior or premium rooms, subject to availability. <br/><br/>

4.  Vacationer is entitled to accommodation for the selected time for either two adults and two children or three adults. In studio room a maximum of either (a) three (3) adults or (b) two (2) adults along-with two (2) children can be accommodated. For the purpose of clarity, studio room includes one room and one washroom only. Children’s above certain age shall be considered as adults. The criteria for age shall vary depending on the terms and conditions of the respective properties at which the arrangement is being made. Extra bed would be provided at the rate as applicable in allied (respective) properties. Dependant vacationers above eighteen (18) years are considered as adults. All bookings and room allocation is subject to availability. <br/><br/>

5.  Vacation entitlement also covers CHRPL’S affiliated/associated/allied properties which are including but not limited to short/long term lease/tie-ups (“CHRPL Properties”). <br/><br/>

6.  The vacation entitlement can be used in any of the allied properties. The said list is available on CHRPL website and shall be updated from time to time. .<br/><br/>

7.  PACKAGES:<br/><br/>

(I)   Blue (Standard Priority) <br/><br/>
(II)  White (Medium Priority) <br/><br/>
(III) Red (High Priority). <br/><br/>
<u><b>Product price:</b></u><br/><br/>

(Means the total fee payable towards CHRPL as per the price structure fixed by CHRPL from time to time which also comprises of admission/processing fee of Rs.15, 000)<br/><br/>

Please write here the applicable Number of years <b><?= $info->tenure; ?></b> season <b><?= $info->ctype; ?></b> Premium if any <b><?= $info->apartment; ?></b> Unit type: Studio/Two adults and two children.<br/>

Product price: Rs. <b><?= $info->purchase_amount; ?></b> in Words __________________ <br/><br/>

Cash out price: Rs. <b><?= $info->bal; ?></b> in Words __________________________
</p>
<br/>

<p class="memberpara">

8.  Second Party agrees that the vacation package shall be valid only when CHRPL receives the payment in full all payments shall be made either by CREDITCARD/CASH/DEBITCARD/CHEQUE or ONLINE. The prices may be revised from time to time at the sole discretion of CHRPL.<br/><br/>

9.  The Vacationer agrees to pay Annual Maintenance Charges (“AMC”) of Rs. 8500/- together with applicable taxes or other similar taxes (if any). AMC is applicable from the Effective Date and may be revised without prior notice. The first maintenance will be payable after 90 days from Effective Date or before availing first holidays, whichever comes first. Further vacationer shall pay AMC in advance for the year to come or within such time as stipulated by CHRPL from time to time. The AMC is payable online and are payable irrespective of usage of the vacations / facilities / amenities. Failure to clear dues including AMC towards First Party shall be a default and a material breach of this Agreement and vacations cannot be utilized until all dues are cleared and CHRPL shall have the right to immediately terminate the Agreement. The Vacationer is aware that there is no offer of any kind whatsoever that allows for waiver of AMC. An exchange fee can also apply if the property is in domestic/international associated locations. <br/><br/>

<b>10.  This is a limited and exclusive offer. In the event the Second Party chooses to benefit from Cash out price then he is liable to pay the entire amount within 30 days of initial payment. In the event the Second Party does not make the payment within 30 days of the initial payment, then the First Party will revoke the benefit of the Cash out price and will collect the full prevailing product price from the Second Party.</b><br/>

<b>11.  In case full amount of fee is not remitted within 30 days from the date of initial payment, the money remitted till then would be forfeited by the CHRPL and vacations allotted, if any, would be cancelled. </b><br/><br/>

<b>12.  In the event of vacationer failing to pay the installments/AMC due hereunder on the specified date (time of being essence), then CHRPL deserves the right to degrade the benefits of product to closet priced product to complete the transaction of second party. The Second Party understands that once the product is downgraded the benefits under this Agreement can no longer be availed by the Second Party. Further, any benefits already availed by the Second Party under this Agreement prior to degradation will be set off against the benefits of the degraded product closest in value. Further, in the event the second party fails to remedy the default within a period of 15 days from the specified time, then CHRPL at its sole discretion shall deem this agreement to be terminated & forfeit the amount paid by the second party. In above case, neither party shall be under any further liabilities to the others.  </b>

</p>

<p class="memberpara">

<u>PARTICULARS OF THE VACATIONS: </u><br/><br/>

13. All bookings/queries/request is to be made through booking department via an email to booking@theholidaysclubs.com or by such other methods as may be prescribed by CHRPL from time to time. In case of joint applicants, either of the applicant can request for booking. The booking department would revert and subject to availability would confirm the booking and the confirmation of the same shall be sent to the Second Party through email. Any booking confirmed through mail cannot be cancelled. The Second Party can utilize the vacations on full payment of product price & other dues after receiving the card and welcome kit.<br/><br/>

<b>14.  The card will be issued to the Second Party subject to providing copy of ID proof, two photographs and compliance of the KYC norms of the whole family. </b><br/><br/>

15. CHRPL has the right to withdraw any properties from the list at any time without prior intimation. Holiday booking process is through Customer Care (booking department) and on first come first serve basis and is open for booking as specified in Clause below. Booking will be confirmed subject to availability. A nominal exchange fee may be applicable. <br/><br/>

<b>16.  During peak time if occupancy is high, after giving priority to higher season Vacationers, ONLY shorter holiday durations are provided to accommodate others. A continuous vacation of 6 night 7 days can be split into two holidays of 2 nights 3 days for convenience. The Second Party understands that during splitting a continuous vacation of 6 days and 7 nights, the loss of 2 Night 3 days is for the efficiency loss at the resort. </b><br/><br/>

<b>17.  Notwithstanding anything stated herein above, CHRPL shall not incur any liability if it is not in a position to fulfill its obligation by reason of war, civil commotion , act of God, any notification from any court of law or government or any other person beyond the reasonable control of CHRPL.</b><br/><br/>

<u><b>TERMS & CONDITIONS</b></u><br/><br/>

18. Vacationers are allowed a period of 7 calendar days from effective date to withdraw their package application and claim a refund (after deduction of admin/processing fee & other applicable charges, if any). If the application for withdrawal duly signed by the second party (in case of joint application both the Main Applicant & co-Applicant ) is not received within 7 calendar days from the date of receipt of the payment, the vacationer’s right to claim the withdrawal & the second party’s entitlement to refund shall lapse. For the purpose of making this important communication on time CHRPL recommends that you use speed post/registered post/courier services for communicating with CHRPL.<br/><br/>

19. In the event, the communication for withdrawal of application by the vacationer is received post 7 days from the effective date, it shall be treated as a request for cancellation. In such an event,  there would be no further liabilities on the Vacationer(s) and amount paid by Vacationer(s) will not be refunded in case of cancellation due to any reason in any circumstances<br/><br/>

20.  All holidays are subject to availability as we follow a floating week. Every effort is made to ensure our booking system is transparent and other CHRPL’s vacationers of higher season/points get an opportunity to book first. Period between 15th of May till 30th of June and 20th of December till 15th January every year is not part of this package and availability is limited. <b>RED week- Booking can be done between 30 days to 15 days before the desired holiday dates, WHITE week – Booking can be done between 45 days to 25 days before the desired holiday dates and BLUE week – Booking can be done between 60 days to 45 days before the date of the desired holiday dates.</b> After the stipulated dates mentioned as per the season/points, all CHRPL vacationers have an equal opportunity to book their holidays. <b>Only after those CHRPL vacationers of higher category book their holiday, a CHRPL vacationer of middle or lower category can book their holiday.</b><br/><br/>

21. The Vacationer besides having the right to use their week(s), may also gift, save, split the week(s) of package to any third party, with prior written intimation to the CHRPL.CHRPL does not engage in renting of vacations. CHRPL has the right to reject any such booking(s).</p>

<p class="memberpara">

22. In the event of death of Vacationer, the entitled package shall automatically be transferred to the surviving Co-Applicant, subject to all liabilities and obligations of the deceased and on production of death certificate of the deceased vacationer. <br/><br/>

23. In event of any vacationer dying intestate, the entitled package will be transferred to the legal heirs on production of death certificate & such other documents as required by CHRPL.<br/><br/>

24.  In all cases the legal heirs/successors to the deceased vacationer shall be entitled to only the unexpired portion of the package and shall be subject to all the liabilities and obligations of the deceased vacationer.<br/><br/>

25. The Second Party understands that the holidays are to be utilized under the Agreement and that once the holiday lapses, the same cannot be renewed under any circumstances. <br/><br/>

<b>26.   Pickup/Drop/sightseeing/flights/breakfast/lunch/dinner may be arranged on request ONLY at an additional charge. </b><br/><br/>

27. It is understood by the Second Party hereto that only after submission of all the necessary documents and satisfactory verification of the same thereafter by CHRPL, vacation vouchers will be issued to the Primary applicant to the address provided in this Agreement. The Second Party understands that there are no separate holiday vouchers for sale and the Second Party is entitled to benefits that are only set out under this Agreement. <br/><br/>

28. The Second Party understands that he/she will have to pay Taxes and other levies as levied by the government i.e. Luxury tax/Service tax and any other additional taxes as may be applicable from time to time. <br/><br/>

29. Second party can be denied using their vacations under this Agreement if there is any other outstanding amount due from <b>any other agreements</b> payable to the First Party.<br/><br/>

</p>

<p class="memberpara">
30. If the Vacationer has been given any gift vouchers, the gift voucher usage is valid up to maximum of six (6) months from the Effective Date, and the same can only be used in off peak time. Rs 3000/- utility charges will be applicable. The utility charges can be revised from time to time.<br/><br/>

<u><b>COVENANTS OF PURCHASER</b></u><br/><br/>

31. The Second Party hereby agrees to purchase vacations of CHRPL’s vacations and CHRPL accepts the same, subject to the terms and conditions of this Agreement. <br/><br/>

32. Second Party has understood the benefits available under the vacations scheme which are more particularly listed out in this Agreement. Second Party further understands that no benefits other than those listed in this Agreement will be available to Second Party. <br/><br/>

33. The Second Party understands that he/ she should furnish their change of address; telephone numbers, email id etc., if any to Customer Care Dept., to keep Second Party’s record up to date. Second Party permits CHRPL to contact Second Party via Phone/SMS or E-mail even if the party is in the TRAI regulated DND for any services and schemes/offers in the future. The Second Party further agrees that in the event of change in its address in addition to informing the customer care it shall, within 30 days from change in its address also intimate CHRPL in writing at the address mentioned in this Agreement regarding the new address along with address proof. In the event the intimation of change of address is not given to CHRPL in writing, any communication either by CHRPL or through their lawyers is deemed to be served on the address mentioned in this Agreement.<br/><br/>

34. The Second Party understands that he/ she are bound by Rules & Regulations of CHRPL and as duly amended from time to time. The decision of the management of CHRPL would be final in all matters. <br/><br/>

35. Apart from these Terms & Conditions as mentioned above, all other statues as applicable shall be binding on Second party. Any amendment or enactment of a legislation resulting in additional obligations on First Party or changing the nature of any activity undertaken by First Party to the detriment of the First Party then the provisions in this Agreement to the extent the additional obligations are imposed on the First Party and the provisions in this Agreement to the extent the law applicable is changing the nature of the activity undertaken by the First Party would be considered as extinguished before the amendment or enactment of the legislation coming into force and the Company would not be held responsible for consequences of such changes. <br/><br/>

<b>36.  Second party understands that this Agreement SUPERSEDES including but not limited to any communication whether written or oral or any other written communication issued by CHRPL representatives (including on Company Letter head or STAMP PAPER). Further, Second Party understands that the benefits and terms of the vacations as set out in this Agreement are final and binding on CHRPL, and Second Party. </b><br/><br/>

<b>37. Second Party confirms that no other verbal/written promises or any other assurances in deviation from this Agreement have</b> been made by CHRPL’s personnel. <br/><br/>

38. Second party hereby declares that particulars given above are true, correct and are completely in order. If any transaction is delayed or affected all for the reason of incomplete or incorrect information, Second Party shall not hold CHRPL responsible for any loss/damage/inconvenience caused due to the same. 
</p>

<p class="memberpara">
39. Second Party acknowledges and confirms that all the Terms and Conditions of this Agreement, shall be fully and completely binding on Second Party on signing of this Agreement by Second Party and that any further amendments to the same shall also be binding on Second Party. <br/><br/>

40. Second Party confirms that Second Party shall not use the vouchers and/or offers, if any, or the facilities offered pursuant to the offer, if any, for any improper or illegal or unlawful purposes/ activities or adopt or alter the same for any improper or illegal or unlawful gain. <br/><br/>

41. Second Party acknowledges that they have been treated pleasantly and courteously and they entered into this Agreement on their own free will and accord and there is no compulsion or coercion or undue influence exercised by CHRPL and/or its agents/representatives. Further, Second Party confirms that this purchase does not create undue financial burden on their family.<br/><br/>

42. Booking request shall be emailed in the format as annexed hereto under Annexure A.<br/><br/>

<b>43.  During the travel the Vacationer and its accompanier’s shall carry a valid Identity proof.</b><br/><br/>

44. Second Party here by confirms that they have gone through the aforesaid Terms & Conditions and benefits/obligations and they have understood and accepted the same.<br/><br/>

<u><b>INDEMNIFICATION</b></u><br/><br/>

45. Vacationer agrees to indemnify, defend and hold harmless CHRPL from all claims, disputes, litigation, judgments, all costs and attorney fees resulting from (a) loss, damage, or, injury to Vacationer and their families, guests or their personal property (b) any acts or omissions of the Vacationer (c) the booking of or travel in connection with a CHRPL vacations package (d) the acts, omissions, products or services of any travel supplier or person or company rendering services in connection with CHRPL vacations package; (e) any failure or delay or performance by any <b>travel supplier</b> . CHRPL is not responsible for lost, stolen, or misplaced items. Vacationer is also aware of the inherent risks to person and property while occupying residences near the ocean or that have pool/Jacuzzi features.<br/><br/>

<u><b>RESPONSIBILITY AND LIMITATION OF LIABILITY </b></u><br/><br/>

46. CHRPL shall not be held liable for, and the Vacationer hereby waive any claims against CHRPL for, any damages whatsoever whether direct, indirect, special, punitive, exemplary, incidental, consequential or otherwise, whether stated in contract, tort, strict liability or otherwise, and even if CHRPL has been advised of the possibility of such damages.</p>

<p class="memberpara">

<u><b>DISCLAIMER OF WARRANTY  </b></u><br/><br/>

47. CHRPL makes no warranty of any kind regarding any of the products and services provided. All products and services provided by CHRPL are provided "as is" and without any warranty of any kind, either express or implied. <b>CHRPL expressly disclaims all warranties and conditions, including without limitation any express or implied warranty of fitness for a particular purpose, merchantability, and/or those arising by statute or otherwise in law from dealing or usage of trade.</b> <br/><br/>

<u><b>FORCE MAJEURE </b></u><br/><br/>

48. CHRPL shall not be liable for damages for any delay or default in performing hereunder if such delay or default is caused by conditions beyond its control including but not limited to, weather conditions, acts of God, force majeure, strikes, civil commotions, embargoes, and wars or other hostilities, whether actual, threatened or reported, and/or any other cause beyond the reasonable control of CHRPL. <br/><br/>

<u><b>ARBITRATION AND JURISDICTION</b></u><br/><br/>

49. All disputes or differences arising between the Parties as to the effect, validity or interpretation of this Agreement or as to their rights, duties or liabilities hereunder (Disputes) shall be resolved by mutual discussion. The Second Party shall contact the Central Customer care team of CHRPL at info@theholidaysclubs.com. In the event the Parties reaches no resolution within thirty (30) days, then the Second Party shall discuss the issue with the resolution cell of the First Party at New Delhi. Thereafter, if the Parties fail to reach an amicable solution even after discussions with the officers from the resolution cell, the Second party may then adjudicate the dispute by way of binding arbitration before one arbitrator as per the provision contained under The Arbitration and Conciliation Act 1996. The sole arbitrator shall be nominated by the First party and/or the authorized person of the First Party alone. The seat of arbitration proceedings shall be at Delhi alone. The Second Party shall have no objection to the appointment of the arbitrator by the First party and/or the authorized person of the First Party. The Parties further agree that the award of the arbitrator is binding upon the Parties and that judgment upon the award rendered may be entered in the court of competent jurisdiction.<br/><br/>

50. All disputes arising out of this Agreement shall be subject to exclusive jurisdiction of the court  situated at Delhi <br/><br/>

<u><b>COMMUNICATION/NOTICES: </b></u><br/><br/>


51. Any notice required or desired to be given hereunder shall be in writing use the address as set forth below.<br/><br/>

<b>For Postal Communication:</b> <br/>
Club Holidays And Resorts OPC PVT LTD.<br/>
FF SR-03, First Floor, Ansal Plaza<br/>
Sector 01, Vishali , Ghaziabad (UP)<br/>
Pin Code - 201010<br/>
Website: www.theholidaysclubs.com<br/>



For any Assistance or query write us at email id: info@theholidaysclubs.com<br/><br/>

Note: Customer care email services is active Monday to Friday (11 AM to 05 PM). Office will be closed on all gazetted and national holidays. Email received after 5 pm will be responded on next working day. <br/><br/>

<b>IN WITNESS WHEREOF</b>, the Parties hereto have caused this Agreement to be duly executed in duplicate on the dates written below.</p>


</p>    
  <div class="col-container">
  <div class="col">
    <h3>CHRPL: </h3>
      <table>
      <tr>
        <td>By: </td>
        <td>___________________</td>
      </tr>
      <tr>
        <td>Name: </td>
         <td><?= $info->manager_name ?></td>

      </tr>
      <tr>
        <td>Authorized Representative</td>
             </tr>
      <tr>
        <td>Date:</td>
        <td><?php echo date("Y-m-d");?></td>
      </tr>
      
    </table>
  </div>

  <div class="col" style="margin-left: 400px; margin-top: -150px;"> 
    <h3>VACATIONER</h3>
      <p>By: __________________ </p>
      

      <p>Name: <b><?= $info->m_name ?></b></p>
      <p>Date:<b><?php echo date("Y-m-d");?></b> </p>
  </div>
</div><br/>
   <p class="memberpara">
     <center> <u><b>Annexure A - Booking Request Format</b></u></center> <br/><br/>

      The Booking request shall be mailed by the Vacationer in the following format:<br/>

      1.Package ID <br/>
      2. Name of Applicant:<br/>
      3. Contact number<br/>
      4. Name of the Travelers <br/>
      5. Age of the travelers<br/>
      6. Check in date<br/>
      7. Check out date <br/>
      8. Location( As per the provided allied list of hotels and resorts)<br/>

   </p>
     
        </div>          
      </div></div>
						 <?php }?>

			
 </div>
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>