<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Blog</title>
</head>

<body>
  <main>
    <form action="{{ route('blog.store') }}" method="POST">
      @csrf
      <div>
        <label for="title">Title</label>
        <br>
        <input type="text" name="title" id="title">
      </div>
      <div>
        <label for="description">Description</label>
        <br>
        <textarea type="text" name="description" id="description"></textarea>
      </div>
      <div>
        <label for="content">Content</label>
        <br>
        <textarea type="text" name="content" id="content"></textarea>
      </div>
      <div>
        <label for="thumbnail">Thumbnail</label>
        <br>
        <input type="text" name="thumbnail" id="thumbnail">
      </div>
      <input type="submit" name="Create Blog">
    </form>
  </main>
</body>

</html>
