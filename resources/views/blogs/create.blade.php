<x-layout heading="Add a blog">
  <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
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
      <input type="file" name="thumbnail" id="thumbnail">
    </div>
    <input type="submit" name="Create Blog">
  </form>
</x-layout>
