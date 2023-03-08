<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1>Welcome to home page </h1>
        <div class="class">
        <a href="{{route('products.create')}}"><button class="btn btn-primary">Add Products</button></a>
        <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td scope="row">{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                  <a href="{{url('products/'.$product->id.'/edit')}}"><button class="btn btn-success">Edit</button></a>
                </td>
                <td>
                  <form action="{{url('products/'.$product->id)}}"method="post">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
        </div>
      </div>
  </body>
</html>