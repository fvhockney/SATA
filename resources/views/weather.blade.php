@extends('layouts.pageLayout')

@section('title')
  'title'
@endsection

@section('description')
  'description'
@endsection

@section('content')
  <h2>Weather</h2>
  <h3>Summer <small class="text-muted">(Jun/Jul/Aug/Early Sep)</small></h3>
  <p>
    Temperatures in the high 80°’s, 90°’s. Tel Aviv, and Tiberius will be hot and humid. Jerusalem is dryer and cooler, particularly at night. Masada and Eilat are extremely hot (110°+!) but dry. There won’t be a drop of rain.
  </p>

  <h3>Spring/Fall <small class="text-muted">(late Mar/Apr/May late Sep/Oct/Nov)</small></h3>
  <p>
    Daytime temperatures will be very pleasant: 60°-70°-ish in most of the country (still hot, though, at the Red and Dead Seas). Jerusalem will be in the 40°’s, 50°’s in the evening. There’ll be some rain - nothing torrential.
  </p>

  <h3>Winter <small class="text-muted">(Dec/Jan/Feb/early Mar)</small></h3>
  <p>
    Winter weather can fluctuate. Some winters are mild and sunny, some severe and overcast. There’s often heavy rain and, in January and February, even snow sometimes. It will probably be in the 50°’s, 60°’s most places, but in the 40°’s in Jerusalem and the Galilee hills —and very cold at night.
  </p>

  <h3>Temperatures by Month and City</h3>
  <p>
    Temperatures can vary widely so just pack for the “right” weather and you’ll be fine. Seasons overlap of course, but general guidelines are:
  </p>

  <div id="weather">
    <weather-temps></weather-temps>
  </div>
  Insert Interactive Vue Components

  <script src="{{ mix('/js/app.js') }}"></script>

@endsection
