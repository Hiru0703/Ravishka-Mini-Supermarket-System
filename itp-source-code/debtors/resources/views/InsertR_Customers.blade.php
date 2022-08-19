@extends('header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Regular Customer Insert</title>
    
    
<link rel="stylesheet" href="{{asset('css/insertwh.css')}}">

  </head>
  <body>

    
    <div class="center">
    <form method="post" action="/saveRCusbuyer">
      {{ csrf_field() }}
  
      <h1>Insert Regular Customer Details</h1>
      <br>
      @if($errors->any())
       
      @endif
      <br>
        <div class="txt_field">
           <input type="text"  name="rcusD_CID">
           <div class="alert-danger">{{$errors->first('rcusD_CID')}}</div>
          <label>D_CID</label>
        </div>

        <div class="txt_field">
          <input type="text" name="rcusName" >
          <div class="alert-danger">{{$errors->first('rcusName')}}</div>
          <label>Regular Customer Debtor's Name</label>
        </div>

        <label> <p style="color:#2691d9">Select Plan</p></label></br>
              <div class="container"> 
              <label class="radio-inline">
                <input type="radio"  name="rcusPlan" onclick="check(this.value)" value="Months 1"  >Months 1
              </label>
              <label class="radio-inline">
                <input type="radio"   name="rcusPlan" onclick="check(this.value)"  value="Months 2"  >Months 2
              </label>
              <label class="radio-inline">
                <input type="radio"   name="rcusPlan" onclick="check(this.value)" value="Months 3"  >Months 3
              </label>
            
          </div>
          <label> <br> <div class="alert-danger">{{$errors->first('rcusPlan')}}</div></label>

        <div class="txt_field">
          <input type="text" name="rcusAmount" id="rcusAmount" onkeyup="calAmount()" > 
          <div class="alert-danger">{{$errors->first('rcusAmount')}}</div>
          <label>Order Amount</label>
        </div>

        <div class="txt_field">
          <input type="text" name="rcusIrate" id="rcusrate" >
          <label>Interest Rate Per Month </label>
        </div>
        
        <div class="txt_field">
          <input type="text" name="rcus_D_Amount" id="damount" > 
          <label>Debt Amount</label>
        </div>
        
        <div class="txt_field">
            <input  type="text" name="rcus_T_Amount" id="totamount" > 
            <label>Total Amount</label>
        </div>

        <div class="txt_field">
          <input type="date" name="rcusBuydate" >
          <label>Date Of The Buy</label>
        </div>

        <input type="submit"  value="Submit">   
<br><br>

<div class="viewall">
  Go to Debtors management <a href="/debtmanage"> GO -></a>
 </div>
 
      </form>
    </div>

  
  <script>
function check(rcusPlan) {
 
switch (document.getElementById("rcusrate").value=rcusPlan) {
  case 'Months 1':
  document.getElementById("rcusrate").value={{$last->cusmonth1}};
    break;

   case 'Months 2':
   document.getElementById("rcusrate").value= {{$last->cusmonth2}}
    break;

  case 'Months 3':
  document.getElementById("rcusrate").value= {{$last->cusmonth3}}
    break;
}
}


function calAmount() {
  var rcusAmount = document.getElementById("rcusAmount").value;
  var rcusrate = document.getElementById("rcusrate").value;
  document.getElementById("damount").value = (rcusAmount*rcusrate/100);
  document.getElementById("totamount").value= parseFloat(rcusAmount) + (rcusAmount*rcusrate/100); 
}

  </script>
  </body>
</html>
@stop
