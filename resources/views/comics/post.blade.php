@extends('layouts.app')

@section('content')
    {{-- incluso la section jumbotron --}}
    @include('partials.jumbotron')

    {{-- section thumb --}}
    <section class="thumb position-relative">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="" class=" position-absolute" width="300px">
        </div>
    </section>

    {{-- section description --}}
    <section class="description py-5">
        <div class="container">
            <div class="row">

                {{-- left --}}
                <div class="col-8">
                    {{-- title --}}
                    <h2 class=" pb-3">{{ strtoupper($comic['title']) }}</h2>

                    {{-- availability banner --}}
                    <div class="info_comic d-flex text-light">
                        <div class="Available flex-grow-1 p-3 d-flex justify-content-between"
                            style="border-right: 1.5px solid gray">
                            <span class="text_available">U.S Price:
                                <span class="text-white">{{ $comic['price'] }}</span>
                            </span>
                            <span class="text_available">Available</span>
                        </div>
                        <div class="check_availability p-3">
                            <span>
                                Check Availability <span>&#11206;</span>
                            </span>
                        </div>
                    </div>

                    {{-- description --}}
                    <p class=" pt-3">
                        {!! $comic['description'] !!}
                    </p>

                </div>

                {{-- right --}}
                <div class="col-4 d-flex  flex-column">
                    <h5 class=" text-end">ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="coupon">
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- @dd($comic) --}}
