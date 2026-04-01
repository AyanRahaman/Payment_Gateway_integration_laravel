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


    <div class="container mt-3">
        <a href="{{ route('logout') }}" class="btn btn-danger mt-3 rounded-0">Logout</a>
        <a href="{{ route('dashboardPage') }}" class="btn btn-warning mt-3 rounded-0">Home</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="center mt-3 mb-4">
                <h3 class="text-center fw-bold">Products</h3>
                <hr>
            </div>
            @foreach($products as $product)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="
                        @if($product->name == " Gold") {{ asset('image/gold.jpg') }} @elseif($product->name == "Silver")
                    {{ asset('image/silver.jpg') }}
                    @else
                    {{ asset('image/platinum.jpg') }}
                    @endif
                    " height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold"">{{ $product->name }}</h5><hr>
                        <p class=" card-text text-center fw-bold text-primary">Price(INR) :- ₹ {{ $product->price }}</p>
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-primary w-100">View Product</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
