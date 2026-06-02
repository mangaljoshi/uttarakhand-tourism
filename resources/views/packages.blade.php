@extends('layouts.app')

@section('content')

<h1 class="section-title">
Tour Packages
</h1>

<div class="packages-container">

@foreach($packages as $package)

<div class="package-card">

<img src="{{ asset('imagesdata/'.$package->image) }}">

<div class="package-body">

<h3>{{ $package->title }}</h3>

<p>{{ $package->duration }}</p>

<p>{{ $package->description }}</p>

<h4>₹{{ $package->price }}</h4>

<a href="/contact" class="book-btn">
    Book Tour
</a>

</div>

</div>

@endforeach

</div>

@endsection