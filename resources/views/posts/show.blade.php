@extends('layouts.pageLayout')


@section('title')
  {{ $post->title }}
@endsection

@section('description')
  '{{ $post->title . ' | ' . $post->subtitle }}'
@endsection

@section('content')
    <div class="container mt-5 pb-5">
      <div class="row">
        <div class="col">
          <article>
            <h1> {{ $post->title }} </h1>
            <h2> {{ $post->subtitle }} </h2>
            <h3> @if ($post->author)
              By: {{ $post->author }}
            @elseif ($post->user_id)
              By: {{ $post->user->name }}
            @endif
            on <i>{{ $post->created_at->toFormattedDateString() }}</i>
          </h3>
          {{-- @include('layouts.socialmedia') --}}
          @if ($post->tags)
            <div class="d-flex flex-wrap justify-items-start" id="tags">
              @foreach ($post->tags as $tag)
                <a class="btn btn-outline-primary mr-1 mb-1" href="/blog/tags/{{ $tag->name }}">{{ $tag->name }}</a>
              @endforeach
            </div>
          @endif
          <p>
            {!! $post->content !!}
          </p>
          <h5>
            @if ($post->author)
              Contact {{ $post->author }}
            @elseif ($post->user_id)
              Contact {{ $post->user->name }}
            @endif
            @if ($post->author_email)
              at {{ $post->author_email }}
            @elseif ($post->user_id)
              at {{ $post->user->email }}
            @endif
          </h5>
        </article>
        <div class="fake-simple-paginate">
          @if (!is_null($previous))
            <a class="btn btn-primary" href="{{ URL::to('blog/' . $previous->slug) }}">Previous</a>
          @else
            <a class="btn btn-primary disabled" tabindex="-1"href="">Previous</a>
          @endif

          @if (!is_null($next))
            <a class="btn btn-primary" href="{{ URL::to('blog/' . $next->slug) }}">Next</a>
          @else
            <a class="btn btn-primary disabled" tabindex="-1" href="">Next</a>
          @endif
        </div>
      </div>

      {{-- <div class="col-lg-3 col-2">
        @include('layouts.sidebar')
      </div> --}}
    </div>
  </div>
@endsection
