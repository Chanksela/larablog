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
    <h1>Hello World</h1>
    @foreach ($blogs as $blog)
      <div>
        <div>
          <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" width="200">
        </div>
        <h3>{{ $blog->title }}</h3>
        <p>{{ $blog->description }}</p>

        <a href="{{ route('blog.show', ['blog' => $blog->id]) }}">Read More</a>
      </div>
    @endforeach
  </div>
</body>

</html>
