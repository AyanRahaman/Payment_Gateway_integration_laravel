<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Record</title>
</head>

<body>


    <div class="container col-md-7">
        <h1 class="text-center p-3 bg-dark text-white">User Registration</h1>
        <a href="/"><button class="btn btn-success mb-3 shadow-none rounded-0">Home
                Page</button></a>


        {{-- ===== FORM START ===== --}}
        <form class="border border-dark p-3" action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control shadow-none rounded-0 border-dark" name="name">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control shadow-none rounded-0 border-dark" name="email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control shadow-none rounded-0 border-dark" name="password">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Confirm Password</label>
                <input type="password" class="form-control shadow-none rounded-0 border-dark" name="password_confirmation">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark rounded-0">Submit</button>
        </form>
        {{-- ===== FORM END ===== --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
