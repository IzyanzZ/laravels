@extends("layouts.main")

@section("container")
    <h3 class="mb-3 text-center">{{ $title }}</h3>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post">
                @if ( request("category"))
                    <input type="hidden" name="category" value="{{ request("category") }}"
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request("search")}}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($p->count())
        <div class="card mb-3">
            @if ($p[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $p[0]->image)}}" alt="{{ $p[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $p[0]->category->name }}" class="card-img-top" alt="{{ $p[0]->category->name }}">
            @endif
            <div class="card-body text-center">
            <h5 class="card-title"><a class="text-decoration-none text-dark " href="/post/{{ $p[0]->slug}}">{{ $p[0]->title }}</a></h5>
            <p>
                <small class="text-muted">
                    By. <a href="/post?author={{ $p[0]->author->username }}" class="text-decoration-none">
                        {{ $p[0]->author->name }}
                    </a> in
                    <a class="text-decoration-none" href="/post?category={{ $p[0]->category->slug }}">{{ $p[0]->category->name }}
                    </a>
                </small>
                {{ $p[0]->created_at->diffForHumans() }}
            </p>

            <p class="card-text">{{ $p[0]->excerpt }}</p>

            <a class="text-decoration-none btn btn-primary" href="/post/{{ $p[0]->slug}}">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-5">No Posts Found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($p as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="card-img-top">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title}}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">
                                    {{ $post->author->name }}
                                </a>
                            </small>
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                        <p class="card-text">{{ $post->excerpt}}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-end">
        {{ $p->links() }}
    </div>
@endsection
