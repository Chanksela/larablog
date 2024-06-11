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
    <form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div>
        <label for="title">Title</label>
        <br>
        <input type="text" name="title" id="title" value="{{ $blog->title }}">
      </div>
      <div>
        <label for="description">Description</label>
        <br>
        <textarea type="text" name="description" id="description">{{ $blog->description }}</textarea>
      </div>
      <div>
        <label for="content">Content</label>
        <br>
        <textarea type="text" name="content" id="content">{{ $blog->content }}"</textarea>
      </div>
      <div>
        <label for="thumbnail">Thumbnail</label>
        <br>
        <input type="text" name="thumbnail" id="thumbnail" value="{{ $blog->thumbnail }}">
      </div>
      <input type="submit" name="Update Blog">
    </form>
  </main>
</body>

</html>
