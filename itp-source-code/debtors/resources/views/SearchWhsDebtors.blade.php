
@extends('header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="pricing.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <title>Debtors' Details</title>

    
<link rel="stylesheet" href="css/searchwh.css">
<style>
 .footer {
        
        background: #ffffff;
        color: white;
        
      }
      h4{
        text-align:left; 
       }


</style>
  </head>
  <body>
    <div class="center">
    <form method="get" action="/searchWhbuyer">
      <h1>Search Wholesale Buyers Details</h1>
        <div class="txt_field">
          <input type="text" required name="whName">
          <label>Wholesale Debtors' Name</label>
        </div>
       
         
        <div class="txt_field">
          <input type="text" required name="D_CID">
          <label>D_CID</label>
        </div>
        
        <input type="submit" value="Search">
<br>
            <div class="viewall">
         Go to Debtors management <a href="/debtmanage"> GO</a>
        </div>
      </form>
     
    </div>
  <div class="uptable">
    <table class="table table-dark">
      <tr>
      <th>Record No   </th>
      <th>Wholesale Buyer'sD_CID   </th>
      <th>Wholesale Buyer's Name</th>
      <th>Date of Buy</th>
      <th>Option</th>
      </tr>

      @foreach ($whbuyer as $sbuyer)
      <tr>
        <td>{{$sbuyer->recordNo}}</td>
        <td>{{$sbuyer->D_CID}}</td>
        <td>{{$sbuyer->whName}}</td>
        <td>{{$sbuyer->whBuydate}}</td>
        <td> <a href="click_view/{{$sbuyer->recordNo}}" class="btn btn-success">view</a></td>
      </tr>
      @endforeach
      


    </table>
   
  </div>

  <div class="footer">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-10 col-md-5">
          <img src="{{asset('pic/logo.png')}}" class="" alt="supermarket" style="width:80px; height:80px">
          <h4 style="color: black">Ravishka Mini-Supermarket</h4>
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
          </ul>
          </div>
      </div>
    </footer> </div>
  @yield('content')
  </body>
</html>
@stop