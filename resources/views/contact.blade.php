@extends('layouts.pageLayout')

@section('title')
    'title'
@endsection

@section('description')
    'description'
@endsection

@section('head-photo')
    <div id="contact-head-photo" class="head-photo">
        <h1 class="text-center text-light mt-5">There Are No Stupid Questions</h1>
    </div>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-8">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid amet, aspernatur blanditiis consectetur culpa delectus dicta dolor dolores fuga necessitatibus officia porro quasi quis quisquam reiciendis tempora tempore ullam.
            </p>
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
                    <textarea class="form-control" name="message" rows="8" cols="80"
                              placeholder="Message ... "></textarea>
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
        </div>
        <div class="col-md-4 order-md-first mt-3 mt-md-0">
            <table class="table" style="width: fit-content;">
                <tbody>
                <tr>
                    <td class="border-top-0">Physical Address:</td>
                    <td class="border-top-0">Fernweh Israel<br>P.O. Box 555<br>Trenton, NJ 55548</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>contact@fernwehisrael.com</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection
