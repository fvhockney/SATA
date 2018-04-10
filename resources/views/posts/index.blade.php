@extends('layouts.pageLayout')

@section('title', 'Blog')

@section('description')
  'Israel Blog'
@endsection

@section('content')
  <div class="container mt-5 pb-5">
    <div class="row">
      <div class="col">
        <div>
          @if (str_contains(url()->current(), 'tags'))
            <h1>
              Posts tagged with {{ str_after(url()->current(), 'tags/') }}
            </h1>
          @endif
          @foreach ($posts as $post)
            <div class="media">
              @if ($post->display_img)
                <img src="{{ asset('storage/postPhotos/' . $post->display_img) }}" width="150px" height="150px" class="mr-3">
              @endif
              <div class="media-body">
                <h3 class="mt-0"><a href="{{ action('PostController@show', $post->slug) }}">{{ $post->title }}</a></h3>
                <h5> {{ $post->subtitle }} </h5>
                <p>
                  {{ substr(strip_tags($post->content), 0, 300) }}{{ strlen(strip_tags($post->content)) > 300 ? " ..." : ""}}
                </p>
              </div>
            </div>
          @endforeach
          {{ $posts -> links() }}
        </div>
      </div>
      {{-- <div class="col-lg-3 col-2">
        @include('layouts.sidebar')
      </div> --}}
    </div>
  </div>

@endsection
