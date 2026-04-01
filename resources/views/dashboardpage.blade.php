<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <h1 class="bg-dark text-white p-3 mb-0 text-center">Laravel Razorpay Payment Gateway Tutorial</h1>
    <h1 class="bg-primary p-3 text-white text-center">Dashboard</h1>


    @if(session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container">

    </div>


    <div class="container mt-3">
        <a href="{{ route('logout') }}" class="btn btn-danger mt-3 rounded-0">Logout</a>
        <a href="{{ route('products') }}" class="btn btn-warning mt-3 rounded-0">products</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
