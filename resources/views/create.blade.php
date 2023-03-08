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
        <h2> You can add products here.</h2>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name." value={{old('name')}}>
              <span>
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Enter product description." value={{old('description')}}>
              <span>
                @error('description')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price" id="price" placeholder="Enter product price." value={{old('price')}}>
              <span>
                @error('description')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <input type="submit" name="Submit" class="btn btn-primary">
              <input type="reset" name="Reset" class="btn btn-danger"> 
            </div>
        </form>
      </div>
  </body>
</html>