@extends('layouts.app')

@section('content')

<div class="edit-container">

    <h1 class="edit-title">Edit Destination</h1>

    <form action="/admin/destination/update/{{ $destination->id }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ $destination->name }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Current Image</label><br>

            <img src="{{ asset('images/'.$destination->image) }}"
                 class="preview-image">
        </div>

        <div class="form-group">
            <label>Change Image</label>

            <input type="file"
                   name="image"
                   class="form-control">
        </div>

        <div class="form-group">
            <label>Description</label>

            <textarea name="description"
                      rows="5"
                      class="form-control">{{ $destination->description }}</textarea>
        </div>

        <button type="submit" class="update-btn">
            Update Destination
        </button>

    </form>

</div>

@endsection