<?php 

$conn =mysqli_connect('localhost','root',"",'supermarket');
$sql="select Count(D_CID) as NO_of_wholesale_Debtors,whPlan from whbuyers GROUP BY whPlan ORDER BY whPlan DESC";
$res=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($res)){

    $datapoints[]=array("label"=>$row['whPlan'],"y"=>$row['NO_of_wholesale_Debtors']);
}

?>
<?php 

$conn =mysqli_connect('localhost','root',"",'supermarket');
$sql2="select Count(rcusD_CID) as NO_of_wholesale_Debtors,rcusPlan from debtrcustomers  GROUP BY rcusPlan ORDER BY rcusPlan DESC";
$res2=mysqli_query($conn,$sql2);
while($row2= mysqli_fetch_assoc($res2)){

    $datapoints2[]=array("label"=>$row2['rcusPlan'],"y"=>$row2['NO_of_wholesale_Debtors']);
	
}

?>



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
   <!-- Google Font: Source Sans Pro -->

   <link esome -->
  
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  

    
<link rel="stylesheet" href="css/debReport.css">
  </head>
  <body>
    <div class="center">
		<h1>Debtors Report</h1>
		<br>
		<form method="post" action="">
		<br>
        <div class="txt_field">
           <input type="text"  name="twhbuyerincome" value="{{$wtotal}}">
          
          <label>Total Income from  Wholesale Buyers Interset :</label>
        </div>

        <div class="txt_field">
          <input type="text" name="trcusincome"  value="{{$ctotal}}">
        
          <label>Total Income from Regular Customer Interset :</label>
        </div>

		<div class="txt_field">
			<input type="text" name="trcusincome"  value="{{$wtotal+$ctotal}}">
		  
			<label>Total amount from Interest :</label>
		  </div>
		

		</form>

		   
   
       
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		

	   
	   

<section class="content" style ="margin-left:20px;margin-right:20px;margin-top:50px;">
    
	<h3>Number Of Wholesale_Debtors :</h3>
	<select name ="chart" onchange ="myfunction()" class ="form-control" id="chart" style ="width:120px;">
		<option value="null">Select Chart</option>
	<option value="pie">Pie Chart</option>
	<option value="column">Column chart</option>
	<option value="bar">Bar chart</option>
	
	<option value="doughnut">doughnut chart</option>
	</select>
	
	
	
	<br>
	 <div class="product-index " alighn="right" style= "margin-top:40px">
	 <div  id="chartContainer"  style= "height :auto; width:100%;">	<br>
	<br> <br>
	
	<br>
	</div>
	</div><br>

	
	<br> <br>
	<br>

	
	<br> <br>
	<br>
	<br><br>
	<br>
	<br> <br>
	<br>
	<br><br>
	<br>
	<br> <br>
	<br>
	<br>
	<br><h3>Number Of Regular Customers_Debtors :  </h3>
	<select name ="chart" onchange ="myfunction2()" class ="form-control" id="chart2" style ="width:120px;">
		<br> <br><br> <br>
		<br>
		<br><br>
		<br>
		<br> <br>
		<br>
		<br>
	
		<br> <br>
		<br>
		<br><br>
		<br>
		<br> <br>
		<option value="null">Select Chart</option>
	  <option value="pie">Pie Chart</option>
	  <option value="column">Column chart</option>
	  <option value="bar">Bar chart</option>
	 
	  <option value="doughnut">doughnut chart</option>
	  </select>
	<div class="product-index " alighn="right" style= "margin-top:40px">
	  <div  id="chartContainer2"  style= "height :auto; width:100%;">
	 </div>
	 </div>
			<br> <br>
	<br>		<br> <br>
	<br>
	<br><br>
	<br><br>
	<br>
	<br> <br>
	<br>
	<br><br>
	<br>

	
	</section> 
	   
	  
	   
	   
		 <script>
		function myfunction() 
		{
			var chartType =document.getElementById("chart").value;
	   
	   var chart = new CanvasJS.Chart("chartContainer", {
		   animationEnabled: true,
		   theme: "light2", // "light1", "light2", "dark1", "dark2"
		   title:{
			   text: "No of Wholesale Buyer Debtors for each plan"
		   },
		   axisY: {
			   title: "NO of Debtors"
		   },
		   axisX: {
			   title: "Wholesale Buyer Plan"
		   },
		   data: [{        
			   type: chartType,
			   showInLegend: true, 
		   
			   yValueFormatString: "#,##0\"\"",
			   indexLabel:"{label} ({y} Wholesale_Debtors )",
			   dataPoints: <?php echo json_encode($datapoints,JSON_NUMERIC_CHECK); ?>
		   }]
	   });
	   chart.render();
	   }
	   
	   
		 </script>
		 <script>
		function myfunction2() 
		{
			var chartType =document.getElementById("chart2").value;
	   
	   var chart = new CanvasJS.Chart("chartContainer2", {
		   animationEnabled: true,
		   theme: "light1", // "light1", "light2", "dark1", "dark2"
		   title:{
			   text: "No of Regular Customer Debtors for each plan"
		   },
		   axisY: {
			   title: "NO of Debtors"
		   },
		   axisX: {
			   title: "Regular Customer Plan"
		   },
		   data: [{        
			   type: chartType,
			   showInLegend: true, 
		   
			   yValueFormatString: "#,##0\"\"",
			   indexLabel:"{label} ({y} Regular Customer Debtors )",
			   dataPoints: <?php echo json_encode($datapoints2,JSON_NUMERIC_CHECK); ?>
		   }]
	   });
	   chart.render();
	   }
		 </script>
	   
       
        
         <br>
	   <br>
	   <br>  <br>
	   <br>
	   <br>
	   <div class="link">
         Go to Debtors management <a href="/debtmanage" style="margin-top: 40%"> GO</a>
	   </div>
       <br>
	   <br>
	   <br> <br>
	   <br>
	   <br>
     
    </div>
  </body>
</html>
@stop