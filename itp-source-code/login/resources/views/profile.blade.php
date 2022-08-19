<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<style>
body{
  background: #4070f4;
}

</style>

<body>

<h2><center>User Profile</center></h2><br><br>
  
  <center><form action="/action_page.php">
    <label>User Name:</label>
    <input readonly type="text" id="uname" name="uname" value="{{ Auth::user()->name }}"><br><br>
    <label>Address:</label>
    <input readonly type="text" id="add" name="add" value="{{ Auth::user()->address }}"><br><br>
    <label>Contact Number:</label>
    <input readonly type="text" id="cnumber" name="cnumber" value="{{ Auth::user()->cnumber }}"><br><br>
      <label>Age:</label>
    <input readonly type="text" id="age" name="age" value="{{ Auth::user()->age }}"><br><br>
      <label>Email:</label>
    <input readonly type="text" id="email" name="email" value="{{ Auth::user()->email }}"><br><br>
      <label>Job Role:</label>
    <input readonly type="text" id="job" name="job" value="{{ Auth::user()->jobrole }}"><br><br>
    
    
    <br><br>
    <button onclick="location.href='./update'" type="button">Update</button>
    <button onclick="location.href='./update'" type="button">Monthly Report</button>
    <button onclick="location.href='./delete'" type="button">Delete</button>
  </form></center> 
    
</body>
</html>