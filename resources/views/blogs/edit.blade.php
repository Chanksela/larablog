<x-layout heading="Edit a blog">
  <form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
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
      <input type="file" name="thumbnail" id="thumbnail">
    </div>
    <input type="submit" name="Update Blog">
  </form>
</x-layout>
