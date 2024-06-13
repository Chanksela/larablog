<x-layout heading="All blogs">
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
</x-layout>
