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
          <img src="" alt="">
        </div>
        <h3>{{ $blog->title }}</h3>
        <p>{{ $blog->descritpion }}</p>
        <a href="{{ route('blog', ['blog' => $blog->id]) }}">Read More</a>
      </div>
    @endforeach
  </div>
</body>

</html>
