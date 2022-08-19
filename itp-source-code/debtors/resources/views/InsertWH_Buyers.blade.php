@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Wholesale Buyers Insert</title>
    
    
<link rel="stylesheet" href="{{asset('css/insertwh.css')}}">
<style>

.footer1 {
  
   left: 0;
   margin-top: 0%;
   width: 100%;
   background-color: white;
   color: white;
   text-align: center;
      }

</style>
  </head>
  <body>

    
    <div class="center">
    <form method="post" action="/saveWhbuyer">
      {{ csrf_field() }}
  
      <h1>Insert Wholesale Buyers Details</h1>
      <br>
      @if($errors->any())
       
      @endif
      <br>
        <div class="txt_field">
           <input type="text"  name="D_CID">
           <div class="alert-danger">{{$errors->first('D_CID')}}</div>
          <label>D_CID</label>
        </div>

        <div class="txt_field">
          <input type="text" name="whName" >
          <div class="alert-danger">{{$errors->first('whName')}}</div>
          <label>Wholesale Debtors' Name</label>
        </div>

        <label> <p style="color:#2691d9">Select Plan</p></label></br>
              <div class="container"> 
              <label class="radio-inline">
                <input type="radio"  name="whPlan" onclick="check(this.value)" value="Months 1"  >Months 1
              </label>
              <label class="radio-inline">
                <input type="radio"   name="whPlan" onclick="check(this.value)"  value="Months 2"  >Months 2
              </label>
              <label class="radio-inline">
                <input type="radio"   name="whPlan" onclick="check(this.value)" value="Months 3"  >Months 3
              </label>
            
          </div>
          <label> <br> <div class="alert-danger">{{$errors->first('whPlan')}}</div></label>

        <div class="txt_field">
          <input type="text" name="whAmount" id="whAmount" onkeyup="calAmount()" > 
          <div class="alert-danger">{{$errors->first('whAmount')}}</div>
          <label>Order Amount</label>
        </div>

        <div class="txt_field">
          <input type="text" name="whIrate" id="whrate" >
          <label>Interest Rate Per Month </label>
        </div>
        
        <div class="txt_field">
          <input type="text" name="wh_D_Amount" id="damount" > 
          <label>Debt Amount</label>
        </div>
        
        <div class="txt_field">
            <input  type="text" name="wh_T_Amount" id="totamount" > 
            <label>Total Amount</label>
        </div>

        <div class="txt_field">
          <input type="date" name="whBuydate" >
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

  </script>



  </body>
</html>

