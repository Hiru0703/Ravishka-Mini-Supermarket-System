@extends('layout')

@push('css')
<link rel="stylesheet" href="/assets/css/checkoutstyle.css">
    <!-- <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
   

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' rel="stylesheet"/>

    <link href="/assets/css/popupstyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/styles.css"> -->

@endpush

@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="/assets/css/checkoutstyle.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
   

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' rel="stylesheet"/>

    <link href="/assets/css/popupstyle.css" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/css/styles.css">

  -->

   
<div class="checkout container"> 

    <form action="{{route('checkout.store')}}" method="post">
        @csrf

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        <div class="row">

            <div class="col">

               

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Jagath Perera" name="name"  class="form-control @error('name') is-invalid @enderror">
                </div>
                <div class="inputBox"> 
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" name="email" class="form-control @error('email') is-invalid @enderror">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="number-street-town" name="address" class="form-control @error('address') is-invalid @enderror">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Maharagama" name="city" class="form-control @error('city') is-invalid @enderror">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>District :</span>
                        <input type="text" placeholder="Colombo" name="district" class="form-control @error('district') is-invalid @enderror">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" name="zip" class="form-control @error('zip') is-invalid @enderror">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <!-- <p></p>    
                <p>Please select your favorite Web language:</p>
                      <input type="radio" id="option1" name="cash" value="Cash On Delivery">
                      <label for="option1">Cash On Delivery</label><br>

                      <input type="radio" id="option2" name="debt" value="Pay as a debt">
                      <label for="option2">Pay as a debt</label><br>

                      <input type="radio" id="option3" name="card" value="Pay by card">
                      <label for="option3">Pay by card</label> -->


                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="/assets/img/card_img.png" alt="payment options">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr. jagath Perera" name="cardname" class="form-control @error('cardname') is-invalid @enderror">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cardno" class="form-control @error('cardno') is-invalid @enderror">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" name="exmonth" class="form-control @error('exmonth') is-invalid @enderror">
                </div> 

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="exyear" class="form-control @error('exyear') is-invalid @enderror">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" name="cvv" class="form-control @error('cvv') is-invalid @enderror">
                    </div>
                </div>

            </div>
    
        </div>

        <button type="submit" class="submit-btn" style="background: var(--bs-green);box-shadow: 0px 0px 9px var(--bs-info);">Place Order</button>
      


    </form>

</div>    
    
@endsection