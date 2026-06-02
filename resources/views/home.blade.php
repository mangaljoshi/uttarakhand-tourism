@extends('layouts.app') 
    @section('content')


    <section class="hero">
        <h1>Explore Uttarakhand</h1>

        <p>Land of Mountains and Adventure</p>

        <button onclick="window.location.href='/contact'">
            Book Tour
        </button>    
    </section>
    <section class="destinations">
        <h2>Popular Destinations</h2>

        <div class="destination-container">
            <div class="card">
                <img src="images/nainital.jpeg" />
                <h3>Nainital</h3>
            </div>

            <div class="card">
                <img src="images/mussoorie.jpeg" />
                <h3>Mussoorie</h3>
            </div>

            <div class="card">
                <img src="images/auli.jpeg" />
                <h3>Auli</h3>
            </div>
        </div>
    </section>

    <section class="packages">
        <h2>Top Tour Packages</h2>

        <div class="package-container">
            <div class="package-card">
                <img src="images/kedarnath.jpeg" />

                <h3>Kedarnath Package</h3>

                <p>3 Days / 2 Nights</p>

                <h4>₹7,999</h4>

                <a href="/contact" class="book-btn">
                    Book Tour
                </a>           
            </div>

            <div class="package-card">
                <img src="images/mussoorie.jpeg" />

                <h3>Mussoorie Package</h3>

                <p>2 Days / 1 Night</p>

                <h4>₹5,999</h4>

                <a href="/contact" class="book-btn">
                    Book Tour
                </a>
            </div>

            <div class="package-card">
                <img src="images/auli.jpeg" />

                <h3>Auli Package</h3>

                <p>4 Days / 3 Nights</p>

                <h4>₹9,999</h4>

                <<a href="/contact" class="book-btn">
                    Book Tour
                </a>
            </div>
        </div>
    </section>

    <section class="why-us">
        <h2>Why Choose Us</h2>

        <div class="why-container">
            <div class="why-card">
                <h3>🏔️ Best Destinations</h3>
                <p>Explore the most beautiful places of Uttarakhand.</p>
            </div>

            <div class="why-card">
                <h3>🚌 Comfortable Travel</h3>
                <p>Safe and comfortable transportation facilities.</p>
            </div>

            <div class="why-card">
                <h3>🏨 Luxury Hotels</h3>
                <p>Stay in top-rated hotels with excellent services.</p>
            </div>

            <div class="why-card">
                <h3>💰 Affordable Packages</h3>
                <p>Budget-friendly tour packages for everyone.</p>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="stat-box">
            <h2>50+</h2>
            <p>Tour Packages</p>
        </div>

        <div class="stat-box">
            <h2>10K+</h2>
            <p>Happy Travelers</p>
        </div>

        <div class="stat-box">
            <h2>100+</h2>
            <p>Destinations</p>
        </div>

        <div class="stat-box">
            <h2>24/7</h2>
            <p>Support</p>
        </div>
    </section>
    <section class="gallery">
        <h2>Photo Gallery</h2>

        <div class="gallery-container">
            <img src="{{ asset('images/nainital1.jpeg') }}" />
            <img src="{{asset('images/mussoorie1.jpeg') }}" />
            <img src="{{asset('images/auli1.jpeg') }}" />
            <img src="{{asset('images/kedarnath1.jpeg') }}" />
            <img src="{{asset('images/rishikesh1.jpeg') }}" />
            <img src=" {{asset('images/chopta1.jpeg')}} " />
        </div>
    </section>
    <section class="contact">
    

        @include('partials.contact-form')
    </section>

@endsection
