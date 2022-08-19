<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/iteminsert.css')}}">
<!--header-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Ravishka Mini Supermarket</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
      <title>Stock Management</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <main role="main">
    <div class="jumbotron">
      <div class="container" style="text-align:center; margin-bottom:-10px">
        <img src="{{asset('logo.png')}}" alt="supermarket" style="width:150px; height:150px">
        <h1 class="display-3">Ravishka Mini Supermarket</h1>
      </div>  
    </div>
      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script> 
<!--end header-->     
  <center>
  
   <h1>Update Grocery Details And Frozen Item Details</h1></center>
      
         <center>
    <center>
        <fieldset class="CAcont">
        <br>
        <br>
<form action="/gfupdate/{{$gfproduct->itemcode}}" method="post">
            {{csrf_field()}}
        
         <p>
         <h5>Item Code :  <input type="text" value="{{$gfproduct->itemcode}}"  name="itemcode" readonly></h5>
         <h6 class="alert-danger">{{ $errors->first('itemcode') }}</h6>
         <br>
         
         <h5>Item Name :  <input type="text" value="{{$gfproduct->itemname}}" name="itemname"readonly></h5>
         <h6 class="alert-danger">{{ $errors->first('itemname') }}</h6>
         <br>
         
         <h5>Manufact Date: <input type="text"  value="{{$gfproduct->manufacturedate}}" name="manufacturedate"></h5>
         <h6 class="alert-danger">{{ $errors->first('manufacturedate') }}</h6>
         <br>
         
         <h5>Expire Date : <input type="text" value="{{$gfproduct->expiredate}}"  name="expiredate"></h5>
         <h6 class="alert-danger">{{ $errors->first('expiredate') }}</h6>
         <br>
         
         <h5>Description : <input type="text" value="{{$gfproduct->discription}}"  name="discription"></h5>
         <h6 class="alert-danger">{{ $errors->first('discription') }}</h6>
         <br>
         
         <h5>Quantity : <input type="text" value="{{$gfproduct->quantity}}" name="quantity"></h5>
         <h6 class="alert-danger">{{ $errors->first('quantity') }}</h6>
         <br>
         
         <h5>price per unit: <input type="text" value="{{$gfproduct->priceperunit}}" name="priceperunit"></h5>
         <h6 class="alert-danger">{{ $errors->first('priceperunit') }}</h6>
         </p>
         <br>
         
       <input type="submit" name="submit" class="btn btn-success"value="update">
     </form>
     <br>
     <a href="/Mainhome" class="btn btn-success" input type="submit">Back</a>
           
       <br>
       <br>
            </fieldset>
       
       </center>
       <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-10 col-md-5">
            <img src="logo.png" class="" alt="supermarket" style="width:80px; height:80px">
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
            </ul>
            </div>
        </div>
      </footer>
</body>
</html>