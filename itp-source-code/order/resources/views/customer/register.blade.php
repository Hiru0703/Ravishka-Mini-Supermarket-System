<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>register</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <!-- Start: Registration Form with Photo -->
    <section class="register-photo">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('deleteCustomer'))
            <div class="alert alert-success">
                Customer Profile Deleted!
            </div>
        @endif
        <!-- Start: Form Container -->
        <div class="form-container">
            <form action="/customer/store" method="post">
                @csrf
                <h2 class="text-center" style="color: var(--bs-dark);text-align: center;font-size: 25px;"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="text" name="email" placeholder="email" style="text-transform:lowercase"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="text-transform:lowercase"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="color: var(--bs-gray-100);font-size: 20px;font-weight: bold;background: var(--bs-green);border-color: var(--bs-info);box-shadow: 0px 0px 13px var(--bs-cyan);">Sign Up</button></div><a class="already" href="#" style="color: var(--bs-blue);">You already have an account? Login here.</a>
            </form>
        </div><!-- End: Form Container -->
    </section><!-- End: Registration Form with Photo -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>