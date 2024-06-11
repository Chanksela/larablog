<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $blog->title }}</title>
</head>

<body>
  <main>
    <form action="">
      <div>
        <label for="title">Title</label>
        <br>
        <input type="text" value="{{ $blog->title }}" id="title">
      </div>
      <div>
        <label for="description">Description</label>
        <br>
        <input type="text" value="{{ $blog->description }}" id="description">
      </div>
      <div>
        <label for="content">Content</label>
        <br>
        <input type="text" value="{{ $blog->content }}" id="content">
      </div>
      <div>
        <label for="thumbnail">Thumbnail</label>
        <br>
        <input type="text" value="{{ $blog->thumbnail }}" id="thumbnail">
      </div>
    </form>
  </main>
</body>

</html>
