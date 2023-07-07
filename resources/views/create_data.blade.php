<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

      <div class="container">
        @if(Session::has('successRegister'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('successRegister') }}
          </div>
        @endif
        <div class="card mt-5 py-5 col-6 offset-3">
          <form action="{{ route('lucky.store') }}" method="post" class="col-10 offset-1">
              @csrf
              <input type="text" class="form-control" name="name" placeholder="Name">
              <input type="text" class="form-control mt-2" name="prize" placeholder="prize">
              <button class="btn btn-success mt-3">Create</button>
          </form>
        </div>
        <h1 class="text-center">Data</h1>
        <table class="table table-striped mt-3">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Prize</th>
          </tr>
          @php
              $i= 1;
          @endphp 
          @foreach ($data as $item)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $item['name'] }}</td>
              <td>{{ $item['prize'] }}</td>
            </tr>
          @endforeach

         
        </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>