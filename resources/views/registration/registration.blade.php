@extends('layouts.app')
@section('content')
<br/>

<link rel="stylesheet" href="{{ URL::asset('css/mycss.css') }}" >

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
@endif



<br/>
<div class="container" style="width:90%">
<div class="jumbotron center" style="background-color:#F5F5F5 " >
  
        <h2 style="text-align:center">REGISTRATION FORM 6. HGK October 9-12, 2019</h2><br/>


        {{Form::open(['action' =>'RegistrationsController@store','method'=>'POST','enctype'=>'multipart/form-data'])}}

        {{ csrf_field() }}   
        <br>

        <h3>A. Participant</h3>
        <hr>
        <div class="form-group" >
          <div class="rTableRow" >
              <div class="rTableCell" style="border: 0px;">

            {{Form::label('title','Title:')}}<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title','student',['class'=>'form-control','style'=>'width:30em'])}} student<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title','dipl.ing',['class'=>'form-control','style'=>'width:30em'])}} dipl.ing<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title','dr',['class'=>'form-control','style'=>'width:30em'])}} dr.<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title',' dr.sc.',['class'=>'form-control','style'=>'width:30em'])}} dr.sc.<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title',' prof.',['class'=>'form-control','style'=>'width:30em'])}} prof.<br/>
          </div>

          <div class="rTableCell" style="border: 0px">
            {{Form::radio('title','other...',['class'=>'form-control','style'=>'width:30em'])}} other...<br/>
          </div >

        </div>

    
      <div class="form-group">

        <div class="rTableRow" >
          <div class="rTableCell" style="border: 0px">
            {{Form::label('first_name','First name')}}
            {{Form::text('first_name','',['class'=>'form-control','style'=>'width:30em'])}}
          </div>
          <div class="rTableCell" style="border: 0px">
            {{Form::label('last_name','Last name:')}}
            {{Form::text('last_name','',['class'=>'form-control','style'=>'width:30em'])}}  
          </div> 
        </div>

        <div class="rTableRow" >
          <div class="rTableCell" style="border: 0px">
            {{Form::label('company','Company')}}
            {{Form::text('company','',['class'=>'form-control','style'=>'width:30em;'])}}  
          </div>
        <div class="rTableCell" style="border: 0px">
            {{Form::label('position','Position')}}
            {{Form::text('position','',['class'=>'form-control','style'=>'width:30em;'])}}  
          </div>
        </div>

        <div class="rTableRow" >
          <div class="rTableCell" style="border: 0px">
            {{Form::label('phone','Phone')}}
            {{Form::text('phone','',['class'=>'form-control','style'=>'width:30em;'])}}  
          </div>
          <div class="rTableCell" style="border: 0px">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','style'=>'width:30em;'])}}  
          </div>
        </div>
      </div>

        <h3>B. PAYER NAME (for the invoice)</h3>
        <hr>

      <div class="form-group">
 
          <div class="rTableRow" >
            <div class="rTableCell" style="border: 0px">
              {{Form::label('payer_name','Name')}}
              {{Form::text('payer_name','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>

            <div class="rTableCell" style="border: 0px">
              {{Form::label('address','Address')}}
              {{Form::text('address','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>
          </div>

          <div class="rTableRow" >
            <div class="rTableCell" style="border: 0px">
              {{Form::label('vat_oib','VAT/OIB')}}
              {{Form::text('vat_oib','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>

            <div class="rTableCell" style="border: 0px">
              {{Form::label('city_post_code','City and post code')}}
              {{Form::text('city_post_code','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>
          </div>
          <div class="rTableRow" >
            <div class="rTableCell" style="border: 0px">
              {{Form::label('country','Country')}}
              {{Form::text('country','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>
            <div class="rTableCell" style="border: 0px">
              {{Form::label('payer_email','Email')}}
              {{Form::text('payer_email','',['class'=>'form-control','style'=>'width:30em;'])}}
            </div>
          </div>    
        </div>
      </div>

        <h3>Invoice</h3>
        <hr>
        <div class="form-group">


          {{Form::label('invoice','I need an Invoice')}}<br/>
          {{Form::radio('invoice','Yes',['class'=>'form-control','style'=>'width:30em', ])}} Yes<br/>
          {{Form::radio('invoice','No',['class'=>'form-control','style'=>'width:30em'])}} No<br/>
        </div>
     


        <div class="form-group">
           

          {{Form::label('terms_condition','TERMS AND CONDITION (PLEASE READ):')}}<br/>
          {{Form::textarea('terms_condition','
          
1. Payment

Payment has to be done by bank transfer or by credit card to the account of the travel agency CORAL GROUP d.o.o., latest by November 04 2019. Using bank transfer, please note all bank charges have to be supported by the participant/payer and should be added to the total amount. Cheques are not accepted. Rates in EURO will be charged in the invoices in Croatian Kuna according to the Croatian National Bank official exchange rate at the day of invoicing.

2. VAT

As stated in the article 53 of Directive 2006/112/EC, registration fee is subject to VAT applicable in the country where the event is taking place, even when supplied to taxable persons. The VAT charge is therefore applicable to all participants. Please consult with your country’s tax advisor for assistance in claiming your refund. According to Croatia’s tax regulation a 25% VAT charge has been applied to the registration fees. Organizer reserves the right to amend this charge should the VAT rule or rate change. For EU companies and institutions, in order to avoid any complications, please make sure your VAT number is indicated in this form and it is officially recognized by the EU Taxation and Customs Union office. Should your company not be VAT registered or your EU VAT number cannot be recognized by the EU site mentioned above, the VAT amount will still be added to your invoice and will not be refundable. Organizer cannot be held responsible for any problem you may encounter related to VAT refund or VAT number not provided.

3. Substitution

If a delegate cannot attend the Conference, we are happy to accept a substitute colleague at any time. Requests for substitutions will only be accepted by e-mail indicating the name of the cancelled delegate as well as the name and contact details of the substitute. Please note that after October 18th 2019, a fee of €30 will be applied for substitutions.

4. Registration Fee Cancellation Policy

Notification of cancellation must be made in writing and sent by email indicating the cancelled delegate. The following rules apply in case of cancellation – for individual and group cancellations: – Cancellation notified until October 18, 2019 – refund is possible (minus VAT and €30 of administrative charges). – Cancellation made after October 18, 2019 will not merit refund. – Refunds will not be made for no-shows and unattended events. – Bank charges applied to a refund will be borne by the delegates. In case of overpayment or double payment, refund requests including valid proof of the overpayment or double payment must be made in writing and sent by email to the CORAL GROUP d.o.o. travel agency, no later than one month after the event. An administrative charge of 40€ will be applied for all refunds.

5. Data Protection

The acquisition, handling (which includes saving data, changes, transmission, blocking and erasing) and utilization of all personal registration data is executed within the guidelines of the effective data protection regulations. The Agency will collect and store all data necessary for the preparation and execution of services reserved. To make the payment of hotel bookings guarantee (in case of cancellation) – required credit card details (i.e. credit card type and number, expiration date, credit card holder name) will also be collected. All data will be saved and processed. In order to protect and safeguard the personal data provided, the appropriate business procedures will be applied, as well as technical and physical restrictions for accessing and using personal information. Only authorized employees are permitted to access personal information for performing their duties in respect of our services. Our server and network are protected by firewalls against unauthorized access. In addition, the Agency may share only contact details of attendees with third parties that may use these details to contact attendees regarding booked services or other communications which may be of interest. The service organizers are obliged to give out attendee`s data due to a court or an official order.

6. Travel Insurance<

Delegates are strongly advised to procure their own personal and travel insurance. CORAL GROUP DMC – PCO is also offering you the additional travel insurances.

7. Travel agency Insurances

CORAL group has all legally obliged agency insurances: deposit and responsibility insurances by Jadransko osiguranje d.d. nr. of policy: OV 0682039240 and OV 0682039241.

8. All agency Terms and conditions apply:

CORAL GROUP Terms and Conditions'

,['class'=>'form-control','readonly'])}} <br/>
          
 

              
          <div class="form-group">
            {{Form::label('consent', 'I agree with Terms and Condition')}}</br>
            {{Form::checkbox('consent', 'Yes')}} Yes </br>
       </div>



              
</div>
</div>

        {{Form::submit('Submit',['class'=>'btn btn-primary','name'=>'submit','style'=>'width:10em',])}} 
        {!! Form::close() !!}
<br><br>

@endsection