<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <html lang="en" dir="ltr">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            height: 100vh;
            overflow: hidden;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
        }

        .center h1 {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid silver;
        }

        .center form {
            padding: 0 40px;
            box-sizing: border-box;
        }

        form .txt_field {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }

        .txt_field input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }

        .txt_field span::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2691d9;
            transition: .5s;
        }

        .txt_field input:focus~label,
        .txt_field input:valid~label {
            top: -5px;
            color: #2691d9;
        }

        .txt_field input:focus~span::before,
        .txt_field input:valid~span::before {
            width: 100%;
        }

        .pass {
            margin: -5px 0 20px 5px;
            color: #a6a6a6;
            cursor: pointer;
        }

        .pass:hover {
            text-decoration: underline;
        }

        input[type="submit"] {
            width: 100%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

        input[type="submit"]:hover {
            border-color: #2691d9;
            transition: .5s;
        }

        .signup_link {
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: #666666;
        }

        .signup_link a {
            color: #2691d9;
            text-decoration: none;
        }

        .signup_link a:hover {
            text-decoration: underline;
        }
    </style>

    <body>
        <div class="center">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="txt_field">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="email" type="email" class=" @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="password" type="password"
                    class=" @error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password">
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
                <input type="submit" value="Login">
                <div class="signup_link">
                    Not a member? <a href="./register">Signup</a>
                </div>
            </form>
        </div>

    </body>

    </html>






</body>

</html>

<!-- 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->