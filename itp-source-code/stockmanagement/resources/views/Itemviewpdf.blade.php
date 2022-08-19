<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Documentview</title>
  <link rel="stylesheet" type="text/css" href="css/iteminsert.css"/>  
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
            <img src="logo.png" alt="supermarket" style="width:150px; height:150px">
            <h1 class="display-3">Ravishka Mini Supermarket</h1>
        </div>  
    </div>
    <center><h4>Available Stock details report</h4></center>
    <br>
      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>  
  <!--calculate  Total Amount-->  
  <script>
    function calAmount(){
      var quantity=document.getElementById("quantity").value;
      var priceperunit=document.getElementById("priceperunit").value;
      document.getElementById("totamount").value=(quantity*priceperunit);
    }

  </script> 
  <script>
    window.addEventListener("load", window.print());
    window.onafterprint = function(event) {
        // alert(document.referrer);
         window.location.href = document.referrer;
        window.history.back();
    };
</script>


<!--end header-->   
  <table class="table table-dark">
    <th>Item Code</th>
    <th>Item Name</th>
    <th>Manufacture Date</th>
    <th>Expire Date</th>  
    <th>Description</th>
    <th>Quantity</th>
    <th>Price per unit</th> 
    <th>Total Amount</th> 
     
  
  @foreach($Itemviewpdf as $Item)
     <tr>
         <td>{{$Item->itemcode}}</td>
         <td>{{$Item->itemname}}</td>
         <td>{{$Item->manufacturedate}}</td>
         <td>
          <?php if($Item->expiredate < date(DATE_ATOM))
          {
            echo " ". $Item->expiredate ."- This Stock is Expired";
          }else{
           echo  $Item->expiredate;
          }?>
                </td>
         <td>{{$Item->discription}}</td>
         <td><?php if($Item->quantity< 10){
          echo " ". $Item->quantity ." - Out Of Stock";
        }else{
          echo $Item->quantity;
        }?></td>
         <td>{{$Item->priceperunit}}</td>
         <td>{{$Item->quantity * $Item->priceperunit}}</td>
         
     </tr>
     @endforeach
 
 </table>
 
</body>
</html>