@extends('header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Debtors Management</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/debtorsm.css')}}" /> --}}
    <link rel="stylesheet" href="{{asset('css/iRatesadd.css')}}">
   
    <style>
      h3{
        text-align: center;
        text-decoration-color: aquamarine;
        color: rgb(0, 183, 255);
      }
      </style>

  </head>

  <body>
    <div class="center">
      <form method="post" action="/saveiRates">
        {{ csrf_field() }}
        <h1>Change Debtors' Interest Rates</h1>
        @if($errors->any())
       
      @endif
      
        <h3>Regular Customers Interest Rates</h3>
                <div class = "input-group">
                  <div class="input-box">
                      <h3></h3> 
                      <div class="txt_field">
                        <input type="text" name="cusmonth1">
                        <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                        <label>1st Months</label>
                      </div>
                   </div>
                     <div class="input-box">
                        <div class="txt_field">
                          <input type="text" name="cusmonth2">
                          <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                          <label>2nd Months</label>
                        </div>
                     </div> 
                     <div class="input-box"> 
                      <div class="txt_field">
                        <input type="text" name="cusmonth3">
                        <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                        <label>3rd Months</label>
                      </div>
                   </div>   
                </div>


                <h3>Wholesale Buyers Interest Rates</h3>
                   <div class = "input-group">
                    <div class="input-box">
                        
                        <div class="txt_field">
                          <input type="text" name="whbmonth1">
                          <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                       <label>1st Months</label>
                        </div>
                     </div>
                       <div class="input-box"> 
                          <div class="txt_field">
                            <input type="text"  name="whbmonth2">
                            <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                       <label>2nd Months</label>
                          </div>
                       </div> 
                       <div class="input-box">
                        
                        <div class="txt_field">
                          <input type="text" name="whbmonth3">
                          <div class="alert-danger">{{$errors->first('cusmonth1')}}</div>
                          <label>3rd Months</label>
                        </div>
                     </div>   
         
                   </div>
                   <input type="submit" value="Submit"><br><br>
                   <div class="viewall">
                    Go to Debtors management <a href="/debtmanage"> GO -></a>
                   </div>
                  </div>

                 
  </div>
  </body>
</html>
@stop