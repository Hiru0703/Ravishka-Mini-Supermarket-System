<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>userProfilr</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">

</head>

<body>
    
    <ol class="breadcrumb" style="margin-right: 0px;margin-left: 10px;">
        <li class="breadcrumb-item"><a href="/customer/home"><span style="font-size: 22px;">Home</span></a></li>
        <li class="breadcrumb-item"><a href="/customer/profile"><span style="font-size: 22px;">My Profile</span></a></li>
    </ol>

    <div class="container">
        <div class="row" style="height: 500px;">
            <div class="col-2">
                <h1 style="font-size: 25px;
                color: var(--bs-gray-900);
                font-weight: bold;
                text-align: center;
                margin-top: 50px;">Hello Helani !</h1><img class="img-fluid" src="/assets/img/userAvatar.png">
                <!-- <button class="btn btn-primary" type="button" style="color: var(--bs-white);background: var(--bs-green);margin-top: 10px;margin-left: 5px;box-shadow: 0px 0px 3px 1px var(--bs-cyan);border-style: none;border-color: var(--bs-cyan);">My Orders</button>
                <button class="btn btn-primary" type="button" style="background: var(--bs-green);border-style: none;border-color: var(--bs-info);box-shadow: 0px 0px 3px 1px var(--bs-cyan);padding-top: 6px;margin-top: 20px;margin-left: 5px;">Loyalty Points</button>
                <a class="btn btn-primary" href="/customer/profileUpdate" type="button" style="background: var(--bs-green);border-style: none;border-color: var(--bs-info);box-shadow: 0px 0px 3px 1px var(--bs-cyan);padding-top: 6px;margin-top: 20px;margin-left: 5px;">Update Information</a>
                <a onclick="return confirm('Are you sure you want to delete this account?');" class="btn btn-danger" type="button" style="border-style: none;border-color: var(--bs-info);box-shadow: 0px 0px 3px 1px var(--bs-cyan);padding-top: 6px;margin-top: 20px;margin-left: 5px;" href="/customerProfile/delete/{{ session('userEmail') }}">Delete Account</a> -->
            </div>
            <div class="col" style="height: 560px;">
                <div class="row">
                    <div class="col" style="text-align: right;margin-left: 250px;">
                        <h1 style="margin-top: 2px;width: 300px;font-size: 25px;text-align: center;">Update Profile Settings</h1>
                    </div>
                </div>
                <form action="/customerProfile/store" method="post">
                  @csrf
                  <div class="row">
                      <div class="col-4">
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Name</h1>
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Surname</h1>
                      </div>
                      <div class="col">
                      <input type="text" style="width: 350px;margin-left: 2px;margin-right: 20px;" name="name">
                      <input type="text" style="width: 350px;margin-top: 8px;margin-left: 2px;margin-right: 20px;" name="surname"></div>
                  </div>
                  <div class="row">
                      <div class="col-4">
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Mobile Number</h1>
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Land Line</h1>
                      </div>
                      <div class="col">
                      <input type="text" style="width: 350px;margin-left: 2px;margin-right: 20px;" name="mobilePhone" >
                      <input type="text" style="width: 350px;margin-left: 2px;margin-right: 20px;margin-top: 8px;" name="landLine"></div>
                  </div>
                  <div class="row">
                      <div class="col-4">
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Email Address</h1>
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Adress Line 1</h1>
                      </div>
                      <div class="col">
                      <input type="text" style="width: 350px;margin-right: 20px;margin-left: 2px;" name="email" value="{{ session('userEmail') }}" disabled>
                      <input type="text" style="width: 350px;margin-right: 20px;margin-left: 2px;margin-top: 8px;" name="addressLine1"></div>
                  </div>
                  <div class="row">
                      <div class="col-4">
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">Address Line 2</h1>
                          <h1 style="height: 30px;font-size: 20px;margin-left: 190px;">City</h1>
                      </div>
                      <div class="col">
                      <input type="text" style="width: 350px;margin-right: 20px;margin-left: 2px;" name="addressLine2">
                      <input type="text" style="width: 350px;margin-right: 20px;margin-left: 2px;margin-top: 8px;" name="city"></div>
                  </div>
                  <!-- <div class="row">
                      <div class="col">
                          <h1 style="margin-top: 5px;width: 300px;font-size: 30px;text-align: center;margin-left: 250px;">My reviews</h1>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <textarea style="margin-left: 180px;margin-top: 10px;width: 550px;height: 200px;" name="reviews"></textarea>
                      </div>
                  </div> -->
                  <div class="row">
                      <div class="col">
                          <input class="btn btn-primary" type="submit" value="Update Now" style="margin-top: 20px; 
                          margin-right: 347px; background: var(--bs-green);border-style: none;
                          border-color: var(--bs-cyan);box-shadow: 0px 0px 1px 1px var(--bs-cyan); float: right;">
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script>

    </script>
</body>

</html>