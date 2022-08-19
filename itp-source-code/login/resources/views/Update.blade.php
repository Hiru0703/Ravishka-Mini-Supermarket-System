<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<style>
body{
  background: #4070f4;
}

</style>
<body>
<h2><center>Update page</center></h2><br><br>
  
<center>
  <form action="./updateUser" method="POST">
  @csrf
  <label>User Name:</label>
    <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
    <input type="text" id="uname" name="uname" value="{{ Auth::user()->name }}"><br><br>
    <label>Address:</label>
    <input type="text" id="add" name="add" value="{{ Auth::user()->address }}"><br><br>
    <label>Contact Number:</label>
    <input type="text" id="cnumber" name="cnumber" value="{{ Auth::user()->cnumber }}"><br><br>
      <label>Age:</label>
    <input type="text" id="age" name="age" value="{{ Auth::user()->age }}"><br><br>
      <label>Email:</label>
    <input type="text" id="email" name="email" value="{{ Auth::user()->email }}"><br><br>
      <label>Job Role:</label>
  <input type="radio" id="Driver" name="jobrole" value="Driver" {{ ( Auth::user()->jobrole=="Driver")? "checked" : "" }} >
  <label for="html">Driver</label><br>
  <input type="radio" id="stock manger" name="jobrole" value="stock manger" {{ ( Auth::user()->jobrole=="stock manger")? "checked" : "" }}>
  <label for="css">stock manger</label><br>
  <input type="radio" id="shop keeper" name="jobrole" value="shop keeper" {{ ( Auth::user()->jobrole=="shop keeper")? "checked" : "" }}>
  <label for="javascript">shop keeper</label>
  
  
  <br><br>
  <button onclick="location.href='./profile'" type="button">Back</button>
  <button type="submit">Update</button>
</form></center> 

</body>
</html>