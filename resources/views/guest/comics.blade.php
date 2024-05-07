@extends('layouts.app')

@section('content')

<section id="jumbotron">

</section>

<section id="current_series" class="py-5 bg-dark">
    <div class="container">
        <div class="title-section bg-primary d-inline-block px-3">
            <h2 class="text-white">CURRENT SERIES</h2>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="more-comics d-flex justify-content-center mt-4">
            <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
        </div>
    </div>
</section>

<section id="actions_comics" class="bg-primary py-5">

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 text-light">
            <div class="col d-flex align-items-center action_badge">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" class="pe-3" alt="">
                <h6>DIGITAL COMICS</h6>
            </div>
            <div class="col d-flex align-items-center action_badge">
                <img src="{{ Vite::asset('resources\img\buy-comics-merchandise.png')}}" class="pe-3" alt="">
                <h6>DC MERCHANDISE</h6>
            </div>
            <div class="col d-flex align-items-center action_badge">
                <img src="{{ Vite::asset('resources\img\buy-comics-subscriptions.png')}}" class="pe-3" alt="">
                <h6>SUBSCRIPTION</h6>
            </div>
            <div class="col d-flex align-items-center action_badge">
                <img src="{{ Vite::asset('resources\img\buy-comics-shop-locator.png')}}" class="pe-3" alt="">
                <h6>COMIC SHOP LOCATOR</h6>
            </div>
            <div class="col d-flex align-items-center action_badge">
                <img src="{{ Vite::asset('resources\img\buy-dc-power-visa.svg')}}" class="pe-3" alt="">
                <h6>DC POWER VISA</h6>
            </div>
        </div>
    </div>

</section>

@endsection