<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<style>
body{
  background: #4070f4;
}
table, th, td {
  border:1px solid black;
}

</style>
<body>


<table style="width:100%">
  <tr>
    <th>User id</th>
    <th>User name</th>
    <th></th>
  </tr>
  <tr>
    <td>1</td>
    <td></td>
    <td>
    <button onclick="location.href='./update'" type="button">Update</button>     <button onclick="location.href='.delete'" type="button">Delete</button>
    <button onclick="location.href='./report'" type="button">Monthly Report</button></td>
  </tr>
  <tr>
    <td>2</td>
    <td></td>
    <td><button onclick="location.href='./update'" type="button">Update</button>     <button onclick="location.href='.delete'" type="button">Delete</button>
    <button onclick="location.href='./report'" type="button">Monthly Report</button></td>
  </tr>
  <tr>
    <td>3</td>
    <td></td>
    <td><button onclick="location.href='./update'" type="button">Update</button>     <button onclick="location.href='.delete'" type="button">Delete</button>
    <button onclick="location.href='./report'" type="button">Monthly Report</button></td>
  </tr>
</table>
    
</body>
</html>