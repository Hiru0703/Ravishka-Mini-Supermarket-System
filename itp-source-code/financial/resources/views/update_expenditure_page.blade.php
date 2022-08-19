<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Update Expenditure Statement</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body>

    <!--header-->
    <main role="main">
    <div class="jumbotron">
        <div class="container" style="text-align:center; margin-bottom:-10px">
            <img src="{{asset('logo.png')}}" alt="supermarket" style="width:150px; height:150px">
            <h1 class="display-3">Ravishka Mini Supermarket</h1>
        </div>  
    </div>
    <br><br>
      <div class="title">
          <h2><center> Update {{ $posts[0]->type_of_expense }}</center></h2>
          <br>
          <br><br><br>
      </div>

            <form method="post" action="{{ route('eupdate.store') }}">  
            {{csrf_field()}}  
              <div class="row justify-content-around">

              <label for="expenseTitle" class="col-sm-2 col-form-label"><h5>Type of Expense</h5></label>
                @foreach ($posts as $post)
                    <div class="col-md-2 mb-5">
                        <input type="text" class="form-control form-control-lg" name="type_of_expense" value= "{{
                            $post->type_of_expense
                        }}" readonly>
                    </div>
                @endforeach
              
                </div> 

                <div class="row justify-content-around">

                <label for="expenseID" class="col-sm-2 col-form-label"><h5>Expense ID</h5></label>
                @foreach ($posts as $post)
                    <div class="col-md-2 mb-5">
                        <input type="text" class="form-control form-control-lg" name="expense_id" value= "{{
                            $post->expense_id
                        }}" readonly>
                    </div>
                @endforeach
              
                </div> 


                <div class="row justify-content-around">

                <label for="expenseDate" class="col-sm-2 col-form-label"><h5>Expense Date</h5></label>
                    @foreach ($posts as $post)
                        <div class="col-md-2 mb-5"> 
                            <input type="text" class="form-control form-control-lg" name="e_date" value="{{ $post->e_date }}">          
                        </div> 
                    @endforeach

                </div>    
 
                    <div class="row justify-content-around">

                    <label for="monthExpense" class="col-sm-2 col-form-label"><h5>Monthly Expense(Rs.)</h5></label>
                        @foreach ($posts as $post)
                            <div class="col-md-2 mb-5">
                                <input type="text" class="form-control form-control-lg" name="month_expense" value="{{ $post->month_expense }}">
                            </div>
                        @endforeach

                    </div>  


                    <div class="col text-center">
                        <input type="submit" class="btn btn-success btn-lg" value="UPDATE"> 
                    </div> 

            </form> 
            
            <br><br>
            <div class="row justify-content-around">
                <div class="col-md-10">
                    <a href="/viewexpense" class="text-decoration-none text-left"><h3>< Back</h3></a>
                </div> 
            </div>    

            </main>

            <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-10 col-md-5">
            <img src="{{asset('logo.png')}}" class="" alt="supermarket" style="width:80px; height:80px">
            <h4>Ravishka Mini-Supermarket</h4>
            <small class="d-block mb-3 text-muted">&copy; 2022-2023</small>
          </div>
          <div class="col-6">
            <h2>Services</h2>
            <ul class="list-unstyled text-small">
              <li style="font-size: 20px"><a class="text-muted" href="#">Order management for wholesale buyers</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Employee management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Stock management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Supplier's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Transport management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Debtor's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Financialmanagement</a></li>
            </ul>
            </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>