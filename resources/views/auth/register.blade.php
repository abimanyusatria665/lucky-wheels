<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('form.css') }}">
  </head>
  <body>

    <div class="container mt-5 pt-5">
        <div class="d-flex mt-5 pt-5">
            <div class="col-6 form-card card offset-3">
              <h1 class="text-center">Register</h1>
                <div class="col-10 offset-1">
                    <form action="{{ route('input.register') }}" method="post" class="mb-5">
                        @csrf
                            <h1 class="text-white title">Register</h1>
                            <label for="name">Name</label>
                            <br>
                            <input type="text" name="name" id="Name" placeholder="Name" class="form-control">
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                            <label for="password">Password</label>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                            <button type="submit" class="btn btn-primary col-12 mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>