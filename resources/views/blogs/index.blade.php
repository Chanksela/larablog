<x-layout heading="Home">
  <main>
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
  </main>
</x-layout>
