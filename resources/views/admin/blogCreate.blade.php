@extends('layouts.adminLayout')

@section('title')
  Admin Create Blog
@endsection

@section('description')
  Leave if you aren't one of the chosen
@endsection

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <div class="container py-5">

    @if ($errors->any())
      <div>
        <div class="alert-contact alert-danger">
          <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <article>
      <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label><br />
          <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="subtitle">Subtitle</label><br />
          <input class="form-control" type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
        </div>
        <div class="form-group">
          <label for="subtitle">Slug</label><br />
          <input class="form-control" type="text" id="slug" name="slug" value="{{ old('slug') }}">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="otherAuthor" id="otherAuthor" value="yes" {{ old('otherAuthor') ? 'checked' : null }}>
          <label class="form-check-label" for="otherAuthor">This post was written by someone else:</label>
        </div>
        <fieldset>
          <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author" value="{{ old('author') }}" disabled>
          </div>
          <div class="form-group">
            <label for="authorEmail">Author e-mail</label>
            <input class="form-control" type="text" name="authorEmail" id="authorEmail" value="{{ old('authorEmail') }}" disabled>
          </div>
        </fieldset>
        <div class="form-group">
          <label for="displayImage">Display image upload</label>
          <input class="form-control-file" type="file" name="displayImage" id="displayImage">
        </div>

        <div class="form-group">
          <label for="content">Content</label> <br />
          <textarea class="form-control" rows="15" columns="25" id="content" name="content">{{ old('content') }}</textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags</label>
          <input class="form-control" name="tags" id="tags" type="text" value="{{ old('tags') }}">
        </div>
        <div>
          <button class="btn btn-success btn-large btn-block" type="submit">Publish</button>
        </div>
      </form>
    </article>
  </div>
  
  <script src="/js/tinymce/tinymce.min.js"></script>
  <script src="/js/tinyMCEConfig.js"></script>
  <script>
  $('#otherAuthor').on('click', function(){
    if ($('#otherAuthor').is(':checked')) {
      $('#author').prop('disabled', false);
      $('#authorEmail').prop('disabled', false);
    } else {
      $('#author').prop('disabled', true);
      $('#authorEmail').prop('disabled', true);
    }
  });
  </script>
@endsection
