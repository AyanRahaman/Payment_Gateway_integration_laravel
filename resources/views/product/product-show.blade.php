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
        <a href="{{ route('products') }}" class="btn btn-warning mt-3 rounded-0">Product Page</a>
    </div>


    <div class="container">
        <div class="row">
            <div class="center mt-3 mb-4">
                <h3 class="text-center fw-bold">Products</h3>
                <hr>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/platinum.jpg') }}" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold"">{{ $product->name }}</h5><hr>
                        <p class=" card-text text-center fw-bold text-primary">Price(INR) :- ₹ {{ $product->price }}</p>
                            <button id="rzp-button1" class="btn btn-primary w-100 p-4 fs-3">Pay</button>
                    </div>
                </div>
            </div>


        </div>
    </div>

    {{-- ===== RAZORPAY ===== --}}
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        var options = {
            "key": "{{ env('RAZORPA_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": "{{ $product->price * 100 }}", // Amount is in currency subunits.
            "currency": "INR"
            , "name": "Acme Corp", //your business name
            "description": "Test Transaction"
            , "callback_url": "{{ route('razorpay.callback') }}"
            , "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                "name": "{{ auth()->user()->name }}", //your customer's name
                "email": "{{ auth()->user()->email }}"
                , "contact": "+919876543210" //Provide the customer's phone number for better conversion rates
            }
            , "notes": {
                "address": "Razorpay Corporate Office"
            }
            , "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }

    </script>
    {{-- ==================================================================== --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
