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
    <title>Regular Customers update</title>

    
<link rel="stylesheet" href="{{asset('css/editwh.css')}}">
<style>
   .alert {
  padding: 20px;
  background-color: #04cd8d;
  color: rgb(243, 11, 84);
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

  </head>
  
  <body onload="calc()">
    @if(isset($message))

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Success!</strong><h2>{{$message}}</h2>
</div>
<h2>{{$message}}</h2>
@endif
    <div class="center">
    <form action="/update_rcus/{{ $rcusedit[0]->rcusrecordNo}}" method="post">
      {{ csrf_field() }}
      
      
      <h1 top="30%">View Regular Customer's Details</h1>
 
        <div class="txt_field">
          
          <input  type="text" name="rcusrecordNo" value="{{$rcusedit[0]->rcusrecordNo}}" required>
          <label>recordNo :</label>
        </div>
        

        <div class="txt_field">
            <input value="{{$rcusedit[0]->rcusD_CID}}" type="text" name="rcusD_CID" required>
            <label>Debtor's D_CID</label>
          </div>


          <div class="txt_field">
            <input value="{{$rcusedit[0]->rcusName}}" type="text" name="rcusName" >
            <label>Debtor's Name</label>
          </div>


          <label background-color: #04AA6D> Select Plan</label></br>
            <div class="container"> 
              <label class="radio-inline"> 
                <input type="radio" name="rcusPlan" onclick=" calc(); check(this.value)" {{($rcusedit[0]->rcusPlan == "Months 1")? "checked":""}} required value="Months 1">Months 1
              </label>
              <label class="radio-inline">
                <input type="radio"  name="rcusPlan" onclick=" calc(); check(this.value)" {{($rcusedit[0]->rcusPlan == "Months 2")? "checked":""}}  required value="Months 2">Months 2
              </label>
              <label class="radio-inline">
                <input type="radio"  name="rcusPlan" onclick=" calc(); check(this.value)" {{($rcusedit[0]->rcusPlan == "Months 3")? "checked":""}}  required value="Months 3">Months 3
              </label>
          </div>
      
      
          <div class="txt_field">
            <input value="{{$rcusedit[0]->rcusIrate}}" type="text" name="rcusIrate" id="rcusrate" required>
            <label>Interest Rate </label>
          </div>

          <div class="txt_field">
            <input value="{{$rcusedit[0]->rcusAmount}}" type="text" name="rcusAmount" id="rcusAmount" onkeyup="calAmount()" required> 
            <label> Amount</label>
          </div>
  

        <div class="txt_field">
          <input value="{{$rcusedit[0]->rcus_D_Amount}}" type="text" name="rcus_D_Amount" id="damount" required> 
          <label>Debt Amount</label>
        </div>

        
        <div class="txt_field">
            <input value="{{$rcusedit[0]->rcus_T_Amount}}"  type="text" name="rcus_T_Amount" id="totamount" required> 
            <label>Total Amount</label>
          </div>


        <div class="txt_field">
          <input value="{{$rcusedit[0]->rcusBuydate}}" type="date" name="rcusBuydate" id="rcusBuydate">
          <label>Date Of The Buy</label>
        </div>

        <div class="txt_field">
            <input type="text" name="rcusAmount" id='rdays'> 
            <label>Date of the Remainning </label>
          </div>

       
          
        <input type="submit"   value="update">
      </form>
        <form onsubmit="return confirm('Do you really want to Delete this Record?');" action="/delete_rcus/{{$rcusedit[0]->rcusrecordNo}}" method="post">
          {{ csrf_field() }}
        <input type="submit"  value="delete">
        <div class="viewall">
          Go to Debtors management <a href="/debtmanage"> GO -></a>
         </div>
        </form>

     
    </div>
    
<script>

  // create function to calculate the dates *************

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
 

  function calc(){
    let today = new Date();
let form_date=new Date(document.getElementById("rcusBuydate").value);

var rates = document.getElementsByName('rcusPlan');
var rate_value;
for(var i = 0; i < rates.length; i++){
  
    if(rates[i].checked){
        rate_value = rates[i].value;
    }
}
switch (rate_value) {
  case 'Months 1':
    form_date = form_date.setMonth(form_date.getMonth() + 1);
    break;

   case 'Months 2':
    form_date = form_date.setMonth(form_date.getMonth() + 2);
    break;

  case 'Months 3':
    form_date = form_date.setMonth(form_date.getMonth() + 3);
    break;
}

let difference=form_date>today ? form_date-today : today-form_date
let diff_days=Math.floor(difference/(1000*3600*24))
document.getElementById("rdays").value = diff_days + " Days"
}


</script>




  </body>
</html>
@stop