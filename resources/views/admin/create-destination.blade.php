 @extends('layouts.app')

@section('content')

<div class="contact-page">
    <div class="contact-container">

        <h1>Add Destination</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="/admin/destination/store" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" placeholder="Destination Name" required>

            <input type="file" name="image" required>

            <textarea name="description" placeholder="Description" required></textarea>

            <button type="submit">Add Destination</button>

        </form>

    </div>
</div>

@endsection