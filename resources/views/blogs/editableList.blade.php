<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Page</title>
</head>

<body>
  <div>
    <h1>Edit List</h1>
    @foreach ($blogs as $blog)
      <div>
        <div>
          <img src="{{ $blog->thumbnail }}" alt="">
        </div>
        <h3>{{ $blog->title }}</h3>
        <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}">Edit</a>
        <form action="{{ route('blog.delete', ['blog' => $blog->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button>Delete</button>
        </form>
      </div>
    @endforeach
  </div>
</body>

</html>
