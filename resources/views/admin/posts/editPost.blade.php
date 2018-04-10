@extends('layouts.sectionlayout')

@section('title', 'Edit Post')

@section('description')
  'Edit a post on Typing Cat Consulting.'
@endsection

@section('pageNumber', 'E1')

@section('content')

    <div class="container py-5">
      <form method="POST" action={{ action('AdminPostsController@update', $post->slug) }}>
        {{ method_field('PATCH') }}
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label><br />
        <input class="form-control" type="text" id="title" name="title" value="{{ old('title') ? old('title') : $post->title }}">
      </div>
      <div class="form-group">
        <label for="subtitle">Subtitle</label><br />
        <input class="form-control" type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') ? old('subtitle') : $post->subtitle }}">
      </div>
      <div class="form-group">
        <label for="slug">Slug</label><br />
        <input class="form-control" type="text" id="slug" name="slug" value="{{ old('slug') ? old('slug') : $post->slug }}">
      </div>
      <div class="form-group">
        <label for="content">Content</label><br />
        <textarea class="form-control" rows="30" columns="25" id="content" name="content">{{ old('content') ? old('content') : $post->content }}</textarea>
      </div>
      <fieldset class="form-group" name="tags">
        <legend>Associated tags:</legend>
        @foreach ($post->tags as $tag)
          <div class="form-check">
            <input class="form-check-input" style="width:fit-content;" type="checkbox" name="tag[]" value="{{ $tag->name }}" checked />
            <label class="form-check-label" for="{{ $tag->name }}">{{ $tag->name }}</label>
          </div>
        @endforeach
        <div class="form-group">
          <label for="newTags">Add tags:</label>
          <input class="form-control" type="text" name="newTags" value="{{ old('newTags') }}">
        </div>
      </fieldset>
      <div class="full-btn-block">
        <button class="btn btn-success btn-large btn-block" type="submit">Update</button>
      </div>
    </form>
    </div>


@endsection
