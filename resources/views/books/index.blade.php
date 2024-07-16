<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Danh sách Book</h1>
    <button class="btn btn-info"><a href="{{route('book.create')}}">Create New</a></button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Publication</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td><img src="{{$book->thumbnail}}" width="60" alt=""></td>
                <td>{{$book->author}}</td>
                <td>{{$book->publisher}}</td>
                <td>{{$book->publication}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->quantity}}</td>
                <td>{{$book->name}}</td>
                <td>
                    <button class="btn btn-warning"><a href="{{route('book.edit', $book->id)}}">Edit</a></button>
                    <form action="{{route('book.destroy', $book->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you want delete?')">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
  </body>
</html>