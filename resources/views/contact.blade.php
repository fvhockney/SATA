@extends('layouts.pageLayout')

@section('title')
  'title'
@endsection

@section('description')
  'description'
@endsection

@section('content')

  <form action="POST">
    <div class="form-group form-row">
      <div class="col">
        <input type="text" class="form-control" name="firstName" placeholder="First Name">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="lastName" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group form-row">
      <div class="col">
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="col">
        <input type="text" class="form-control" name="phone" placeholder="Phone">
      </div>
    </div>
    <div class="form-group form-row">
      <textarea class="form-control" name="message" rows="8" cols="80" placeholder="Message ... "></textarea>
    </div>
    <div class="form-group form-row">
      <div class="col">
        I'd like to receive:
        <div class="form-check">
          <input type="checkbox" class="form-check-input" value="newsletter" id="newsletterCheck">
          <label for="newsletterCheck" class="form-check-label">Monthly Newsletter</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" value="newsletter" id="specialOffersCheck">
          <label for="specialOffersCheck" class="form-check-label">Special Offers</label>
        </div>
      </div>
    </div>
    <div class="form-group form-row form-inline">
      <button type="submit" class="btn btn-primary mr-2" name="button">Submit</button>
      <button type="reset" class="btn btn-secondary" name="button">Reset</button>
    </div>
  </form>

@endsection
