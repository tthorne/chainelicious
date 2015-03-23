@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Welcome to <span class="head">Chainelicious</span>!</h1>
                    <h2 class="subhead">What Is Chainmail?</h2>
                    <p>Chainmail also called ringmail, chain armor, ring armor, and mail, was the type of armor that is believed to have been created by the Celts that was worn by soldiers in the Middle Ages.  Chainmail is created by linking metal rings together in various patterns to form a mesh. Today chainmail is still used in everyday needs by butchers, woodcarvers, scuba divers and police.  Other than the everyday needs chainmail has been made into jewelery, and is still in use for Historical re-enactments, and movies.</p>
                    <hr>
                    <h2 class="subhead">The Materials We Use</h2>
                    <p>Right now we are using Anodized Aluminum and Stainless Steel for our jump rings, but plan on adding Sterling Silver, Niobium, and Titanium in the future. The metals that we use for our closures are generally Sterling Silver or Stainless Steel unless noted differently for the item. However if there is another ring material such as rubber or plastic we can get it.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Breaker Section -->
    <section id="jumpring">
        <div class="jumpring-section">
            <div class="container">
                <div class="col-lg-12">
                    <img src="{{ URL::asset('img/jumpring.png') }}" class="img-responsive center" alt="Chainelicious">
                </div>
            </div>
        </div>
    </section>
@stop