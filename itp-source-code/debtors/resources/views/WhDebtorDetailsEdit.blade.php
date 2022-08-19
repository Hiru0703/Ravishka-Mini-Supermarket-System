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
    <title>Wholesale Buyers Insert</title>

    
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
    <form action="/update/{{ $whedit[0]->recordNo}}" method="post">
      {{ csrf_field() }}
      
      
      <h1 top="30%">View Wholesale Buyers Details</h1>
 
        <div class="txt_field">
          
          <input  type="text" name="recordNo" value="{{$whedit[0]->recordNo}}" required>
          <label>recordNo :</label>
        </div>
        

        <div class="txt_field">
            <input value="{{$whedit[0]->D_CID}}" type="text" name="D_CID" required>
            <label>Debtor's D_CID</label>
          </div>


          <div class="txt_field">
            <input value="{{$whedit[0]->whName}}" type="text" name="whName" >
            <label>Debtor's Name</label>
          </div>


          <label background-color: #04AA6D> Select Plan</label></br>
            <div class="container"> 
              <label class="radio-inline"> 
                <input type="radio" name="whPlan" onclick=" calc(); check(this.value)" {{($whedit[0]->whPlan == "Months 1")? "checked":""}} required value="Months 1">Months 1
              </label>
              <label class="radio-inline">
                <input type="radio"  name="whPlan" onclick=" calc(); check(this.value)" {{($whedit[0]->whPlan == "Months 2")? "checked":""}}  required value="Months 2">Months 2
              </label>
              <label class="radio-inline">
                <input type="radio"  name="whPlan" onclick=" calc(); check(this.value)" {{($whedit[0]->whPlan == "Months 3")? "checked":""}}  required value="Months 3">Months 3
              </label>
          </div>
      
      
          <div class="txt_field">
            <input value="{{$whedit[0]->whIrate}}" type="text" name="whIrate" id="whrate" required>
            <label>Interest Rate </label>
          </div>

          <div class="txt_field">
            <input value="{{$whedit[0]->whAmount}}" type="text" name="whAmount" id="whAmount" onkeyup="calAmount()" required> 
            <label> Amount</label>
          </div>
  

        <div class="txt_field">
          <input value="{{$whedit[0]->wh_D_Amount}}" type="text" name="wh_D_Amount" id="damount" required> 
          <label>Debt Amount</label>
        </div>

        
        <div class="txt_field">
            <input value="{{$whedit[0]->wh_T_Amount}}"  type="text" name="wh_T_Amount" id="totamount" required> 
            <label>Total Amount</label>
          </div>


        <div class="txt_field">
          <input value="{{$whedit[0]->whBuydate}}" type="date" name="whBuydate" id="whBuydate">
          <label>Date Of The Buy</label>
        </div>

        <div class="txt_field">
            <input type="text" name="whAmount" id='rdays'> 
            <label>Date of the Remainning </label>
          </div>

       
          
        <input type="submit"   value="update">
      </form>
        <form onsubmit="return confirm('Do you really want to Delete this Record?');" action="/delete/{{$whedit[0]->recordNo}}" method="post">
          {{ csrf_field() }}
        <input type="submit"  value="delete">
        <div class="viewall">
          Go to Debtors management <a href="/debtmanage"> GO -></a>
         </div>
        </form>

     
    </div>
<script>

  // create function to calculate the dates *************

  function check(whPlan) {
 
 switch (document.getElementById("whrate").value=whPlan) {
   case 'Months 1':
   document.getElementById("whrate").value={{$last->whbmonth1}};
     break;
 
    case 'Months 2':
    document.getElementById("whrate").value= {{$last->whbmonth2}}
     break;
 
   case 'Months 3':
   document.getElementById("whrate").value= {{$last->whbmonth3}}
     break;
 }
 }

 function calAmount() {
  var whAmount = document.getElementById("whAmount").value;
  var whrate = document.getElementById("whrate").value;
  document.getElementById("damount").value = (whAmount*whrate/100);
  document.getElementById("totamount").value= parseFloat(whAmount) + (whAmount*whrate/100); 
}
 

  function calc(){
    let today = new Date();
let form_date=new Date(document.getElementById("whBuydate").value);

var rates = document.getElementsByName('whPlan');
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