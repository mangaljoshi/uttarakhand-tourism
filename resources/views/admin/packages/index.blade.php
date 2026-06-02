 @extends('layouts.app')

@section('content')

<!-- <a href="/admin/packages/create"
   class="btn btn-primary">
   Add Package
</a> -->

<div class="packages-container">

@foreach($packages as $package)

<div class="package-card">

<img src="{{ asset('imagesdata/'.$package->image) }}">

<div class="package-body">

<h3>{{ $package->title }}</h3>

<p>{{ $package->duration }}</p>

<h4>₹{{ $package->price }}</h4>

</div>

</div>

@endforeach

</div>

@endsection