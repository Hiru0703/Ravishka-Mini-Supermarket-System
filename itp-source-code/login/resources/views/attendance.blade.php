<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance </title>
</head>
<style>
  body {
    background: #4070f4;
  }
</style>

<body onload='startDate()'>
  <center>
    <h1 id='date'></h1>
  </center><br><br>

  <center>
  <form action="./markUser" method="POST">
  @csrf
    <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
      <label>User Name:</label>
      <input readonly type="text" id="uname" name="uname" value="{{ Auth::user()->name }}"><br><br>
      <button type="submit" >Mark attendance </button>

    </form>
    
    <img src="./img/check.png" alt="Girl in a jacket" width="200" height="200">
    <h2>Attendance is already marked</h2>
  </center>


  <script>
    function startDate() {
      var d = new Date();
      var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      document.getElementById("date").innerHTML = days[d.getDay()] + " | " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear();
    }
    startDate();
  </script>
</body>

</html>