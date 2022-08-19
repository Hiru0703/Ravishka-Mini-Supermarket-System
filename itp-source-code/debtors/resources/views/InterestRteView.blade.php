@extends('header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iRateView.css')}}" />
    <title>Debtors' Details</title>


    <style>
        table, th, td {
            border:2px  #000000;
            border-style: double;
          
        }
        th {
          text-align: center;
        }
        td{
            text-align: center;
        }
        h5{
            text-align:right;
        }
        #t1 {
            -moz-tab-size: 6; /* Firefox */
              tab-size: 6;
        }
        </style>
    
<link rel="stylesheet" href="css/iRateView.css">
  </head>
  <body>
    <div class="center">
     <form method="get" action="/IRateupdate"><br>
      <br>
      <h1>View Current Interest Rates</h1><br>
      <caption><h5><pre id="t1">Monthly   Interest   Rate     </pre></h5></caption>
      <table style="width:100%"> 
        
        <tr>
          <td></td>
          <th scope="col">1st Month</th>
          <th scope="col">2nd Month</th>
          <th scope="col">3rd Month</th>
        </tr>
        {{-- @foreach ($last as $latest) --}}
        <tr>
          <th scope="row">Regular Customers</th>
          <td>{{$last ->cusmonth1}}</td>
          <td>{{$last ->cusmonth2}}</td>
          <td>{{$last ->cusmonth3}}</td>  
        </tr>
        <tr>
          <th scope="row">Wholesale Buyers</th>
          <td>{{$last ->whbmonth1}}</td>
          <td>{{$last ->whbmonth2}}</td>
          <td>{{$last ->whbmonth3}}</td>
        </tr>
        {{-- @endforeach --}}
      </table>
  
       <br>
        <input type="submit" value="Change Rates" >
  <br>
            <div class="viewall">
         Go to Debtors management <a href="/debtmanage">  GO -></a>
        </div>
      </form> 
    </div>
    
    
    
  </body>
</html>
@stop