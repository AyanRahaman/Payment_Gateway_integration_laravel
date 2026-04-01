<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <h1 class="bg-dark text-white p-3 text-center">LARAVEL - Razorpay Payment Gateway Implementation Tutorial</h1>



    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">✅ Payment Successful!</h4>
            <p>Thank you for your purchase. Your transaction has been completed successfully </p>
            <hr>
            <p class="mb-0">You can now go to the home page <a href="{{ route('dashboardPage') }}" class="btn btn-warning rounded-0">Home</a> </p>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
