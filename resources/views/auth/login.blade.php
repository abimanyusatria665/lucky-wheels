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

    @if(Session::has('successRegister'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('successRegister') }}
        </div>
    @endif

    <div class="container mt-5 pt-5">
        <div class="d-flex mt-5 pt-5">
            <div class="col-6 form-card offset-3 card">
                <div class="col-10 offset-1 my-4">
                    <h1 class="text-center">Login</h1>
                    <form action="{{ route('login.auth') }}" method="post">
                        @csrf
                        <h1 class="text-white title">Login</h1>
                        <label for="Name">Name</label>
                        <br>
                        <input type="text" name="name" id="Name" placeholder="Name" class="form-control">

                        <label for="password">Password</label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        <button type="submit" class="btn btn-primary col-12 mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>