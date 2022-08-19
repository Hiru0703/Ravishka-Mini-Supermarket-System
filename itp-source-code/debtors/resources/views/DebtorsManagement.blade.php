{{-- @extends('header')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Debtors Management</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/debtorsm.css')}}" />
    <style>
      /* Style the body */
      body {
        font-family: Arial;
        margin: 0;
      }
      
      /* Header/Logo Title */
      .header {
        padding: 38px;
        text-align: center;
        background: #e1ebe9;
        color: white;
        font-size: 25px;
      }
      .footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: white;
   text-align: center;
}
.logo{
  margin-left:1% 
}
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
  <body>
   
<div class="header">
  <img src="{{asset('pic/logo.png')}}" alt="supermarket" style="width:170px; height:110px">
  <h1><b>Ravishka Mini Supermarket</b></h1>

</div>

@if(isset($message))

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Success!</strong><h2>{{$message}}</h2>
</div>
{{-- <h2>{{$message}}</h2> --}}
@endif
    <div class="t1">
      <table bgcolor="#097969" border="1" align="center" width="35%">
         <tr>
            <th> <h1>Debtors Management</h1></th>
         </tr>
     </table> 
    </div>
    <div class="wrapper1">   
        <fieldset class="field1">
            <legend><h2>The Debt Of Regular Customers Details</h2></legend>
                <div class = "input-group1">
                  <div class="input-box1">
                      <h3>Insert Debtors' Details</h3> 
                          <a href="/rcusinsert" class="debbutton" input type="submit">Insert</a>
                   </div>
                     <div class="input-box1">
                        <h3>View Debtors' Details</h3>   
                        <a href="/searcRCushbuyer" class="debbutton" input type="submit">VIEW</a>
                          
                     </div> 
                </div>    
        </fieldset>
        <fieldset class="field1">
          <legend><h2>The Debt of Wholesale Buyers Details</h2></legend>
          <div class = "input-group1">
            <div class="input-box1">
                <h3>Insert Debtors' Details</h3> 
                    <a href="/winsert" class="debbutton" input type="submit">Insert</a>
             </div>
               <div class="input-box1">
                 
                  <h3>View Debtors' Details</h3>   
                  
                  <a href="/searchWhbuyer" class="debbutton" input type="button"> VIEW</a>
                   
               </div> 
          </div>  
        </fieldset>
        <fieldset class="field1">
          <legend><h2>Debtors' Interest Rates</h2></legend>
          <div class = "input-group1">
            <div class="input-box1">
          <h3> Change Interest Rates</h3>
            <a href="/IRateupdate" class="debbutton" input type="button"> ADD</a>
           </div>
            <div class="input-box1">
          <h3> View Current Interest Rates</h3>
            <a href="/IRateView" class="debbutton" input type="button"> View</a>
            </div>
          </div>
      </fieldset>


<br>
      <div class="Irate">
          <h2>View Report</h2>
           <a href="/DebtorsReport" class="debbutton" input type="button"> View</a>
        </div>

    <div class="viewallS">
    <input type="button" class="debbutton" value="VIEW All Services">
    </div>
  </div>

  <div class="footer">
	<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-10 col-md-5">
    
        <h4>Ravishka Mini-Supermarket</h4>
        <small class="d-block mb-3 text-muted">&copy; 2022-2023</small>
      </div>
      <div class="col-6">
        <h2>Services</h2>
        <ul class="list-unstyled text-small">
          <li style="font-size: 20px"><a class="text-muted" href="#">Order management for wholesale buyers</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Employee management</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Stock management</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Supplier's management</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Transport management</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Debtor's management</a></li>
          <li style="font-size: 20px"><a class="text-muted" href="#">Financialmanagement</a></li>
          <br>
        </ul>
        </div>
    </div>
  </footer>
  </div>
  </body>
</html>
{{-- @stop --}}