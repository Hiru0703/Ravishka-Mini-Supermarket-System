<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>2</title>
   
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link  rel="stylesheet" href="/assets/css/popupstyle.css" />

    <link rel="stylesheet" href="/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

</head>

<body>
    <!-- Start: Login Form Clean -->
    @if ($errors->any())
            <div class="alert alert-danger" >
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>     
        @endif
    <section class="login-clean">
        <form action="/customer/index" method="post">
            @csrf
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="color: var(--bs-green);"><i class="icon ion-happy-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="text-transform:lowercase"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="text-transform:lowercase"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="color: var(--bs-gray-100);background: var(--bs-green);font-size: 18px;font-family: ABeeZee, sans-serif;font-weight: bold;text-align: center;box-shadow: 1px 1px 19px 0px var(--bs-info);border-width: 1px;border-color: var(--bs-green);">Log In</button></div>
            <a class="forgot" href="#" style="color: var(--bs-blue);">Forgot your email or password?</a>
           
        </form>
    </section><!-- End: Login Form Clean -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/popup.js"></script>
</body>

</html>