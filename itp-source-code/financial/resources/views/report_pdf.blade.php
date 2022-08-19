<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Reports PDF</title>
    </head>  
    <body>
        <br>
        <h1 style="text-align: center; color: green">Monthly Financial Report PDf</h1><br>
        <h3>Income Statement</h3>

            <?php

                $CustomerIncome = 0;
                $SalesIncome = 0;
                $InterestIncome = 0;
                $totalIncomes = 0;
                foreach ($incomes as $income){
                    switch ($income['type_of_income']) {
                        case 'Customer Income':
                            $CustomerIncome += $income['month_income'];
                        break;
                        case 'Sales Income':
                            $SalesIncome += $income['month_income'];
                        break;
                        case 'Interest Income':
                            $InterestIncome += $income['month_income'];
                        break;
                    }

                    $totalIncomes+=$income['month_income'];
                } 

                $EmployeePayments = 0;
                $ElectricityPayments = 0;
                $SupplierPayments = 0;
                $OtherUtilityBills = 0;
                $TotalExpenses = 0;
                    foreach ($tasks as $task){
                        switch ($task['type_of_expense']) {
                        case 'Employee Payments':
                            $EmployeePayments += $task['month_expense'];
                        break;
                        case 'Electricity Payments':
                            $ElectricityPayments += $task['month_expense'];
                        break;
                        case 'Supplier Payments':
                            $SupplierPayments += $task['month_expense'];
                        break;
                        case 'Other Utility Bills':
                            $OtherUtilityBills += $task['month_expense'];
                        break;
                }

                $TotalExpenses +=  $task['month_expense'];
            }

            ?>    
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Type of incomes</th>
                    <th scope="col">Monthly income</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Customer income</td>
                    <td>{{"Rs." . $CustomerIncome}}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Sales income</td>
                    <td>{{"Rs." . $SalesIncome}}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Interest income</td>
                    <td>{{"Rs." . $InterestIncome}}</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><b>Total income</b></td>
                    <td>{{"Rs." . $totalIncomes}}</td>
                </tr>
            </tbody>
        </table>

        <h3>Expenses Statement</h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Type of expenses</th>
                    <th scope="col">Monthly expenses</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Employee Payments</td>
                    <td>{{"Rs." . $EmployeePayments}}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Electricity Payments</td>
                    <td>{{"Rs." . $ElectricityPayments}}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Supplier Payments</td>
                    <td>{{"Rs." . $SupplierPayments}}</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Other Utility Bills</td>
                    <td>{{"Rs." . $OtherUtilityBills}}</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><b>Total expense</b></td>
                    <td>{{"Rs." . $TotalExpenses}}</td>
                </tr>
            </tbody>
        </table>

        <h3>Financial Statement</h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Total income</th>
                    <th scope="col">Total expense</th>
                    <th scope="col">Net Profit / Loss</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><b>{{"Rs." . $totalIncomes}}</b></td>
                    <td><b>{{"Rs." . $TotalExpenses}}</b></td>
                    <td><b>{{"Rs." . $totalIncomes - $TotalExpenses}}</b></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
                <img src="logo.png" class="" alt="supermarket" style="width:80px; height:80px">
        </div>
        <center><small style="font-size: 10px">Ravishka Mini-Supermarket</small></center>
    </body>
</html>     