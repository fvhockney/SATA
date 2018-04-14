@extends('layouts.pageLayout')

@section('title')
  'title'
@endsection

@section('description')
  'description'
@endsection

@section('content')
  <h1>Money</h1>
  <p>
    Since 1985, the currency of Israel is the New Israel Shekel (NIS) &#8362;. Denominations of banknotes include &#8362;20, &#8362;50, &#8362;100, &#8362;200. Coins are called, “Agora,” or “Agorot (plural).” Coins include &#8362;1/2, &#8362;1, &#8362;2, &#8362;5, &#8362;10, 1 Agora (1/100 NIS), 5 Agorot (1/20 NIS), and 10 Agorot (1/10 NIS).
  </p>

  <h3>Exchanging Money</h3>
  <p>
    <ul>
      <li>Add JS conversion app</li>
      <ul>
        <li>Possibly api to <a href="https://www.xe.com/currencyconverter/">XE Converter</a></li>
      </ul>
      <li>Add graph over time</li>
      <li>Map function with known currency conversion locations</li>
        <ul>
          <li>Include rates and reviews if possible</li>
        </ul>
        <li>How much to plan on spending</li>
        <ul>
          <li>Prices of common items by catagory</li>
          <li>Add ability to compare prices in Germany to prices in Israel</li>
        </ul>
    </ul>
  </p>
@endsection
