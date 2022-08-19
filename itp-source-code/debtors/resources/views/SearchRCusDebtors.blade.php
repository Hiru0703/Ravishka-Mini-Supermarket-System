
@extends('header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Debtors' Details</title>

    
<link rel="stylesheet" href="css/searchwh.css">

<style>
  .footer {
        
         background: #ffffff;
         color: white;
         text-align: left;}
 </style>


  </head>
  <body>
    <div class="center">
    <form method="get" action="/searcRCushbuyer">
      <h1>Search Regular Customers Details</h1>
        <div class="txt_field">
          <input type="text" required name="rcusName">
          <label>Regular Customer's Name</label>
        </div>
       
         
        <div class="txt_field">
          <input type="text" required name="rcusD_CID">
          <label>Regular Customer's D_CID</label>
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
      <th>Customer D_ID   </th>
      <th>Customer Name</th>
      <th>Date of The Buy</th>
      <th>Option</th>
      </tr>

      @foreach ($rcusbuyer as $sbuyer)
      <tr>
        <td>{{$sbuyer->rcusrecordNo}}</td>
        <td>{{$sbuyer->rcusD_CID}}</td>
        <td>{{$sbuyer->rcusName}}</td>
        <td>{{$sbuyer->rcusBuydate}}</td>
        <td> <a href="click_view_rcus/{{$sbuyer->rcusrecordNo}}" class="btn btn-success">view</a></td>
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